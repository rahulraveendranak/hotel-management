<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    { 
        $user_id = auth()->user()->id;

        $registrations = Registration::where('user_id',$user_id)->
        with('user_profile',
             'room:id,title',
             'floor:id,title',
             'registration_status:id,title')->first();
            //  dd($registrations);
        return view('user.index',compact('registrations'));
    }
}
