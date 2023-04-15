<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function groups(){
        return view('pages.groups');
    }

    public function teachers(){
        return view('pages.teachers');
    }

}