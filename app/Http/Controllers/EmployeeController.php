<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\StorePeopleRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::paginate();
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePeopleRequest $request)
    {
        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'designation' => $request->designation,
            'address' => $request->address,
            'phone' => $request->phone,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employees)
    {
        //
    }
}
