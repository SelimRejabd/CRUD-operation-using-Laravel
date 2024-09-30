<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = Employees::paginate(10);
        return view("welcome")->with("employees", $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employees.create');
    }

    public function editPage(Request $request)
    {
        $employee = Employees::find($request->id);
        return view('employees.edit')->with('employee', $employee);
    }

    public function addEmployee(Request $request)
    {
        // var_dump($request->all());



        $validated = $request->validate([
            'name' => 'required|max:255|string',
            'email' => 'required|email|unique:employees,email',
            'salary' => 'required|numeric',
            'job_title' => 'required|string',
            'joining_date' => 'required|date',
            'address' => 'required|string',
            'mobile_no' => 'required|numeric',
        ]);

        $data = $request->all();
        $employees = Employees::create($data);
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        //
        $employees = Employees::find($id);
        $employees->delete();
        return redirect('/');
        //var_dump('delete'. $id);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show(Employees $employees)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        $employee = Employees::find($id);

        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->address = $request->input('address');
        $employee->mobile_no = $request->input('mobile_no');
        $employee->salary = $request->input('salary');
        $employee->joining_date = $request->input('joining_date');
        $employee->job_title = $request->input('job_title');

        $employee->save();

        return redirect()->route('index')->with('success', 'Employee updated successfully.');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employees $employees)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employees $employees)
    {
        //
    }
}
