<?php


namespace DOCore\Organization\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckSelectCompany
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!session('company_id')) {
            return redirect('/admin/organization');
        }
        return $next($request);
    }
}