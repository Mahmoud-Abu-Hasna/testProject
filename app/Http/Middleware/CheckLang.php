<?php
/**
 * Created by PhpStorm.
 * User: Mahmoud
 * Date: 4/10/2019
 * Time: 11:58 AM
 */

namespace App\Http\Middleware;

use Closure;
use App;
use Config;


class CheckLang
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
        //$raw_locale = Session::get('locale');
        $raw_locale = $request->lang;
        if (in_array($raw_locale, Config::get('app.locales'))) {
            $locale = $raw_locale;
        }
        else $locale = Config::get('app.locale');
        App::setLocale($locale);
        return $next($request);
    }
}