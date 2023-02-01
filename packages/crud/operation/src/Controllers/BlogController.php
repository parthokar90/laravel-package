<?php
namespace Crud\Operation\Controllers;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

use Crud\Operation\Models\Post;


class BlogController
{

    // show all blog list
    public function index(){
        $post = Post::orderBy('id','DESC')->get();
        return view('view::index', compact('post'));
    }

    // create new blog
    public function create(){
        return view('view::create');
    }

    // create new blog
    public function store(Request $request){
        $post = new Post; 
        $post->title = $request->title; 
        $post->save(); 
        return Redirect::to('blog/list')->with('success','Post has been saved');
    }

    // show single blog post
    public function show($id){
        $post = Post::find($id);
        return view('view::show', compact('post'));
    }

    // edit single blog post
    public function edit($id){
        $post = Post::find($id);
        return view('view::edit', compact('post'));
    }

    //update single blog post
    public function update(Request $request,$id){
        $post = Post::find($id);
        $post->title = $request->title; 
        $post->save(); 
        return Redirect::to('blog/list')->with('success','Post has been update');
    }

    //delete single blog post 
    public function delete($id){
        $post = Post::find($id);
        $post->delete(); 
        return Redirect::to('blog/list')->with('success','Post has been deleted');
    }



}