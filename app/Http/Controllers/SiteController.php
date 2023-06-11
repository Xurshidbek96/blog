<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function get_index(){
        $infos = Info::orderBy('id', 'DESC')->take(2)->get();
        return view('welcome', compact('infos'));
    }

    public function get_groups(){
        return view('pages.groups');
    }

    public function get_teachers(){
        return view('pages.teachers');
    }

    public function post_store(Request $request){

        // return $request ;
        DB::table('orders')->insert([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return back();
    }

}
