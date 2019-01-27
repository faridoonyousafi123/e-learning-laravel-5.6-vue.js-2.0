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

        $user = User::find($this->user_id);  
        $user->makeAdmin();

        return $this;
    }

    public function rejectUserAsAdmin(){

        $user = User::find($this->user_id);
        $user->rejectRequest();

        return $this;
    }

    public function sendApprovalMail()
    {
        $user = User::find($this->user_id);  
        Mail::to($user)->send(new adminRequestApproval($user));
    }

    public function sendRejectionMail(){

        $user = User::find($this->user_id);
        Mail::to($user)->send(new adminRequestRejection($user));
    }

    public function approveUserAsAdminLater(){

        $user = User::find($this->user_id);
        $user->approveRequestLater();

    }
}
