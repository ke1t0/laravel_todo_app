<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
  function top() {
    $posts = \App\Post::all();
    return view('home.top', compact('posts'));
  }

  function show($id) {
    $post = \App\Post::find($id);
    return view('home.show', compact('post'));
  }

  function new() {
    return view('home.new');
  }

  function create(Request $request) {
    $title = $request->input('title');
    \App\Post::create(['title' => $title]);
    return redirect('/hello');
  }

  function edit($id) {
    $post = \App\Post::find($id);
    return view('home.edit', compact('post'));
  }

  function update(Request $request, $id) {
    $post = \App\Post::find($id);
    $post->title = $request->title;
    $post->save();
    return redirect('/hello');
  }

  function destroy($id) {
    $post = \App\Post::find($id);
    $post->delete();
    return redirect('/hello');
  }
}
