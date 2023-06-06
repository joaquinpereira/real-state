<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if(!$request->expectsJson()){
           // Log::info(Request::is('post/*'));
            Log::info($request->is('admin/','*'));
            //if($request->is(app()->getLocale().'/admin*'))
            if($request->is('admin'))
                return route('admin.login');
        }

        return $request->expectsJson() ? null : route('login');
    }
}
