<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Student;
use Illuminate\View\View;
use Carbon\Carbon;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // if (session()->has('user_name')){
            $students = Student::all();
            return View('admin.students.index')->with('students', $students);
        // }
        // else{
        //     return redirect('/');
        // }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phoneNumber' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'dob' => 'required'
        ]);
        $input =$request->all();
        $uniq_name = strtoupper(substr($input['name'], 0, 2));
        $dateOfBirth = $input['dob'];
        $randomNumber = rand(100000, 999999);
        $carbonDateOfBirth = Carbon::createFromFormat('Y-m-d', $dateOfBirth);
        $birthYear = $carbonDateOfBirth->year;
        $uniq_id = $uniq_name . $birthYear . $randomNumber ;
        $input['student_id'] = $uniq_id;
        // echo $uniq_id;
        // echo $birthYear;
        // echo "<pre>";
        // print_r($input);
        // die;
        Student::create($input);
        // Save the student data
        // $student = Student::create($validated);

    // Send registration success email to the user
        // Mail::to($validated['email'])->send(new RegistrationSuccessEmail($student));
        return redirect('students')->with('flash_message','Student Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $students = Student::find($id);
        return View('admin.students.edit')->with('students', $students);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $students = Student::find($id);
        $input = $request->all();
        $students->update($input);
        return redirect('students')->with('flash_message','Student Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Student::destroy($id);
        return redirect('students')->with('flash_message','Student Deleted Successfully!');
    }
}
