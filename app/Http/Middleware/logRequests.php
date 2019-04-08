<?php

    namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class logRequests
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
        DB::table('activities')
            ->insert([
                'ip'=>$request->ip(),
                'route'=>$request->url()
            ]);


        return $next($request);
    }
}
