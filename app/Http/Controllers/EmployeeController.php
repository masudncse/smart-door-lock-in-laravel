<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Support\Facades\Storage;

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
        $employee = Employee::make([
            'name' => '',
            'email' => '',
            'designation' => '',
            'address' => '',
            'phone' => '',
            'image' => '',
            'status' => '',
        ]);

        return view('employee.create', compact('employee'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeRequest $request)
    {
        try {
            $imagePath = null;
            if ($request->hasFile('image')) {
                $file = $request->file('image');

                $name = $request->name . '-' . time();
                $extension = $file->getClientOriginalExtension();

                $imagePath = $request->file('image')->storeAs('uploads', $name . '.' . $extension);
            }

            Employee::create([
                'name' => $request->name,
                'email' => $request->email,
                'designation' => $request->designation,
                'address' => $request->address,
                'phone' => $request->phone,
                'image' => $imagePath,
                'status' => $request->status,
            ]);

            return redirect()->back();
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function edit(Employee $employee)
    {
        return view('employee.edit', compact('employee'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function update(EmployeeRequest $request, Employee $employee)
    {
        try {
            $oldImagePath = $request->old_image;
            $imagePath = $oldImagePath;
            if ($request->hasFile('image') && $oldImagePath) {
                if (Storage::exists($oldImagePath)) {
                    Storage::delete($oldImagePath);
                }

                $file = $request->file('image');

                $name = $request->name . '-' . time();
                $extension = $file->getClientOriginalExtension();

                $imagePath = $request->file('image')->storeAs('uploads', $name . '.' . $extension);
            }

            $employee->update([
                'name' => $request->name,
                'email' => $request->email,
                'designation' => $request->designation,
                'address' => $request->address,
                'phone' => $request->phone,
                'image' => $imagePath,
                'status' => $request->status,
            ]);

            return redirect()->back();
        } catch (\Exception $exception) {
            throw $exception;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        try {
            $employee->delete();

            // Delete associated image
            if (Storage::exists($employee->image)) {
                Storage::delete($employee->image);
            }

            return redirect()->to('/employees');
        } catch (\Exception $exception) {
            throw $exception;
        }
    }
}
