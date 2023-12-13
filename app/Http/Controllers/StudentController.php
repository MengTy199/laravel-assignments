<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $data = StudentModel::all();
        return view("services.index", compact("data"));
    }
    public function show($id)
    {
        $x = StudentModel::find($id);
        return view("services.index", compact("x"));
    }

    public function create()
    {
        return view("services.create");
    }

    public function edit($id)
    {
        $x = StudentModel::find($id);
        return view("services.update", compact("x")); 
    }
    public function store(CreateStudentRequest $request)
    {

        if ($request->validated()) {
            StudentModel::create($request->all());
        } else {
            return redirect()->route('services.index');
        }
        // Flash a success message to the session
        // session()->flash('success', 'Data has been successfully saved.');

        return redirect()->route('services.index')->with('create', 'Student has been created successfully.');
    }
    public function update(UpdateStudentRequest $request,  $id)
    {
        if ($request->validated()) {
            StudentModel::find($id)->update($request->all());
        }else{
            return redirect()->route('services.index');
        }
        // StudentModel::find($id)->update($request->all());
        // StudentModel::create($request->all());
        return redirect()->route('services.index')->with('edit' , 'Student has been updated successfully.');
    }

    public function destroy($id)
    {
        StudentModel::find($id)->delete();
        return redirect()->route('services.index')->with('detete', 'Student has been deleted successfully');
    }
}
