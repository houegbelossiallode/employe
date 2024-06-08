<?php

namespace App\Http\Controllers;

use App\Http\Requests\saveDepartementRequest;
use App\Models\Departement;
use Exception;
use Illuminate\Http\Request;

class DepartementController extends Controller
{


    public function index(){
        $departements = Departement::paginate(10);
       return view("departements.index", compact('departements'));
   }
   public function create(){

       return view("departements.create");
   }
   public function edit(Departement $departement){

       return view("departements.edit", compact("departement"));
   }

public function store(Departement $departement,saveDepartementRequest $request){
    // Enregistrer un nouveau departement

    try{
    $departement->name = $request->name;
    $departement->save();
    return redirect()->route("departements.index")->with("insertion","Departement enregistré avec succès");
    }catch(Exception $e){
        $e;
    }

}

public function update(Departement $departement,saveDepartementRequest $request){
    // Enregistrer un nouveau departement

    try{
    $departement->name = $request->name;
    $departement->update();
    return redirect()->route("departements.index")->with("modification","Departement mis à jour avec succès");
    }catch(Exception $e){
        dd($e);
    }

}


public function delete(Departement $departement)
{

    $departement->delete();
    return redirect()->route("departements.index")->with("delete","Departement supprimé avec succès");

}

}