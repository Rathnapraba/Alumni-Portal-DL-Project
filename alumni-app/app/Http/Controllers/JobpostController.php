<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobPostMail;

use App\Models\Jobpost;
use App\Models\Student;


// namespace App\Models;
// use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;



use Illuminate\View\View;




class JobpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $alumnis = Jobpost::all();
        // $alumnis = $alumnis->toArray();
      
       

        // Ensure $alumnis is an array
    
        return view('alumnis.index')->with('alumnis',$alumnis);
    }

//     public function index(): View
// {
//     $alumnis = Jobpost::all();
//     $jobPosts = session('jobPosts');
//     return view('alumnis.index')->with(['alumnis' => $alumnis, 'jobPosts' => $jobPosts]);
// }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : View
    {
        return view('alumnis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    

public function store(Request $request)
    {
        $input = $request ->all();
      
        Jobpost::create($input);
        
    
        $matchingStudents = Student::where('batch', $request->batch)->get();

        if ($matchingStudents->isEmpty()) {
            // If no matching students are found, return a message
            return redirect('alumnis')->with('error', 'No students found for the specified batch.');
        }
       
   
       
       
        // Send job post form to matching students
        foreach ($matchingStudents as $student) {
            // Send the job post form details to student's email
            Mail::to($student->email)->send(new JobPostMail($input));
        }

         return redirect('alumnis')->with('success', 'Job post sent to matching students.'); 
       
    }









    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }





    public function store1(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'comment' => 'required|string',
    ]);

    $input = $request->all();
  
    Comment::create($input);

    return redirect()->back()->with('success', 'Comment added successfully.');
}


//     public function index1()
// {
//     $alumnis = Jobpost::all(); // Assuming Jobpost is the correct model for alumni data
//     $comments = Comment::all(); // Fetch all comments
//     return view('alumnis.index', compact('alumnis', 'comments'));
//  }


public function index1()
{
    // Eager load comments using the 'comments' relationship
    $alumnis = Jobpost::with('comments')->get(); 
    return view('alumnis.index', compact('alumnis'));
}






    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit(string $id): View
    {
        $alumnis = Jobpost::findOrFail($id);
        return view('alumnis.edit')->with('alumnis',$alumnis);
        
    }

    public function update(Request $request, $id): RedirectResponse
    {
    $alumnis = Jobpost::find($id);
    $input = $request->all();
    $alumnis->update($input);
    return redirect('alumnis')->with('flash_message','Details Updated!');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    
    
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id): RedirectResponse
    {
        Jobpost::destroy($id);
        return redirect('alumnis')->with('flash_message','Staff deleted!');
    }
}
