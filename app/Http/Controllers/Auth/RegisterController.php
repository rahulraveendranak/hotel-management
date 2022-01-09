<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\Floor;
use App\Models\Registration;
use App\Models\Room;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['guest']);
    // }

    public function index()
    {
        $floors = Floor::all();
        $rooms = Room::all();
        return view('auth.register', compact('floors','rooms'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'password' =>'required|confirmed',
            'name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'contact_no' => 'required',
            'floor_id' => 'required',
            'room_id' => 'required',
            'from_date' => 'required',
            'to_date' => 'required',
            'check_in' => 'required',
        ]);
        // dd($request->from_date);

        $user = new User;
        $user->username = $request->username;
        $user->user_type_id = 2;
        $user->password = Hash::make($request->password);
        $user->save();

        $user_profile = new UserProfile;
        $user_profile->user_id =$user->id;
        $user_profile->name =$request->name;
        $user_profile->gender =$request->gender;
        $user_profile->address =$request->address;
        $user_profile->contact_no =$request->contact_no;
        $user_profile->save();

        $registration = new Registration;
        $registration->user_id =$user->id;
        $registration->floor_id =$request->floor_id;
        $registration->room_id =$request->room_id;
        $registration->from_date =$request->from_date;
        $registration->to_date =$request->to_date;
        $registration->check_in =$request->check_in;
        $registration->registration_status_id = 1;
        $registration->save();
       
    return redirect()->route('login'); 
    }
}
