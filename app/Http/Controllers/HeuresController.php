<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Heure;
class HeuresController extends Controller
{
    public function index()
    {
        $heures = Heure::all();
        return view('heures.index', ['heures'=>$heures]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('heures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $heure = new heure;
        $heure-> nom = $request->input('nom');
        
        $heure->save();

        return redirect('heures/create');
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
        $heure = heure::find($id)->first();
        return view ('heures/edit')->with('heure', $heure); 
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
        $heure = heure::where('id',$id)->update([
        'nom'=> $request->input('nom')]);
        
        return redirect('heures/create');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heure $heure)
    {   //$heure = heures::find($id)->first();
        $heure->delete();
	    return redirect ('/heures');
    }
}