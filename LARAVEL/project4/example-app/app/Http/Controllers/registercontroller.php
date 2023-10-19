<?php

namespace App\Http\Controllers;

use App\Models\account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class registercontroller extends Controller
{
    //
    public function index(){
        return view("register");
    }
    public function insert(){
        account::create([
            "email"=>'awd',
            "password"=>Hash::make("password"),
        ]);
        return response("awd");
    }
}
