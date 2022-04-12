<?php

namespace App\Http\Controllers;

use App\message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message(Request $request){
        $data = new message();
        $data->first_name=$request->firstName;
        $data->last_name=$request->lastName;
        $data->email=$request->email;
        $data->message=$request->message;
        $data->save();
        return redirect('/');
    }
}
