<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view("user.login");
    }

    public function authenticate(LoginRequest $request){
        
        $data = $request->validated();
        //$data['password'] = bcrypt($data['password']);
        //dd($data);
        if(Auth::attempt($data))
        {
            return redirect()->intended('orcamento');
        }
        else
        {
            return redirect()->back()->with('email', 'Acesso negado, email ou senha invalidos');
        }
    }

    public function storeUser(Request $request)
    {
        $request->flash();

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $data = $request->all();
        $data['password'] = bcrypt($data['password']);
        $u = User::create($data);
        
        return redirect('/login');
    }
}
