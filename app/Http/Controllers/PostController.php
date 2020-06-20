<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostStoreRequest;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::has('category')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create')->with('categories', $categories);
    }

    public function store(PostStoreRequest $request)
    {
        $input = $request->all();
        $input['creator_id'] = Auth::id();
        $post = Post::create($input);
        return redirect(route('post.index'));
    }

    public function show($id)
    {
        return view('posts.show');
    }

    public function edit(Post $post)
    {
        //$this->authorize('edit-post', $post);
        if(!Auth::user()->can('editPost', $post));
        {
            abort(403);
        }

        dd($post->title);
        return view('posts.edit');
    }
}
