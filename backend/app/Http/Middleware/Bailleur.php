<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class Bailleur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $role=\App\Models\Utilisateur::where('idu',session('LoggedUser'))->first();
    
        if($role->role!="Bailleur"){
            return back();
        }

        return $next($request);
    }
}
