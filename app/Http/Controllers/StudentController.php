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

    public function show(Student $student)
    {
        $student = Student::findOrFail($student->id);
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', [
            'student' => Student::findOrFail($student->id)
        ]);
    }

    public function update(StudentRequest $request, Student $student)
    {
        $this->saveStudent($student, $request);
        flash(__('Студент успешно обновлён'))->success();
        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        try {
            $student->delete();
            flash(__('Студент успешно удалён'))->success();
        } catch (\Exception $e) {
            flash(__('Не удалось удалить студента'))->error();
        }
        return redirect()->route('tasks.index');
    }

    public function saveStudent(Student $student, StudentRequest $request)
    {
        $validated = $request->validated();
        $student->fill($validated);
        $student->save();
    }
}
