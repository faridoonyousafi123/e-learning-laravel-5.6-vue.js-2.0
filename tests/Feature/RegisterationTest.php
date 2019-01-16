<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Mail\ConfirmYourMail;
use App\User;
use Mail;

class RegisterationTest extends TestCase
{
	 use RefreshDatabase;
     public function test_a_user_has_a_default_username_after_registration()
    {
      

        $this->withoutExceptionHandling();
        $this->post('/register', [
            'name' => 'kati frantz',
            'email' => 'kati@frantz.com',
            'password' => 'secret'
        ])->assertRedirect();
        $this->assertDatabaseHas('users', [
            'username' => str_slug('kati frantz')
        ]);
    }

    public function test_an_email_is_sent_to_newly_registered_users(){

    

    	$this->withoutExceptionHandling();

    	Mail::fake();

        $this->post('/register', [
            'name' => 'faridoon yousafi',
            'email' => 'faridoon@faridoon.com',
            'password' => 'secret'
        ])->assertRedirect();

        Mail::assertSent(ConfirmYourMail::class);

    }

    public function test_a_user_has_a_token_after_registeration(){

    	$this->withoutExceptionHandling();

        $this->post('/register', [
            'name' => 'faridoon',
            'email' => 'faridoon@faridoon.com',
            'password' => 'secret'
        ])->assertRedirect();

        $user = User::find(1);

        $this->assertNotNull($user->confirm_token);

        $this->assertFalse($user->isUserConfirmed());
    }
}
