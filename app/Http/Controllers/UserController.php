<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests;  
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $id)
    {   
        $user = Auth::user();
        return view('user.edit', compact('user'));
    }

     public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $request->password = bcrypt($request->password);
            $user->update($request->all());

        return redirect('/user/edit');
    }

}