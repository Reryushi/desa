<?php

namespace App\Http\Controllers\Dashboard;

use App\Model\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Model\RoomBooking;
use Carbon\Carbon;

class UserController extends DashboardController
{
    public function __construct()
    {
        parent::__construct();
        RoomBooking::where('payment', '0')
                        ->where('created_at', '<=', Carbon::now()->subMinutes(120   )->toDateTimeString())->delete();
                    RoomBooking::where('status', 'pending')
                        ->where('payment', '2')
                        ->where('created_at', '<=', Carbon::now()->subMinutes(240)->toDateTimeString())->delete();
                        RoomBooking::where('status', 'cancelled')->delete();
    }

    public function edit_profile()
    {
        $user = User::find(Auth::user()->id);
        return view('dashboard.user.profile')->with([
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update_profile(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $rules = [
            'name' => 'required|min:3|max:25',
            // 'nik' => 'required|min:3|max:25',
            'gender' => 'required|in:male,female,others',
           
        ];
       

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withInput($request->all)
                ->withErrors($validator)
                ->with('user', $user);
        } else {
            $user->name = $request->input('name');
            // $user->nik = $request->input('nik');
            $user->gender = $request->input('gender');
            $user->phone = $request->input('phone');
            $user->email = $request->input('email');


            // if ($request->hasFile('avatar')) {
            //     if(!in_array($user->avatar, ['boy.png', 'boy-1.png', 'girl.png', 'girl-1.png', 'girl-2.png','man.png', 'man-1.png', 'man-2.png', 'man-3.png'])){
            //         Storage::delete('public/avatars/'.$user->avatar);
            //     }
            //     $path = $request->file('avatar')->store('','avatar');
            //     $user->avatar = $path;
            // }

            $user->update();
            Session::flash('flash_title', "Success");
            Session::flash('flash_message', "User profile has been updated.");
            return redirect()->back();  
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function setting()
    {
        return view('dashboard.user.setting');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update_setting(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $rules = [
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|same:password'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->with('user', $user);
        } else {
            $user->password = bcrypt($request->input('password'));

            $user->save();
            Session::flash('message', "Success");
            Session::flash('flash_message', "Password has been changed.");
            return redirect('/dashboard')->with('success', 'Profile has been updated'); 
            
        }
    }

}
