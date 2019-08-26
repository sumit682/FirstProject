<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class Messagecontroller extends Controller
{
    public function submit(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required'
            ]
        );
            //create new Message
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');
        //save message
        $message->save();

        //Redirect
        return redirect('/')->with('success', 'Message Sent');
    }
}
