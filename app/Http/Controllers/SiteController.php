<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about($id, $name){

        return view('about', compact('id', 'name'));
    }
}
