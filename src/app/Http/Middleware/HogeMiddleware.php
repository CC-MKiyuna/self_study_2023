<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HogeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->input('group')!=="1") {
            return back()
            ->with('error', '許可されていないグループです');
        }

        if ($request->input('user_name')!=="喜友名") {
            return back()
            ->with('error', '許可されていないユーザです！');
        }
        return $next($request);
    }
}
