<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cour;
class CoursController extends Controller
{public function index()
    {
        $cours = Cour::all();
        return view('cours.index', ['cours'=>$cours]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cour = new Cour;
        $cour-> nom = $request->input('nom');
        
        $cour->save();

        return redirect('cours/create');
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
        $cour = Cour::find($id)->first();
        return view ('cours/edit')->with('cour', $cour); 
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
        $cour = Cour::where('id',$id)->update([
        'nom'=> $request->input('nom')]);
        
        return redirect('cours/create');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(cour $cour)
    {   //$cour = cours::find($id)->first();
        $cour->delete();
	    return redirect ('/cours');
    }
}
