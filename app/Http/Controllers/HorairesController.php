<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Horaire;
use App\Models\Heure;
use App\Models\Jour;
use App\Models\Salle;
use App\Models\Cour;


class HorairesController extends Controller
{public function index()
    {
        $horaires = Horaire::all();
        $jours = Jour::find(7)->jours;
        
        return view('horaires.index', ['horaires'=>$horaires,'jours'=>$jours]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $heures = Heure::all();
        $jours = Jour::all();
        $salles = Salle::all();
        $cours = Cour::all();
        return view('horaires.create',['heures'=>$heures,'jours'=>$jours,'salles'=>$salles,'cours'=>$cours]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horaire = new Horaire;
        $horaire-> salle_id = $request->input('salle_id');
        $horaire-> cour_id = $request->input('cour_id');
        $horaire-> heure_id = $request->input('heure_id');
        $horaire-> jour_id = $request->input('jour_id');
        
        $horaire->save();

        return redirect('horaires/create');
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
    public function edit(Horaire $horaire)
    {   $jours = Jour::all();
        $cours = Cour::all();
        $salles = Salle::all();
        $heures = Heure::all();
       // $horaire = Horaire::find($id)->first();
        // return view ('horaire/edit')->with('horaire', $horaire,'cours',$cours); 
        return view('horaires/edit',compact('cours','jours','salles','heures','horaire'));
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
        $horaire = Horaire::where('id',$id)->update([
        'salle_id'=> $request->input('salle_id'),
        'jour_id'=> $request->input('jour_id'),
        'cour_id'=> $request->input('cour_id'),
        'heure_id'=> $request->input('heure_id')]);
        
        return redirect('horaires/create');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Horaire $horaire)
    {   //$horaire = horaires::find($id)->first();
        $horaire->delete();
	    return redirect ('/horaires');
    }
}