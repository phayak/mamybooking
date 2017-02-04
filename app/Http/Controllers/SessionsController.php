<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Input;
use App\User;
use Validator;
use Redirect;
use Hash;
use Flash;
use Auth;

class SessionsController extends Controller
{
	use AuthenticatesUsers;
	protected $redirectTo = '/home';

	public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function index()
    {
    	return view('auth.login');
    }
    public function store()
    {
        $rules = [
            'username' => 'required|exists:users',
            'password' => 'required'
        ];

        $input = Input::only('username', 'email', 'password');

        $validator = Validator::make($input, $rules);

        if($validator->fails())
        {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $credentials = [
            'username' => Input::get('username'),
            'password' => Input::get('password'),
            'confirmed' => 1
        ];

        if ( ! Auth::attempt($credentials))
        {
            return Redirect::back()
                ->withInput()
                ->withErrors([
                    'credentials' => 'We were unable to sign you in.'
                ]);
        }

        flash('ยินดีต้อนรับ');

        return redirect('home');
    }
    public function logout()
    {
    	// $this->auth->logout();
    	Auth::logout();

    	return redirect('login');
    }
}
