<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Employee::get();
        return view('employee.index' ,compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $total_data= Company::get();
       return view('employee.create' ,compact('total_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'age'=>'required|min:2',
            'salary'=>'required',

        ]);
       Employee::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'age'=>$request->age,
        'salary'=>$request->salary,
        'company_id'=>$request->company_id
       ]);
   return redirect('/employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $total_data=Company::get();
     $data=Employee::findorFail($id);
       return view('employee.edit' ,compact('data','total_data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|min:2|max:30',
            'email'=>'required',
            'age'=>'required',
            'salary'=>'required',
            'company_id'=>'required'
        ]);
        $data=Employee::findorFail($id);
       $data->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'age'=>$request->age,
        'salary'=>$request->salary,
        'company_id'=>$request->company_id
       ]);
    //    return redirect('/employee');
    return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Employee::findorFail($id);
        $data->delete();
        return redirect('/employee');
    }
}
