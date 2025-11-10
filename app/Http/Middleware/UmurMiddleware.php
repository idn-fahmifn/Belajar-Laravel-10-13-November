<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UmurMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        // jika umurnya lebibh dari 18 diizikan masuk.
        // tangkap variabel dari session age
        $umur = $request->session()->get('age');

        if ($umur >= 18) {
            return $next($request); //mengizinkan untuk mengakses route yang dituju.
        }

        return redirect()->route('umur.form')
        ->with('ditolak', 'Umur belum cukup');

    }
}
