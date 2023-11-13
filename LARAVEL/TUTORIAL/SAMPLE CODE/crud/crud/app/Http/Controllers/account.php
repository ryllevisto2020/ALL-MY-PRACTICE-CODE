<?php

namespace App\Http\Controllers;

use App\Models\accountModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
class account extends Controller
{
    //
    public function register(Request $request,Response $response){
        Cookie::queue("submit",true);//create cookie with key of "submit"
        return response()->view("register");
    }

    public function submit(Request $request,Response $response,accountModel $account){
        $account->create([
            "name"=>"test",
            "email"=>"test@gmail.com",
            "password"=>HASH::make("test")
        ]);
        Cookie::queue(Cookie::forget('submit'));//delete cookie with key of "submit"
        return response()->json(["code"=>0,"info"=>"succecss"]);
    }
    //
}
