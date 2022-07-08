<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Settings;

class InstallationMiddleware
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
    if (file_exists(public_path('installation.php'))) {
      return redirect()->route('installation');
    } elseif (!Settings::where('key', 'blog_name')->where('value', '!=', null)->first()) {
      return redirect()->route('settings');
    }
    return $next($request);
  }
}
