<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try{
            $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $e){
            if ($e instanceof \Tymon\JwtAuth\Exceptions\TokenInvalidException){
                return  response()->json(['error' => true, 'message' =>'Token is Invalid']);
            } else if ($e instanceof \Tymon\JwtAuth\Exceptions\TokenExpiredException){
                return  response()->json(['error' => true, 'message' =>'Token is Expired']);
            } else {
                return  response()->json(['error' => true, 'message' =>'Token not found']);
            }
        }
        return $next($request);
    }
}
