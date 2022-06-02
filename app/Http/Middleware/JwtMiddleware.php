<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;
use Tymon\JWTAuth\Token;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

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
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } 
        catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                $result = 'Token is Invalid';
            }
            else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                $result = 'Token is Expired';
            }
            else if($e instanceof \Tymon\JWTAuth\Exceptions\JWTException){
                $result = 'Authorization Token not found';
            }
            else{
                $result = 'Authorization Token Error';
            }

            return response()->json([
                'message' => $result,
                'success' => false
            ], Response::HTTP_UNAUTHORIZED );
        }
        return $next($request);
    }
}