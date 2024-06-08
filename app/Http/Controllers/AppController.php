<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;

class AppController extends Controller
{
  public function index(){
    $totalDepartement = Departement::all()->count();
    $totalEmployers = Employer::all()->count();
    $totalAdministrateur = User::all()->count();
    return view("dashboard",
     compact("totalDepartement","totalEmployers","totalAdministrateur"));
  }


}