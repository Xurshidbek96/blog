<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Info;
use Illuminate\Http\Request;
use App\Http\Requests\InfoStoreRequest;

class InfoController extends Controller
{

    public function index()
    {
        $infos = Info::orderBy('id', 'DESC')->paginate(3);

        return view('admin.infos.index', compact('infos'));
    }

    public function create(){
        return view('admin.infos.create');
    }

    public function store(InfoStoreRequest $request)
    {

        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
            $requestData['icon'] = $this->upload_file();
        }

        Info::create($requestData);

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

        $requestData = $request->all();

        if($request->hasFile('icon'))
        {
            $this->unlink_file($info);

            $requestData['icon'] = $this->upload_file();
        }

        $info->update($requestData);

        return redirect()->route('admin.infos.index');
    }

    public function destroy(Info $info)
    {

        $this->unlink_file($info);

        $info->delete();

        return redirect()->route('admin.infos.index');
    }

    public function unlink_file(Info $info){
        if(isset($info->icon) && file_exists(public_path('/icons/'.$info->icon)))
        {
            unlink(public_path('/icons/'.$info->icon));
        }
    }

    public function upload_file(){
        $file = request()->file('icon');
        $fileName = time().'-'.$file->getClientOriginalName();
        $file->move('icons/', $fileName);
        return $fileName;
    }
}
