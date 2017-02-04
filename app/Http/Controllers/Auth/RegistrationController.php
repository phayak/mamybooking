<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\User;
use Validator;
use Redirect;
use Hash;
use Flash;
use Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store()
    {
        $rules = [
            'username' => 'required|min:6|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6'
        ];

        $input = Input::only(
            'username',
            'email',
            'password',
            'password_confirmation'
        );

        $validator = Validator::make($input, $rules);

        if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
            // return Redirect::back()->withInput()->withErrors($validator);
        }

        $confirmation_code = str_random(30);

        User::create([
            'username' => Input::get('username'),
            'email' => Input::get('email'),
            'password' => Hash::make(Input::get('password')),
            'confirmation_code' => $confirmation_code
        ]);


        $confirmation_code_verify = array('confirm' => $confirmation_code);

        // $email_verify = array('email' => Input::get('email'));
        // $username_verify = array('username' => Input::get('username'));

        // Mail::send('email.verify', $confirmation_code, function($message) {
        //     $message->to(Input::get('email'), Input::get('username'))
        //         ->subject('Verify your email address');
        // });
        Mail::send('email.verify', $confirmation_code_verify, function($message) {
            $message->to(Input::get('email'),Input::get('username'))
                ->subject('Verify your email address');
        });

        flash('hanks for signing up! Please check your email.');

        return redirect('home');
    }
    public function confirm($confirmation_code)
    {
        if( ! $confirmation_code)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user = User::whereConfirmationCode($confirmation_code)->first();

        if ( ! $user)
        {
            throw new InvalidConfirmationCodeException;
        }

        $user->confirmed = 1;
        $user->confirmation_code = null;
        $user->save();

        flash('You have successfully verified your account.');

        return redirect('login');
    }
}
