<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->user_type === 'ADM'){
            $totalAmount = Orders::sum('total');
            $totalProducts = Products::count();
            $totalOrders = Orders::count();
            $totalUsers = User::where('user_type','USER')->count();
            return view('admin.dashboard',['totalOrders'=>$totalOrders,'totalUsers'=>$totalUsers,'totalAmount'=>$totalAmount,'totalProducts'=>$totalProducts]);
        }else{
            Auth::logout();
             return  redirect()->route('client.index')->with('error', 'Xin lổi bạn không đủ quyền!');
        }
    }
    public function logoutAdmin(){
        Auth::logout();
        return  redirect()->route('client.index')->with('success', 'Đăng xuất thành công!');
    }
}
