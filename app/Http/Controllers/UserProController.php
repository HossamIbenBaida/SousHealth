<?php

namespace App\Http\Controllers;

use App\user_pro;
use App\spe ;
use App\subspe ;
use App\Contactt ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserProController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Pro = new user_pro();
        $Contact = new Contactt();
        $Spe = new spe();
        $subspe = new subspe();

        $id = auth()->user()->id;
//        $tel = "025559888";
      $email=auth()->user()->email;
//        $email = "email8@email.com";

        $Contact->adresse = $request->adresse;
        $Contact->zipcode = $request->zip;
        $Contact->email = $email;
        $Contact->tel = $request->tel;
        $Contact->save();

        $Spe->name = $request->speciality;
        $Spe->save();
        $speciality = DB::table('spes')->where('name', $request->speciality)->first();


        $subspe->name = $request->sub_speciality;
        $subspe->prId = $speciality->id;
        $subspe->save();


        $contactt = DB::table('contactts')->where('email', $email)->first();

        $Pro->user_id = $id;
        $Pro->spescality_id = $speciality->id;
        $Pro->contact_id = $contactt->id;

        $Pro->save();


        return redirect('/packages');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\user_pro  $user_pro
     * @return \Illuminate\Http\Response
     */
    public function show(user_pro $user_pro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user_pro  $user_pro
     * @return \Illuminate\Http\Response
     */
    public function edit(user_pro $user_pro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user_pro  $user_pro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user_pro $user_pro)
    {

        $userP = DB::table('users')->where('id',$user_pro->id_user )->first();
        $userP->role =3;
        $userP->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user_pro  $user_pro
     * @return \Illuminate\Http\Response
     */
    public function destroy(user_pro $user_pro)
    {
        //
    }
}
