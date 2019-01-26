<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\administratorRequest;
use Auth;
use App\User;
use Mail;
use App\Mail\adminRequestApproval;

class AdministratorController extends Controller
{
    public function index(){

    	return view('admin.applyAdministrator')->with('user', Auth::user());

    }

    public function submitUserRequest(administratorRequest $request){

    	return $request->saveUserRequest();

    }

    public function showAdminRequests(){

    	return view('admin.adminRequests')->with('users', User::all());


    }

    public function sendUsers(){

    	$users = User::all();
    	return response()->json($users);
    }

    public function approveRequest(administratorRequest $request){


    	
    	return $request->approveUserAsAdmin()
    			->sendApprovalMail();
    	


    	return response()->json([

            'status' => 'ok',
        ]);
    }
}
