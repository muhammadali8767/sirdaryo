<?php namespace App\Http\Middleware;

    use Closure;
use Illuminate\Support\Facades\Http;

class ValyutaMiddleware
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
        // $valyutaArray = Http::get('https://cbu.uz/ru/arkhiv-kursov-valyut/json')->json();
        // $valyuta['usd'] = $valyutaArray[0];
        // $valyuta['eur'] = $valyutaArray[1];
        // $valyuta['rub'] = $valyutaArray[2];
        // $valyuta['cny'] = $valyutaArray[14];

        // $route = str_replace('app/Http/Middleware', 'public/valyuta.json', __DIR__);
        // $route2 = str_replace('app/Http/Middleware', 'valyuta.json', __DIR__);
        // if (strpos($route, 'Middleware') !== false) {
        //     $route = str_replace('app\Http\Middleware', 'public\valyuta.json', __DIR__);
        //     $route2 = str_replace('app\Http\Middleware', 'valyuta.json', __DIR__);
        // }

        // file_put_contents($route, json_encode($valyuta));
        // file_put_contents($route2, json_encode($valyuta));
        return $next($request);
    }
}
