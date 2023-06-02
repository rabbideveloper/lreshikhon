<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MathController extends Controller
{
    public function sum($num1, $num2)
    {
        $result = $num1 + $num2;
        return view('sum', compact('result'));
    }

    public function sub()
    {
        $uri = \request()->path();
        $url = request()->url();
        $method = request()->method();
        return $method;
    }

    public function mult()
    {
        return "Sum Route calling";
    }

    public function div()
    {
        return "Sum Route calling";
    }
}
