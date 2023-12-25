<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon; 
use Illuminate\Auth\Middleware\AuthenticateWithBasicAuth;

class FormController extends Controller
{
    public function index(Request $request)
    {
        $subYear = Carbon::now()->subMonths(6)->format('Y');
        $year = Carbon::now()->format('Y');
        $years = [$year];
        if ($subYear < $year) {
            $years = [$year, $subYear];
        }
        return view('sample.form',compact('years'));
    }
}