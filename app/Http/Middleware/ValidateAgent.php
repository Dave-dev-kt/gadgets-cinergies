<?php

namespace App\Http\Middleware;

use App\Models\Agent;
use Closure;
use Illuminate\Http\Request;

class ValidateAgent
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
        $agent = Agent::where('matricule', '=', $request->matricule)
            ->where('is_email_sent', '=', 0)
            ->get();
        if (count($agent) === 0) {
            return response()->view('finish');
        } else {
            return $next($request);
        }
    }
}
