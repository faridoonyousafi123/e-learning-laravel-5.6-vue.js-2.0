<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use elearning\User;

class LoginTest extends TestCase
{

	use RefreshDatabase;

    public function test_a_user_recieves_correct_message_passing_wrong_credentials(){

    	$user = factory(User::class)->create();

    	$this->postJson('/login', [

    		'email' => $user->email,
    		'password' => 'somethingwrong'

    	])->assertStatus(422)
    	  ->assertJson([

    	  	'message' => 'These credintials do not match our records.'

    	  ]);
    }
}
