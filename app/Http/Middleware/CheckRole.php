<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // protected function redirectTo(Request $request): ?string
    // {
    //     return $request->expectsJson() ? null : route('login');
    // }

    public function handle(Request $request, Closure $next, $role): Response
    {

        // if($request->user() == null){
        //     $this->redirectTo($request);
        // }else
        if (! $request->user()->hasRole($role)) {
            abort(401, 'This action is unauthorized.');
        }
        return $next($request);
    }
}
