<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ageRestrict;
use App\Models\creds_info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Services\Insert;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
class loginAndSigninController extends Controller
{
    //
    public $_insert;
    public function __construct(Insert $insert){
        $this->_insert = $insert;

    }
    public function signIn(Request $request){
        $this->_insert->test($request);
        /*$request = Request::capture();
        $user = $request['data']['user'];
        $pass = Hash::make($request['data']['pass']);
        creds_info::create([
            "username"=>$user,
            "password"=>$pass
        ]);
        dd(creds_info::all('username')->where('username','=','ad'));*/
        return response()->json('awd');
    }

    public function middle(){
        try {
            $test=$_COOKIE['authorize'];
            return redirect()->route('safered');

        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('You are not Authorize to access this!');
        }
    }
    public function safe(){
        try {
            //code...
            $test=$_COOKIE['authorize'];
            return response()->json($test);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json('You are not Authorize to access this!');
        }
    }

    public function gate(creds_info $post){

        // dd($post->all());
         $creds = [
             'username'=>"admin",
             'password'=>"admin"
         ];
        Auth::guard('creds_info')->attempt($creds);
       if (!Gate::allows('update_post', $post->all()[0])) {
        abort(403);
        }else{
            return response()->json('awd');
        }

    }
}
