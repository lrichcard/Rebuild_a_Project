<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jour;
class JoursController extends Controller
{
    public function index()
    {
        $jours = Jour::all();
       // $jours = ['LLLLL',"H"];

        return view('jours.index', ['jours'=>$jours]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jours/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jour = new Jour;
        $jour-> nom = $request->input('nom');
        
        $jour->save();

        return redirect('jours/create');
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
        $jour = Jour::find($id)->first();
        
        return view ('jours/edit')->with('jour', $jour); 
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
        $jour = Jour::where('id',$id)->update([
        'nom'=> $request->input('nom')]);
  
        return redirect('jours/create');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jour $jour)
    {   //$jour = jours::find($id)->first();
        $jour->delete();
	    return redirect ('/jours');
    }
}