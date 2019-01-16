<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SocialAuth;
use App\User;


class SocialsController extends Controller
{
    public function auth($provider){

        return SocialAuth::authorize($provider);
        

    }

    public function authCallBack($provider){

        SocialAuth::login($provider, function($user, $details){

            
            // $user->avatar = $details->avatar;
            $user->name = $details->full_name;
            $user->email = $details->email;
            $user->username = str_slug($user->name);
            $user->password = bcrypt('secret');
            
            $user->save();

           
        });
        return redirect('/');
    }

}
