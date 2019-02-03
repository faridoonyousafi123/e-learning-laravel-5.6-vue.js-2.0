<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use Mail;
use App\Mail\adminRequestApproval;
use App\Mail\adminRequestRejection;

class administratorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    public function saveUserRequest(){

        $user = User::find($this->id);

        $user->makeAdminRequest();

        return redirect('/');
        
    }

    public function approveUserAsAdmin(){

     

        $usersRequests = explode(',' , $this->users);
        
        foreach ($usersRequests as $user) {

            $user = User::find($user);  
            $user->makeAdmin();


        }
        return $this;
        
    }

    public function rejectUserAsAdmin(){

       $usersRequests = explode(',' , $this->users);

        foreach ($usersRequests as $user) {

        $user = User::find($user);  
        $user->rejectRequest();

        }

        return $this;
    }

    public function sendApprovalMail()
    {
        $usersRequests = explode(',' , $this->users);

        foreach ($usersRequests as $user) {
          $user = User::find($user); 
          Mail::to($user)->send(new adminRequestApproval($user));

      }




  }

  public function sendRejectionMail(){

   $usersRequests = explode(',' , $this->users);

        foreach ($usersRequests as $user) {
          $user = User::find($user); 
    Mail::to($user)->send(new adminRequestRejection($user));

  }
}


public function revokeUserRequestBack(){

    $user = User::find($this->user_id);
    $user->revokeAdminRequest();
}
}
