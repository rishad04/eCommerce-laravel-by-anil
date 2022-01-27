<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Myuser;
use Illuminate\Support\Facades\Input;



class UserController extends Controller
{
    //

    function login (Request $req){
    
        $user = Myuser::where(['email'=>$req->email])->first();
       // return Hash::check($req->password,$user->password);1
        if(!$user || !Hash::check($req->password,$user->password)){
            return "user not found";
        }else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
}
