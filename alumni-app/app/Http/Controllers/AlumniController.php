<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Alumni;
use Illuminate\View\View;


class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index(): View
    {  
        $alumni = Alumni::all();
        return view('alumni.create', ['alumni' => $alumni]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():View
    {
        return view('alumni.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  

    public function store(Request $request)
{
    $input = $request->all();
    Alumni::create($input);

   
   

    
    return redirect('alumniss')->with('flash_message','Staff deleted!'); 
    
    
}

// In your JobpostController or relevant controller

// public function showJobList() {
//     $allAlumnis = Alumni::all(); // Assuming you're pulling from a database or similar source

//     // Filter out entries that do not meet expected structure
//     $filteredAlumnis = $allAlumnis->filter(function ($alumni) {
//         return is_object($alumni) && isset($alumni->role, $alumni->company_name, $alumni->location, $alumni->batch, $alumni->job_description);
//     });

//     return view('alumnis.index', ['alumnis' => $filteredAlumnis]);
// }


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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

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
    




     public function edit(string $id): View
    {
        $alumni = Alumni::findOrFail($id);
        return view('alumni.edit')->with('alumni',$alumni);
        
    }

    public function update(Request $request, $id): RedirectResponse
    {
    $alumni = Alumni::find($id);
    $input = $request->all();
    $alumni->update($input);
    return redirect('alumniss')->with('flash_message','Details Updated!');
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
        Alumni::destroy($id);
        return redirect('alumniss')->with('flash_message','Staff deleted!');
    }
}

