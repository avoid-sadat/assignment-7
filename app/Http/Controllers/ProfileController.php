<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
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

}
