<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CustomerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'customer') {
                return $next($request);
            } else {
                session()->put('url.intended', url()->current());

                session()->flash('error-message', 'Anda tidak memiliki akses ke halaman ini!');
                return redirect()->back();
            }
        }
        return redirect()->back();
    }
}
