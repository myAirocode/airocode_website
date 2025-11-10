<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RemoveIParameter
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('i')) {
            return redirect()->to($request->url(), 301);
        }

        return $next($request);
    }
}
