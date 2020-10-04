<?php

namespace App\Http\Controllers;

use App\Employee;
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
}
