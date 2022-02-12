<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$roles)
    {
        if(auth()->user()->batas <  Carbon::now() && auth()->user()->role != 'admin' && auth()->user()->batas != null){
            auth()->user()->update([
                'status' => 'pembeli'
            ]);
        }
        if (in_array($request->user()->role,$roles)){
        return $next($request);
            }    
        return abort(404);            
    }
}
