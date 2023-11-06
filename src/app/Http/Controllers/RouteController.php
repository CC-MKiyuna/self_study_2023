<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
   //ルーティング基礎
    public function index()
    {   
        $user='ルート';

        return view('route',compact('user'));
    }

   //uriのパラメータ制約
    public function paramete_varidation($id)
    {   
        $id_para=$id;

        return view('id_paramete',compact('id_para'));
    }

    //ミドルウェア用メソッド
    public function home()
    {   
        return view('home');
    }
    public function middleware_practice(Request $request)
    {   
        $result=$request->input('user_name');
        return view('dev_mypage',compact('result'));
    }
}



