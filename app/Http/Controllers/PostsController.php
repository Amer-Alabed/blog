<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::all();
        // dd($posts);
        return view('blog.index')->with('posts',Post::get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required',
            'discription'=> 'required',
            'image' => ['required', 'mimes:png,jpg', 'max:5048']


        ]);
        $slug = Str::slug($request->title,'-');
        $newImageName = uniqid() . '-'.$slug.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);

        Post::create([
            'title'=>$request->input('title'),
            'discription'=>$request->input('discription'),
            'slug'=>$slug,
            'image_path'=>$newImageName,
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        return view('blog.show')->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        return view('blog.edit')->with('post', Post::where('slug', $slug)->first());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
            'title'=> 'required',
            'discription'=> 'required',
            'image' => ['required', 'mimes:png,jpg', 'max:5048']
        ]);

        // $slug = Str::slug($request->title,'-');
        $newImageName = uniqid() . '-'.$slug.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);
        Post::where('slug', $slug)
        ->update([
            'title'=>$request->input('title'),
            'discription'=>$request->input('discription'),
            'image_path'=>$newImageName,
            'slug'=>$slug,
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/blog/'. $slug)->with('success','Done updata subject');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        Post::where('slug', $slug)->delete();
        return redirect('/blog')->with('success','Done Delete Post');
    }
}
