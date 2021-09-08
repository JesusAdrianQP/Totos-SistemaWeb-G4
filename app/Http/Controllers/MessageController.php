<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageSent;
class MessageController extends Controller
{
    public function store(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
    
        $message->save();

        $message =[
            'email' => $request->email
        ];

        //Correos que llegaran al correo del cliente
        Mail::to($message['email'])->send(new MessageSent());
        

        $notification = array(
            'message' => 'Registro enviado',
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }
}
