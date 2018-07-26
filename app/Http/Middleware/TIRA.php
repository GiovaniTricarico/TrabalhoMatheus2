<?php

namespace App\Http\Middleware;

use Closure;

class TIRA
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $variavel = $request->all();
        foreach ($request->all() as $key => $value) {
            $variavel[$key] = strip_tags($value);
        }

        $request->merge($variavel);

        return $next($request);
    }
}
