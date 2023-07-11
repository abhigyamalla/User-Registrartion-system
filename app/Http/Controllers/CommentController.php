<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function delete(Comment $comment){

       
        $userId = auth()->id();

        if ($comment->users_id !== $userId) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        $comment->delete();
    
        return back()->with('success','comment is deleted');
    }
     
    }

