<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
   
    public function index()
    {
        $infos = Info::orderBy('id', 'DESC')->get();

        return view('admin.infos.index', compact('infos'));
    }

    public function store(Request $request)
    {
        Info::create($request->all());

        return redirect()->route('admin.infos.index');
    }
    
    public function show(Info $info)
    {
        return view('admin.infos.show', compact('info'));
    }
    
    public function edit(Info $info)
    {
        return view('admin.infos.edit', compact('info'));
    }

    public function update(Request $request, Info $info)
    {
        $info->update($request->all());

        return redirect()->route('admin.infos.index');
    }

    public function destroy(Info $info)
    {
        $info->delete();

        return redirect()->route('admin.infos.index');
    }
}