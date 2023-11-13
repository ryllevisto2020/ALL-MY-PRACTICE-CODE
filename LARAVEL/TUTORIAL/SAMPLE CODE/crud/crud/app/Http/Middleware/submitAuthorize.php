<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class submitAuthorize
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->cookies->get("submit")===null || $request->headers->get("authorization")===null){
            $data = [
                "code"=>0,
                "info"=>"Unauthorized Action!",
            ];
            return response()->json($data);
        }else{
            return $next($request);
        }
    }
}
