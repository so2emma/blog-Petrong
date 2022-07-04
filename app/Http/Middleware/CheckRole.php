<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;

class CheckRole
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
        $users = User::all();
        if ($request->user()->role == 'Author') {
            return redirect('index');
        }
 
        return $next($request);
    }
}
