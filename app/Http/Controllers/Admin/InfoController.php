<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InfoController extends Controller
{
    public function index(){
        $infos = DB::table('infos')->orderBy('id', 'DESC')->get();

        // return $infos;
        return view('admin.infos.index', compact('infos'));
    }

    public function create(){
        return view('admin.infos.create');
    }

    public function store(Request $request){

        DB::table('infos')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon,
        ]);

        return redirect()->route('admin.infos.index');
    }
    
    public function show($id){
        $info = DB::table('infos')->where('id', $id)->first();

        return view('admin.infos.show', compact('info'));
    }

    public function edit($id){
        
        $info = DB::table('infos')->where('id', $id)->first();

        return view('admin.infos.edit', compact('info'));
    }

    public function update(Request $request, $id){

        DB::table('infos')->where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => $request->icon,
        ]);

        return redirect()->route('admin.infos.index');
    }

    public function destroy($id){
        DB::table('infos')->where('id', $id)->delete();

        return redirect()->route('admin.infos.index');
    }
}