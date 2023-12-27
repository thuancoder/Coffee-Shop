<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Mail\CheckoutMail;
use App\Models\OrderDetail;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function create(CheckoutRequest $request)
    {
        error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $orders=
            [
                'customer_name'=>$request->customer_name,
                'customer_phone'=>$request->customer_phone,
                'customer_email'=>$request->customer_email,
                'shipping_address'=>$request->shipping_address,
                'note'=>$request->note,
                'total'=>\Cart::getTotal(),
                'user_id'=>Auth::user()->id,
            ]
        ;
        $orders_id= DB::table('orders')->insertGetId($orders);
        $cartItems = \Cart::getContent();
        foreach ($cartItems as $item) {
            $data['items'] = [
                [
                    'name' => $item['name'],
                    'price' => $item['price'],
                    'desc'  => $item['name'],
                    'qty' => $item['quantity'],
                ]
            ];

            $orderItem = new OrderDetail();
            $orderItem->order_id = $orders_id;
            $orderItem->product_id = $item['id'];
            $orderItem->qty = $item['quantity'];
            $orderItem->price = $item['price'];
            $orderItem->save();
        }

        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = route('payment.return');
        $vnp_TmnCode = "FK7CQ2AI";//Mã website tại VNPAY
        $vnp_HashSecret = "GTLMPKRDEIQNVLODAXLLMWXNVMIVIAQH"; //Chuỗi bí mật

        $vnp_TxnRef = $orders_id; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn";
        $vnp_OrderType = "Coffee Garden";
        $vnp_Amount = \Cart::getTotal() * 100;
        $vnp_Locale = "VN";
        $vnp_BankCode = "NCB";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
        , 'message' => 'success'
        , 'data' => $vnp_Url);
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);

            Mail::to($request->customer_email)->send(new CheckoutMail($orders,$cartItems));
            die();
        } else {
            echo json_encode($returnData);

        }
        // vui lòng tham khảo thêm tại code demo

    }
    public function return(){
        return redirect()->route('checkpout.thanks');
    }

}
