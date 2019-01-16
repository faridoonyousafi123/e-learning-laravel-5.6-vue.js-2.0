<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class confirmEmailController extends Controller
{
    public function index(){

    	$token = request('token');

    	$user = User::where('confirm_token', $token)->first();

    	if($user){

    		$user->confirmUser();

    		session()->flash('success','Your email has been confirmed');

    		return redirect('/');
    	}else{

    		session()->flash('error','Confirmation failed');

    		return redirect('/');
    	}

    }
}
