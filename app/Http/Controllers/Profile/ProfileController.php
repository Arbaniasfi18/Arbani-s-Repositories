<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function change_profile(Request $r) 
    {
        $user = User::where('id', auth()->user()->id);
        $useer = $user->first();

        if ($r->name != $useer->name || $r->universitas != $useer->universitas || $r->no_identitas != $useer->no_identitas) {
            $data = $r->validate([
                'name' => 'required|string',
                'universitas' => 'required|string',
                'no_identitas' => 'required|string|min:5|max:30',
            ]);
            $user->update($data);
            
            return redirect()->back()->with('profile_success', 'Change Success !!');
        }else {
            return redirect()->back()->with('profile_cancel', "You Didn't Change Anything !!");
        }
    }

    public function change_password(Request $r)
    {
        $user = User::where('id', auth()->user()->id);
        $useer = $user->first();

        if (Hash::check($r->current_password, $useer->password)) {
            $data = $r->validate([
                'password' => 'required|string|min:8',
                'confirm_password' => 'required|same:password',
            ]);

            $dataa = [
                'password' => Hash::make($r->password),
            ];

            $user->update($dataa);

            return redirect()->back()->with('profile_success', 'Change Success !!');

        }
        else {
            return redirect()->back()->with('failed', 'Your Old Password Is Wrong !!');
        }
    }



    public function change_email(Request $r)
    {
        $user = User::where('id', auth()->user()->id);
        $useer = $user->first();

        if (Hash::check($r->password, $useer->password)) {
            $data = $r->validate([
                'email' => 'required|email:dns',
            ]);

            $user->update($data);

            return redirect()->back()->with('profile_success', 'Change Success !!');

        }
        else {
            return redirect()->back()->with('failed', 'Your Old Password Is Wrong !!');
        }
    }

    public function change_image(Request $r) 
    {

    }


}
