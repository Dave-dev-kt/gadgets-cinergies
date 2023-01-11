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
        $agent = Agent::where('matricule', '=', $request->matricule)->get();

        if ($agent->isEmpty()) {
            return response()->view('error');
        } elseif ($agent[0]->is_email_sent === 1) {
            return response()->view('finish');
        } elseif ($agent[0]->is_email_sent === 0) {
            return $next($request);
        }
    }
}
