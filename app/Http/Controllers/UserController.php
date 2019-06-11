<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getLogin()
    {
        return view('auth/login');
    }
    public function check(Request $request)
    {
        $data=[
            'ten_dn'=>$request->username,
            'password'=>$request->password,
        ];
        if(Auth::attempt($data)){
            return redirect('covan/');
        }else{
            echo "Thất bại";
        }
    }
}
