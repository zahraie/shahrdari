<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Auth\RegisterController;
use App\User;
use App\Models\Cat;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Product;
use App\Models\Subcat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Mockery\CountValidator\Exception;
use App\Contact;

class CommentController
{
    public function getContact()
    {
        $Contact = contact::all();
        $Subcat =Subcat::all();
        return view('contact', ['Contact' => $Contact],['Subcat'=>$Subcat]);
    }
    public function postContact()
    {
        $contact = new Contact();
        $contact->title = Request::input('title');
        $contact->description = Request::input('content');
        $contact->subcat_id = Request::input('subcat');
        $contact->save();
        return 1 ;

    }

    public function getOrder()
    {
        $order = Order::where('status','=',0)->get();
        return view('order',['Order'=>$order]);
    }
 //-----------------------------------------------------------------------
    public function getComment()
    {
        $comment = Comment::paginate(1);
        return view('comment',['Comment'=>$comment]);
    }


    public function postNewComment()
    {

        $comment = new Comment();
        $comment->user_id = Auth::user()->id;
        $comment->product_id = Request::input('id');
        $comment->content = Request::input('comment');
        $comment->status = 0;
        $comment->save();
        return 1 ;
    }

    public function getNewComment()
    {
        return view('comment-submit');
    }


    public function postSubmitComment()
    {
        $comment = Comment::find(Request::input('id','empty'));
        $comment->status = 1;
        $comment->save();
        return 1;
    }
    public function postSubmitOrder()
    {
        $order = Order::find(Request::input('id','empty'));
        $order->status = 1;
        $order->save();
        return 1;
    }
    public function postDeleteComment()
    {
        $comment = Comment::find(Request::input('id','empty'));
        $comment->delete();
        return 1;
    }
}