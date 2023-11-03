<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class FrontendControler extends Controller
{

    public function index()
    {
        $feedbackItems = Feedback::paginate(10); // Paginate with 10 items per page

        return view('frontend.index', ['feedbackItems' => $feedbackItems]);
    }

    public function  CommentStore(Request $request)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->user_id = auth()->id();
        $comment->feedback_id = Crypt::decrypt($request->feedback_id);

        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully!');

    }
}
