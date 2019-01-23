<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class AdministratorController extends Controller
{
    public function index(){

    	return view('admin.applyAdministrator')->with('user', Auth::user());

    }

    public function submitRequest(Request $request){

    	$user = User::find($request->id);

    	dd($user->name);

    }
}
