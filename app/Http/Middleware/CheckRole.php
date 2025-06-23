<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$role): Response
    {
        $userRoleId = Auth::user()->role_id;
        $roleName = Role::where('role_id' , $userRoleId)->firstOrFail()->role_name;
        // dd($roleName);
        if (!in_array($roleName, $role)) {
            return redirect()->route('welcome');
        }
        return $next($request);
    }
}
