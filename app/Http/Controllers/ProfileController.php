<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('test')->only('test3');
    }
    public function index($id){
        $userName = "Donal Trump";
        $userAge = "75";

        $data =[
            'id'=>$id,
            'userName'=>$userName,
            'userAge'=>$userAge
        ];

        $cookieName = 'new_token';
        $cookieValues = '222-XYZ';
        $duration = 2;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        $response = response()->json($data,200);
        $response->cookie($cookieName,$cookieValues,$duration,$path,$domain,$secure,$httpOnly);

        return $response;
    }

    public function test(){
        $res = response("first path");
        return redirect('test1')->with( $res->getContent());
    }

    public function test1(Request $request){
        return response("Hello");
    }

    public function test2(){
        return "this is test 2";
    }   public function test3(Request $request){
        return $request->header();
    }
}
