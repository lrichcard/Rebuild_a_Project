<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnes;

class PersonnesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnes = Personnes::all();
        return view('personne.index', ['personnes'=>$personnes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personne.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personne = new Personnes;
        $personne-> nom = $request->input('nom');
        $personne-> prenom= $request->input('prenom');
        $personne-> ddn= $request->input('ddn');
        $personne-> sexe= $request->input('sexe');
        $personne-> adresse= $request->input('adresse');
        $personne-> telephone1= $request->input('telephone1');
        $personne-> telephone2= $request->input('telephone2');

        $personne->save();

        return redirect('personne/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personne = Personnes::find($id)->first();
        return view ('personne/edit')->with('personne', $personne); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $personne = Personnes::where('id',$id)->update([
        'nom'=> $request->input('nom'),
        'prenom'=>$request->input('prenom'),
        'ddn'=> $request->input('ddn'),
        'sexe'=>$request->input('sexe'),
        'adresse'=> $request->input('adresse'),
        'telephone1'=>$request->input('telephone1'),
        'telephone2'=> $request->input('telephone2')]);
        
        return redirect('personne/create');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personnes $personne)
    {   //$personne = Personnes::find($id)->first();
        $personne->delete();
	    return redirect ('/');
    }
}
