<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PracticseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next):Response
    {
//        $token = $request->header('token');
//        if ($token=='123')
//        {
//            return $next($request);
//
//        }
//        return \response()->json([
//            'unauthorized'
//        ],401);
//        $take=$request->id;
//      // $re= $request->header($take);
//        if ($take=='3'){
//            echo "this is middleware" .$take ."<br>";
//            return $next($request);
//        }
//        return \response('unauthorized');
        $request->headers->set('access-token', '222');
        return $next($request);
    }
}
