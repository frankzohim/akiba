<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Services\Api\CurrentUserService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class Vendor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $currentUser=Session::get('currentUser');
        $role=$currentUser->role_id ?? null;

        if(empty($currentUser)){
            //dd($currentUser);
            return to_route("login");
        }else if($currentUser->role_id!==2){
            return redirect()->back();
        }
        return $next($request);
    }
}
