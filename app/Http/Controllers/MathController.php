<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function Sum($number1,$number2) {
        $sum = $number1 + $number2;
        return view('sum',compact('sum'));
    }

    public function Multy($number1,$number2) {
        $multy = $number1 * $number2;
        return view('multy',compact('multy'));
    }
}
