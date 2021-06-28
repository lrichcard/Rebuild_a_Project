<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horaires;

class HorairesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horaires = Horaires::all();
        return view('horaire.index', ['horaires'=>$horaires]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('horaire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horaire = new Horaires;
        $horaire-> jour = $request->input('jour');
        $horaire-> heureDebut= $request->input('heureDebut');
        $horaire-> heureFin= $request->input('heureFin');


        $horaire->save();

        return redirect('horaire/create');
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
        $horaire = Horaires::find($id)->first();
        return view ('horaire/edit')->with('horaire', $horaire); 
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
        $horaire = Horaires::where('id',$id)->update([
        'jour'=> $request->input('jour'),
        'heureDebut'=>$request->input('heureDebut'),
        'heureFin'=> $request->input('heureFin'),
     ]);
        
        return redirect('horaire/create');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horaires $horaire)
    {   //$horaire = horaires::find($id)->first();
        $horaire->delete();
	    return redirect ('/');
    }
}
