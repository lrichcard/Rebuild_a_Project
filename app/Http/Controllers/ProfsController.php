<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profs;

class ProfsController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profs = Profs::all();
        return view('prof.index', ['profs'=>$profs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prof.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prof = new Profs;
        $prof-> nom = $request->input('nom');
        $prof-> prenom= $request->input('prenom');
        $prof-> ddn= $request->input('ddn');
        $prof-> sexe= $request->input('sexe');
        $prof-> adresse= $request->input('adresse');
        $prof-> telephone1= $request->input('telephone1');
        $prof-> telephone2= $request->input('telephone2');

        $prof->save();

        return redirect('prof/create');
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
        $prof = Profs::find($id)->first();
        return view ('prof/edit')->with('prof', $prof); 
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
        $prof = Profs::where('id',$id)->update([
        'nom'=> $request->input('nom'),
        'prenom'=>$request->input('prenom'),
        'ddn'=> $request->input('ddn'),
        'sexe'=>$request->input('sexe'),
        'adresse'=> $request->input('adresse'),
        'telephone1'=>$request->input('telephone1'),
        'telephone2'=> $request->input('telephone2')]);
        
        return redirect('prof/create');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profs $prof)
    {   //$prof = profs::find($id)->first();
        $prof->delete();
	    return redirect ('/');
    }
}
