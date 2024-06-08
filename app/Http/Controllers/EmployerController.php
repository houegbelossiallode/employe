<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeRequest;
use App\Http\Requests\UpdateEmployerRequest;
use App\Models\Departement;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index(){
         $employers = Employer::with('departement')->paginate(10);
        return view("employers.index", compact('employers'));
    }
    public function create(){
        $departements= Departement::all();
        return view("employers.create", compact("departements"));
    }
    public function edit(Employer $employer){
        $departements= Departement::all();
        return view("employers.edit", compact("employer","departements"));
    }


    public function store(StoreEmployeRequest $request){

        $query = Employer::create($request->all());

    if($query){
        return redirect()->route("employers.index")->with("success","Employer créer avec succès");
    }
       // return view("employers.index", compact("employer"));
    }

    public function update(UpdateEmployerRequest $request,Employer $employer){
        //dd($request);

        $employer->nom = $request->nom;
        $employer->prenom = $request->prenom;
        $employer->contact = $request->contact;
        $employer->email = $request->email;
        $employer->departement_id = $request->departement_id;
        $employer->montant_journalier = $request->montant_journalier;
        $employer->update();
        return redirect()->route("employers.index")->with("success","Les nformations de l'Employer ont été mis à jour");
   }


   public function delete(Employer $employer){
    $employer->delete();
    return redirect()->route("employers.index")->with("success","Employer supprimer");
}



}