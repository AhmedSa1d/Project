<?php

namespace Modules\Posts\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\posts\Entities\Post;
use Modules\posts\Http\Requests\PostRequest;
use Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        
        $posts = Post::orderBy('id')->paginate(10);
        return view('posts::posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('posts::posts.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    
    public function store(PostRequest $request)
    {
            $data =$request->all();
            $post = Post::create($data);
            // $post = new Post;
            // $post->title = $validated->title;
            // $post->slug  = $validated->slug;
            // $post->body  = $validated->body;
            // $post->save();

            Session::flash('success','This post was successfuly created');
            return redirect()->route('posts.create');
 
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts::posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('posts::posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(PostRequest $request , Post $post)
    {
        $data = $request->all();
        $post->update($data);
        Session::flash('success','This post was successfuly updated');
            return redirect()->route('posts.show',$post->id);

    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy( Post $post )
    {
        $post->delete();
        Session::flash('success','The post has been deleted');
        return redirect()->route('posts.index');
    }
}
