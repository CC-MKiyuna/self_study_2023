<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class QrcodeController extends Controller
{
   //qrcode
    public function qr_form()
    {   
        return view('qr_form');
    }
    public function qr_result(Request $request)
    {
    $check=$request->input('test');
    $image=$request->file('inputQRCode')->store('public/images/');
    $product = new Products;
    $product->qr_images = $check($image);
    $product->save();
    return view('qr_result', compact('check','image'));
    }
}



