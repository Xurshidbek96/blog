<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Http\Requests\PostStoreRequest;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('posts')
        ->join('categories', 'posts.category_id', '=', 'categories.id')
        ->select('posts.*', 'categories.name')->paginate(10);
        // return $posts;
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        if($request->hasFile('img'))
        {
            $file = $request->file('img');
            $imageName = time().'-'.$file->getClientOriginalName();
            $file->move('images/', $imageName);

            $requestData['img'] = $imageName;
        }

        Post::create($requestData);
        return redirect()->route('admin.posts.index')->with('success', 'Success done');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::find($id);

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestData = $request->all();


        if($request->hasFile('img'))
        {
            $this->unlink_file($id);

            $file = $request->file('img');
            $imageName = time().'-'.$file->getClientOriginalName();
            $imagePath = $file->move('images/', $imageName);
            $requestData['img'] = $imageName;

        }

        Post::find($id)->update($requestData);
        return redirect()->route('admin.posts.index')->with('success', 'Update done');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->unlink_file($id);
        Post::find($id)->delete();

        return redirect()->route('admin.posts.index')->with('success', 'Delete done');
    }

    // extra functions
    public function unlink_file($id){
        $post = Post::find($id);
        if(isset($post->img) && file_exists(public_path('/images/'.$post->img))){
            unlink(public_path('/images/'.$post->img));
        }
    }
}
