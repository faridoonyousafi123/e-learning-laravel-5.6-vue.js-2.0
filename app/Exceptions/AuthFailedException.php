<?php

namespace elearning\Exceptions;
use Exception;

class AuthFailedException extends Exception
{
    
    public function render($request)
    {
        return response()->json([

        	'message' => 'These credintials do not match our records.'

        ],422);
    }
}