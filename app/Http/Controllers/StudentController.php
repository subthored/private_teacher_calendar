<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Student;
use App\Http\Requests\StudentRequest;
use Illuminate\Routing\Controller;

class StudentController extends Controller
{
    protected Collection $students;

    public function index()
    {
        $students = Student::query()
        ->paginate(15);
        return view('students.index', [
            'students' => $students
        ]);
    }

    public function create()
    {
        return view('students.create', [
            'student' => new Student()
        ]);
    }

    public function store(StudentRequest $request)
    {
        $this->saveStudent(new Student(), $request, auth()->id());
        flash(__('Студент успешно создан'))->success();
        return redirect()->route('students.index');
    }

    public function show()
    {
        
    }

    public function edit()
    {
        
    }

    public function update()
    {
        
    }

    public function destroy()
    {
        
    }

    public function saveStudent(Student $student, StudentRequest $request)
    {
        $validated = $request->validated();
        $student->fill($validated);
        $student->save();
    }
}
