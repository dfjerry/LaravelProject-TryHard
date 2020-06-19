<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use function foo\func;

class MailController extends Controller
{
    public function sendOrder(){
        $cart = Cart::where("user_id", Auth::id())
            ->where("is_checkout", true)
            ->with("getItems")
            ->firstOrFail();
//        dd($cart->getItems);
        Mail::send('mail.checkout-form',["cart" => $cart->getItems],function ($message){
            $message->to(Auth::user()->__get("email"),'Visitor')->subject('Visitor Feedback');
        });
    }
}
