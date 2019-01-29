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

    	$users = User::whereNotNull('admin_request')->where('later_approval', null)->get();
    	return response()->json($users);
    }

    public function sendApprovedUsers(){

    	$superAdmin = config('administrator.administratorUsers');

    	$users = User::where('admin_request', null)->where('admin' , '1')->where('email', '!=' , $superAdmin[0])->get();
    	return response()->json($users);
    }

    public function approveRequest(administratorRequest $request){

    	return $request->approveUserAsAdmin()
    			->sendApprovalMail();

    	return response()->json([

            'status' => 'ok',
        ]);
    }

    public function rejectRequest(administratorRequest $request){

    	return $request->rejectUserAsAdmin()
    			->sendRejectionMail();

    	return response()->json([

            'status' => 'ok',
        ]);
    }

    public function sendtoBeApprovedUsers(){

    	$users = User::whereNotNull('later_approval')->whereNotNull('admin_request')->get();
    	return response()->json($users);


    }

    public function approveRequestLater(administratorRequest $request){

    	return $request->approveUserAsAdminLater();

    	return response()->json([

            'status' => 'ok',
        ]);
    }

    public function revokeRequestBack(administratorRequest $request){

    	return $request->revokeUserRequestBack();

    	return response()->json([

            'status' => 'ok',
        ]);

    }


}
