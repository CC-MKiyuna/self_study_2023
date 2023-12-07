<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
   
    public function index()
    {   
        $user='ルート';

        return view('upload',compact('user'));
    }

  
}



