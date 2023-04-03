<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about($a, $b){

        if($a > $b)
            $max = $a;
        elseif($a < $b)
            $max = $b;
        else
            $max = $a;

        return view('about', compact('max'));
    }
}
