<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Student
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->account_type !== 'Student') {
            return redirect('/login');
        }

        if ($request->segment(2) != 'reg' && $request->segment(2) != 'update_password' && !isRegCompleted()) {
            return redirect('/student/reg/step/1')->with([
                'fail' => 'Please complete your registration'
            ]);
        }

        return $next($request);
    }
}
