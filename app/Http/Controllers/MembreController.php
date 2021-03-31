<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function getOneTeam($teamId)
    {
    	$oneTeam = Membre::where('id','=',$teamId)->with('getMembre')->get();

       return view('pages.team', compact('oneTeam'));
    }
    
    
    
    public function saveEdit(Request $request){

        $validator = Validator::make($request->all(), [
            'id' => 'required'
            
            
        ]);

        if($validator->fails()){
            return back()->withInput($request->except('key'))
            ->withErrors($validator);
        }
        $membre = Membre::find($request->id);
        $membre->nom = $request->nom;
        $membre->prenom=$request->prenom;
        $membre->telephone=$request->telephone;
        $membre->email=$request->email;
        $membre->photo=$request->photo;
        $membre->description=$request->description;
        $membre->save();
        return back();
    }

}
