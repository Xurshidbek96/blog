<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function store(Request $request){

        // return $request ;
        DB::table('orders')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        
        return back();
    }

}
