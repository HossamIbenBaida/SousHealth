<?php

namespace App\Http\Controllers;

use App\Contactt;
use App\professional;
use App\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfessionalController extends Controller
{

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
return view('pages.becomePro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Pro=new professional;
        $Contact = new Contactt();
        $Spe = new Speciality();

        $id=auth()->user()->id;
        $tel="025559888";
//        $email=auth()->user()->email;
        $email="email2@email.com";

        $Contact->adresse = $request->adresse ;
        $Contact->zipcode=$request->zip ;
        $Contact->email = $email ;
        $Contact->tel=$tel ;
        $Contact->save();

       $Spe->name = $request->speciality;
        $Spe->parent_id = 1;
        $Spe->save();

        $speciality = DB::table('specialities')->where('name',$request->speciality)->first();
        $contactt = DB::table('contactts')->where('email',$email)->first();

        $Pro->user_id = $id ;
        $Pro->spescality= $speciality->id ;
        $Pro->contact=$contactt->id ;


        $Pro->save();






    }

    /**
     * Display the specified resource.
     *
     * @param  \App\professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function show(professional $professional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function edit(professional $professional)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, professional $professional)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\professional  $professional
     * @return \Illuminate\Http\Response
     */
    public function destroy(professional $professional)
    {

    }
}
