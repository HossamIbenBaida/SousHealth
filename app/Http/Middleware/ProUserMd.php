<?php

namespace App\Http\Middleware;

use Closure;
use App\user_pro;
use App\spe ;
use App\subspe ;
use App\Contactt ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProUserMd
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
        $userP  =  auth()->user()->id;
        $contactt = DB::table('user_pros')->where('user_id', $userP)->first();
        if(!$contactt){

            return redirect('homepage');
        }



        return $next($request);
    }
}
