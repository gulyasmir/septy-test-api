<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
   public function orderSave(Request $req){

       Mail::send([], [], function ($message) {
           $message->to('gulyasmir@yandex.ru')
               ->subject('Heroku test')
               ->setBody('<h1>Hi, welcome user!</h1>', 'text/html'); // for HTML rich messages

       });
       return  response()->json(['success' =>true, 'message' => 'ok'], 200);
      }
}
