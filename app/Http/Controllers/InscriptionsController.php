<?php

namespace App\Http\Controllers;

use App\Models\Horaire;
use App\Models\Inscription;
use Illuminate\Http\Request;
use App\Models\Horaire_Inscription;

class InscriptionsController extends Controller
{   
    public function index(){
        $inscriptions = Inscription::all();
        $horaires = Horaire::all();
        
        return view('inscriptions.index', ['inscriptions'=>$inscriptions,'horaires'=>$horaires]);

    }

    public function create()
    {   $inscriptions = Inscription::all();
      
        $horaires = Horaire::all();

      
        return view('inscriptions.create',['inscriptions'=>$inscriptions,
        'horaires'=>$horaires]);
    }


    public function store(Request $request)
    {
        $horaire_inscription = new Horaire_Inscription;
        $inscriptions = new Inscription;
       
        $inscriptions-> nom = $request->input('nom');
        $inscriptions-> prenom= $request->input('prenom');
        $inscriptions-> ddn= $request->input('ddn');
        $inscriptions-> sexe= $request->input('sexe');
        $inscriptions-> adresseRue= $request->input('adresseRue');
        $inscriptions-> adresseVille= $request->input('adresseVille');
        $inscriptions-> phone1= $request->input('phone1');
        $inscriptions-> phone2= $request->input('phone2');
        $inscriptions-> pays= $request->input('pays');
        $inscriptions-> extraAdresse= $request->input('extraAdresse');
        $inscriptions-> statut= $request->input('statut');
        $inscriptions-> remarque= $request->input('remarque');

        $inscriptions->save();

        // ajouter etudiant dans classe
        
        $horaire_inscription-> horaire_id = $request->input('horaire_id');
        $horaire_inscription-> inscription_id = $request->input('horaire_id');

        $horaire_inscription->save();

        return redirect('inscriptions/create');
    }


    public function edit(Inscription $inscription) 
    {   $horaires = Horaire::all();
      

       // $horaire = Horaire::find($id)->first();
        // return view ('horaire/edit')->with('horaire', $horaire,'cours',$cours); 
        return view('inscriptions/edit',compact('inscription','horaires'));
    }

    public function show($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
      
        $inscriptions = Inscription::where('id',$id)->update([

            'prenom'=> $request->input('prenom'),
            'nom'=> $request->input('nom'),
            'sexe'=> $request->input('sexe'),
            'ddn'=> $request->input('ddn'),
            'phone1'=> $request->input('phone1'),
            'phone2'=> $request->input('phone2'),
            'statut'=> $request->input('statut'),
            'remarque'=> $request->input('remarque'),
            'adresseRue'=> $request->input('adresseRue'),
            'adresseVille'=> $request->input('adresseVille'),
            'extraAdresse'=> $request->input('extraAdresse'),
            'pays'=> $request->input('pays')]);

            return redirect('inscriptions/create');
    }

    public function destroy(Inscription $inscription)
    {   //$horaire = horaires::find($id)->first();
        $inscription->delete();
	    return redirect ('/inscriptions');
    }

}
