<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
  	public function profile($name)
  	{	
  		$name = User::whereName($name)->first();

  		return view('user.profile', compact('name'));
  	}  

  	
}
