<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view( 'index' )->withPosts( $posts );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view( 'post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // DD($request);
        $this->validate( $request, [
          'title' => 'required|min:2|max:86',
          'content' => 'required|min:2|max:255'
        ]);

        $post = new Post();

        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find ( $id );

        return view( 'post.show' )->withPost( $post );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find( $id );

        return view( 'post.edit' )->withPost( $post );
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
        //
        $this->validate( $request, [
          'title' => 'required|min:2|max:86',
          'content' => 'required|min:2|max:255'
        ]);

        $post = Post::find($id);

        $post->title = $request->title;
        $post->content = $request->content;

        $post->save();

        return redirect()->route( 'index' );
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
        $post = Post::find( $id );
        $post->delete();

        return redirect()->route( 'index' );
    }
}
