<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requet;
//use App\Http\Controllers\Controller;
use App\Post;
use Framework\Sessions;
use DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $posts = Post::all();
      // $posts = Post::where('title','title in the table')->get();
      // $posts = Post::DB::select('SELECT * FROM posts');
       $posts = Post::orderBy('title','asc')->take(4)->get();
       
       return view('pages.welcome')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request,array(
            'title' => 'required|max:30|unique:posts',
            'body'  => 'required'
        ));
        //store in the database
        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        //passes massege after save
        $request->session()->flash('success', 'The post was successfully save!');

        //redirect to another page
        return redirect()->route('posts.show', $post->id);
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
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
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
         //validate the data
         $this->validate($request,array(
            'title' => 'required|max:30|unique:posts',
            'body'  => 'required'
        ));
        //store in the database
        $post = Post::find($id);

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();

        //passes massege after save
        $request->session()->flash('success', 'The post was successfully save!');

        //redirect to another page
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
