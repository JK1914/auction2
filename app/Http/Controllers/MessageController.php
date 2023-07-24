<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function usersList(){
        $id = Auth::user()->id;
        $users = User::where('id', '!=', $id)->get();        
        return view('message.users', compact('users'));
    }

    public function create($id){        
        return view('message.create', compact('id'));
    }

    public function store(Request $request){        
        $id = Auth::user()->id;   

        $message = Message::create([
            'user_id'=>$id,
            'to_user'=>(int)$request->to_user,
            'title'=>$request->title,
            'message'=>$request->message,
            'date_time'=>Carbon::now(),
        ]);        
        return redirect()->route('lotsIndex');
    }

    public function inbox(){
        $id = Auth::user()->id;
        $messages = Message::where('to_user', $id)->get(); 
        return view('message.inbox', compact('messages'));
    }
}
