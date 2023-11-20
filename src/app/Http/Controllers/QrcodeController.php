<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class QrcodeController extends Controller
{
    //Webカメラによるqrcode読み取り画面表示
    public function qr_form()
    {   
        return view('qr_form');
    }
    //画像アップロードによるqrcode読み取り画面表示
    public function qr_file()
    {   
        return view('qr_file');
    }

    // public function qr_result(Request $request)
    // {
    // $check=$request->input('test');
    // $image=$request->file('inputQRCode')->store('public/images/');
    // $product = new Products;
    // $product->qr_images = $check($image);
    // $product->save();
    // return view('qr_result', compact('check','image'));
    // }
}



