<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Session;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::all();
        return view('employees', compact('employees'));
    }
   
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $gender = $request->gridRadios;
        $is_active = $request->is_active;
        $birthday = $request->birthday;
        $role = $request->role;
        
        $obj = new Employee();
        $obj->name = $name;
        $obj->email = $email;
        $obj->password = $password;
        $obj->gender = $gender;
        $obj->is_active = $is_active;
        $obj->birthday = $birthday;
        $obj->role = $role;

        if($obj->save()){
            return redirect()->to('employees') ;
        }

    }
    public function edit($id){
        $employee = Employee::find($id);
        return view('edit', compact('employee'));
    }
    public function update(Request $request, $id){
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->password = $request->password;
        $employee->gender = $request->gridRadios;
        $employee->is_active = $request->is_active;
        $employee->birthday = $request->birthday;
        $employee->role = $request->role;
        if($employee->save()){
            return redirect()->to('employees') ;
        }
    }
    public function delete($id){
        $employee = Employee::find($id);
        if($employee->delete()){
            return redirect()->to('employees');
        }
    }
}
