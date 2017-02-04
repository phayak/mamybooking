<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailThemController extends Controller
{
    public function index()
    {
    	$confirm = 'ddddd';
    	return view('email.verify',compact('confirm'));
    }
}
