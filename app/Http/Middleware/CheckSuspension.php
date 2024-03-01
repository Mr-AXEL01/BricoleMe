<?php 

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckSuspension
{
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->isSuspended()) {
            // User is suspended, redirect them
            return redirect()->route('suspended');
        }

        return $next($request);
    }
}
