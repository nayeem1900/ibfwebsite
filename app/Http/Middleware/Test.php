<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;
class Test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {

            if (Auth::user()->usertype == 'admin') {
                return redirect()->route('');

            } elseif (Auth::user()->usertype == 'employee') {
                return redirect()->route('');

            } elseif (Auth::user()->usertype = 'operator') {
                return redirect()->route('');
            }

        } else {
            return redirect('/login');
        }

        return $next($request);
    }


}
