<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Eleve;
use App\Models\Activite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleve::all();
        return view("eleves.index" , compact("eleves"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("eleves.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom"=>"reuired|min:2",
            "prenom"=>"required|min:2"
        ]);
        Eleve::create([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "id_club"=>$request->id_club
        ]);
        return redirect(route("eleves.index"))->with("message","L'élève a été ajouté");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eleve = Eleve::find($id);
        $activites = Activite::join("clubs", "activites.id_club" , "=" , "clubs.id")
                                ->where("clubs.id" , "=" , $eleve->id)
                                ->select("activites.*")
                                ->get();
        $total_jours = $activites->sum("nb_jours");
        return view("eleves.show" , compact("eleves" , "activites"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $eleve = Eleve::find($id);
        $clubs = Club::all();
        return view("eleves.edit" , compact("eleve,clubs"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $eleve = Eleve::find($id);
        $eleve->update($request->all);
        return redirect(route("eleves.index"))->with("message" , "L'élève a été modifié");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Eleve::destroy($id);
        return redirect(route("eleves.index"))->with("message" , "L'élève a été supprimé");
    }
}
