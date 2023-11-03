<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Feedback;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{

    public function index()
    {
      return view('admin.index');
    }
    public function loginForm()
    {
        return view('admin.login');
    }

    public function store(Request $request)
{
        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' =>$check['email'], 'password' => $check['password']])) {
            $notification=array(
                'message' =>' Admin Login Successfully ',
                'alert-type' =>'success');
          return redirect()->route('admin.dashboard')->with($notification);
        } else {


            $notification=array(
                'message' =>' invalid Email Or Password ',
                'alert-type' =>'success');

            return back()->with($notification);
        }
    }

    public function user()
    {
        $users=User::all();
        return view('admin.user.index',compact('users'));


    }
    public function FeedbackItem()
    {
          $feedbackitem=Feedback::with('user')->get();
 return view('admin.Feedback.index',compact('feedbackitem'));
    }
public function userDelete($id)
{
         User::findOrFail(Crypt::decrypt($id))->delete();
         $notification=array(
            'message' =>' User Delete Successfully',
            'alert-type' =>'success');

        return back()->with($notification);
}
public function DeleteFeedback($id)
{
     Feedback::findOrFail(Crypt::decrypt($id))->delete();
     $notification=array(
        'message' =>' FeedBack Item Delete Successfully',
        'alert-type' =>'success');

    return back()->with($notification);
}
public function Comments()
{
      $comments=Comment::with('user')->get();
    return view('admin.comment.index',compact('comments'));
}
public function InActive($id){
     Comment::where('id',Crypt::decrypt($id))->update([
       'status'=>'In active'
     ]);
     $notification=array(
        'message' =>' Comment In Active Successfull',
        'alert-type' =>'success');
        return back()->with($notification);

}

public function Active($id){
    Comment::where('id',Crypt::decrypt($id))->update([
      'status'=>'active'
    ]);
    $notification=array(
       'message' =>' Comment  Active Successfull',
       'alert-type' =>'success');
       return back()->with($notification);

}
    public function destroy(Request $request){
        Auth::guard('admin')->logout();
        return redirect('/')->with('success', 'Student Logout Successfully');
    }
}
