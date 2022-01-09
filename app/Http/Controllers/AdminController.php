<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\RegistrationStatus;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    { 
        $registrations = Registration::
        with('user_profile',
             'room:id,title',
             'floor:id,title',
             'registration_status:id,title')->get();

             $statuses = RegistrationStatus::all();
        // dd($registrations);
        return view('admin.index',compact('registrations','statuses'));
    }

    public function updateRegistration(Request $request)
    { 
      
        $registrations = Registration::find($request->id);
        $registrations->registration_status_id = $request->status_id;
        $registrations->save();

        // dd($registrations);
        return response()->json(['Successfully Updated']);
    }
}
