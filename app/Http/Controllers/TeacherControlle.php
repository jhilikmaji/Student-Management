<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Teacher;
use Illuminate\View\View;
use Carbon\Carbon;
class TeacherControlle extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return View('admin.teachers.indexTeacher')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
        return view('admin.teachers.createTeacher');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated_teacher = $request->validate([
            'name' => 'required | string',
            'email' => 'required|email',
            'subject' => 'required',
            'phoneNumber' => 'required|digits:10',
            'gender' => 'required',
            'address' => 'required',
            'dob' => 'required|date|before:1999-01-01',
        ]);
        $input =$request->all();
        $uniq_name = strtoupper(substr($input['name'], 0, 2));
        $dateOfBirth = $input['dob'];
        $randomNumber = rand(100000, 999999);
        $carbonDateOfBirth = Carbon::createFromFormat('Y-m-d', $dateOfBirth);
        $birthYear = $carbonDateOfBirth->year;
        $uniq_id = $uniq_name . $birthYear . $randomNumber ;
        $input['teacher_id'] = $uniq_id;
        // echo $uniq_id;
        // echo $birthYear;
        // echo "<pre>";
        // print_r($input);
        // die;
        Teacher::create($input);
        // Save the student data
        // $student = Student::create($validated);

    // Send registration success email to the user
        // Mail::to($validated['email'])->send(new RegistrationSuccessEmail($student));
        return redirect('teachers')->with('flash_message','Teacher Added Successfully!');
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
        $teachers = Teacher::find($id);
        return View('admin.teachers.editTeacher')->with('teachers', $teachers);

        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $teachers = Teacher::find($id);
        $request->validate([
            'name' => 'required | string',
            'email' => 'required|email',
            'subject' => 'required',
            'phoneNumber' => 'required|digits:10',
            'gender' => 'required',
            'address' => 'required',
            'dob' => 'required|date',
        ]);
        $input = $request->all();
        $teachers->update($input);
        return redirect('teachers')->with('flash_message','Teacher Updated Successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Teacher::destroy($id);
        return redirect('teachers')->with('flash_message','Teacher Deleted Successfully!');
    }
}
