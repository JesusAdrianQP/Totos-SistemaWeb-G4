<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

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

        $notification = array(
            'message' => 'Registro enviado',
            'alert-type' => 'success'
        );
    
        return redirect()->back()->with($notification);
    }
}
