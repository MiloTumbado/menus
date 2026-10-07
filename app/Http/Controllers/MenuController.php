<?php
namespace App\Http\Controllers;
class MenuController extends Controller {
 public function inicio(){return view('sections.inicio');}
 public function asignaturas(){return view('sections.asignaturas');}
 public function entregas(){return view('sections.entregas');}
}
