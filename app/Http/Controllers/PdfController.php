<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PdfController extends Controller
{
    public function index()
    {
        return view('pdf.index');
    }

    public function downloadPDF(Request $request)
    {
//        $product = Product::latest()->paginate(10);

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Test</h1>');
        return $pdf->stream();

    }
}
