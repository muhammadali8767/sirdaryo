<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetLocale
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
        $segments = $request->segments();

        // if isset in request locale then set locale to request locale
        if ($request->locale) {
            array_shift($segments);
            $redirect = $request->locale .'/'. implode('/', $segments);
            // app()->setLocale($request->locale);
            return redirect()->to($redirect);
        }

        if (in_array($request->segment(1,''), config('app.locales'))) {
            session(['locale' => $request->segment(1,'')]);
            app()->setLocale($request->segment(1,''));
        } else {
            if (session('locale')){
                $locale = session('locale');
            } else {
                $locale = config('app.locale');
                session(['locale' => $locale]);
            }
            // app()->setLocale($locale);
            $redirect = $locale .'/'. implode('/', $segments);
            return redirect()->to($redirect);
        }
        return $next($request);
    }
}
