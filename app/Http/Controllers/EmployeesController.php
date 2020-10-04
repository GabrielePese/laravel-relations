<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Location;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index (){
        $emplo = Employee::all();
        return view ('home', compact('emplo'));
    }


    public function show($id){
        $employ = Employee::findOrFail($id);
        return view ('singoloEmp' , compact ('employ'));
    }

    public function create(){
        $locs = Location::all();
        return view('create-new', compact('locs'));
    }

    public function store(Request $request){
        $data = $request -> all();
        $employe = Employee::create($data);
        return redirect() -> route('emp-index');
    }

    public function destroy($id){

        $canc = Employee::findOrFail($id);
        $canc -> delete();

        return redirect()  -> route('emp-index');

    }
}