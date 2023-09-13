<?php

namespace App\Http\Middleware;

use Closure;
//use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class ApiMiddleware
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
        if (request('token') && $request->input('token')) {

            $token = request('token');

            if(checkApiToken($token) == 1){
                return $next($request);
            }else{
              $args = array();
              $args['error'] = true;
              $args['message'] = "You don't have the right for this functionnality";

              return response()->json($args, 200);
          }

      }else{
        $args = array();
        $args['error'] = true;
        $args['message'] = "You don't have the right for this functionnality";

        return response()->json($args, 200);
    }

}
}
