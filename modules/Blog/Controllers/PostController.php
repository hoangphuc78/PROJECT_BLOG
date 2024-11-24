<?php
namespace Blog\Controllers;

use Backend\Classes\Controller;
use Blog\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('blog::index', compact('posts'));
    }

    public function create()
    {
        return view('blog::create');
    }

    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect()->route('blog.index');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('blog::edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('blog.index');
    }

    public function destroy($id)
    {
        Post::destroy($id);
        return redirect()->route('blog.index');
    }
}
