<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salle;
class SallesController extends Controller
{
    public function index()
    {
        $salles = Salle::all();
        return view('salles.index', ['salles'=>$salles]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('salles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salle = new Salle;
        $salle-> nom = $request->input('nom');
        
        $salle->save();

        return redirect('salles/create');
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
        $salle = salle::find($id)->first();
        return view ('salles/edit')->with('salle', $salle); 
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
        $salle = salle::where('id',$id)->update([
        'nom'=> $request->input('nom')]);
        
        return redirect('salles/create');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salle $salle)
    {   //$salle = salles::find($id)->first();
        $salle->delete();
	    return redirect ('/salles');
    }
}