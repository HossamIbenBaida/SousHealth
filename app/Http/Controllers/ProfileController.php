<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user_pro;
use App\spe ;
use App\subspe ;
use App\Contactt ;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('profile');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function verifier()
    {
//        $proUser = DB::table('user_pros')->where('user_id', auth()->user()->id);
//        if($proUser){
//            return view('pages.pro_prof');
//        }
//        else{
//            return view('pages.profile');
//
//        }
    }
}
