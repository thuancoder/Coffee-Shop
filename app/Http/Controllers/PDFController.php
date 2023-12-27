<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{


    public function exportPDF()
    {
        $orders = DB::table('orders')->get();
        // Create a new Dompdf instance
        $dompdf = new Dompdf();

        // Your HTML content for the PDF
        $html = '';
        foreach ($orders as $order) {
            $html .= '
            <div class="product">
                <h2>'.$order->customer_name.'</h2>
                <h2>' . $order->customer_email. '</h2>
            </div>
        ';
        }

        // Load the HTML into Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to the browser
        $dompdf->stream('document.pdf', ['Attachment' => false]);
    }
}
