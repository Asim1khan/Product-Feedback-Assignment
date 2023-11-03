<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class FeedbackController extends Controller
{
      public function index(){}
      public function create(){
   return view('frontend.feedback.create');
      }

      public function store(Request $request){
        $request->validate([
            'title' => 'required|max:255',
            'category' => 'required|in:bug,feature,improvement',
            'description' => 'required',
        ],
        [
            'title.required'=>'Title Field Required',
            'category.required'=>'Category Field Required',
            'description.required'=>'Description Field Required',
          ]);
        $feedback = new Feedback;
        $feedback->title = $request->title;
        $feedback->category = $request->category;
        $feedback->description = $request->description;
        $feedback->user_id = auth()->id();
        $feedback->save();
       return redirect()->route('home');
    }
    public function feedback($id)
    {
        $feedback = Feedback::findOrFail(Crypt::decrypt($id));
        $feedback->load('comments');

         return view('frontend.feedback.show',compact('feedback'));

    }

}
