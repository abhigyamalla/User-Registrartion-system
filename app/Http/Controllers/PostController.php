<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $user = User::latest();

        if (request('search')) {
            $user->where('name', 'like', '%' . request('search') . '%');
        }
        return view('wel', [
            "users" => $user->paginate(10)
        ]);
    }

    public function show(User $user)
    {
        $post = $user->posts()->get();

        return view('wels', [
            "users" => $user,
            'posts' => $post

        ]);
    }


    public function showbyname(User $user)
    {

        return view('wels', [
            "users" => $user
        ]);
    }

    public function showPost(Post $post)
    {
        $comment=$post->comments()->get();

        
        return view('posts.show', [
            'post' => $post,
            'comments'=>$comment
        ]);
    }
    public function createcomment(Post $post){
        request()->validate([
            'body'=>'required'

        ]);
        Comment::create([
            'users_id'=>auth()->id(),
            'post_id'=>$post->id,
            'body'=>request('body')

        ]);

        return back()->with('success','comment has been added');
    }

 
}
