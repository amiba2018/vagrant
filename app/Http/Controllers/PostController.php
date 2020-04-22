<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use Log;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index(Request $request)
    // {
        // dd($request);
        // $responseUrl = $request->input('response_url');
        // dd($responseUrl);
        // $posts = Post::all();
        // return $posts;
        // return Post::latest()->paginate();
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $post = new Post;
    //     $post->title = $request->title;
    //     $post->content = $request->content;
    //     $post->save();
    //     return redirect('api/posts');
    // }

    public function store(Request $request)
    {
        // dd($request->all());
        \Log::info($request->text);
        // if ($request->text == test) return true;
    //    return \Log::info($request->all());
    // exit;
            // $date = date('Y-m-d H:i:s');
            // $responseText = 'debug method are called at ' . $date;
            // return response()->json(['text'=>$responseText]);
        // return Post::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return $post;
    }

//     public function show(Post $post)
// {
//     // Eloquentオブジェクトを返す
//     return $post;
// }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect("api/posts/".$id);
        // $post->update($request->all());
        // return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        // $post = Post::find($id);
        // $post->delete();
        // return redirect('api/posts');

        // $post = Post::find($id);
        $deleted = $post->delete();
        // $deleted = $post->delete();
        return compact('deleted');
    }
}
