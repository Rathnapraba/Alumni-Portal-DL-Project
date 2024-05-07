<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\View\View;

use Phpml\Classification\SVC;
use Phpml\SupportVectorMachine\Kernel;
use Phpml\Classification\KNearestNeighbors;

use Phpml\Classification\LogisticRegression;
use Phpml\FeatureExtraction\LabelEncoder;
use Phpml\Metric\Accuracy;
use Phpml\NeuralNetwork\Trainer\Backpropagation;
use Phpml\NeuralNetwork\Sigmoidactivation;
use Phpml\NeuralNetwork\architecture;
use Phpml\Regression\LeastSquares;
use Phpml\Segmentation\Random;
use Phpml\Statistic\Mean;
use Phpml\Statistic\StandardDeviation;
use Hashids\Hashids;


use Phpml\Classification\DecisionTree;
use Phpml\Dataset\ArrayDataset;
use Phpml\FeatureExtraction\StandardScaler;

use Phpml\Preprocessing\OrdinalEncoder;


use Phpml\FeatureExtraction\MinMaxScaler;
use Phpml\Metric\Accuracy as ClassificationAccuracy;


use Phpml\Exception\InvalidArgumentException;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        $students = Student::all();
        return view('students.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : View
    {
      
        return view('students.create');
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
      
        Student::create($input);
        return redirect('students')->with('flash_message','Staff deleted!'); 
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
  



   
    
    // public function search(Request $request): View
    // {
    //     // Receive search parameters from the request
    //     $query = $request->input('query');
    //     $name = $request->input('name');
    //     $gender = $request->input('gender');
    //     $batch = $request->input('batch');
    //     $email = $request->input('email');
    //     $mobile = $request->input('mobile');
    //     $degree = $request->input('degree');
    //     $department = $request->input('department');
    
    //     // Load student data from the database
    //     $students = Student::query();
    
    //     // Filter students based on search criteria
    //     if ($query) {
    //         $students->where('name', 'like', "%$query%");
    //     }
    //     if ($gender) {
    //         $students->where('gender', $gender);
    //     }
    //     if ($batch) {
    //         $students->where('batch', $batch);
    //     }
    //     if ($email) {
    //         $students->where('email', 'like', "%$email%");
    //     }
    //     if ($mobile) {
    //         $students->where('mobile', $mobile);
    //     }
    //     if ($degree) {
    //         $students->where('degree', $degree);
    //     }
    //     if ($department) {
    //         $students->where('department', $department);
    //     }
    
    //     // Get the filtered students
    //     $filteredStudents = $students->get();
    
    //     // Preprocess data for KNN algorithm
    //     $X = [];
    //     $y = [];
    //     foreach ($filteredStudents as $student) {
    //         $X[] = [
    //             intval($student->gender),
    //             intval($student->batch),
    //             intval($student->name),
    //             // Add other relevant features here
    //         ];
    //         $y[] = intval($student->is_alumni);
    //     }
    
    //     // Initialize and train the KNN model
    //     $classifier = new KNearestNeighbors($k = 3);
    //     try {
    //         $classifier->train($X, $y);
    //     } catch (InvalidArgumentException $e) {
    //         // Handle exception if necessary
    //         return back()->with('error', 'Error: Training the KNN model failed.');
    //     }
    
    //     // Extract search features from the request
    //     $searchFeatures = [
    //         intval($request->input('gender', 0)),
    //         intval($request->input('batch', 0)),

    //         intval($request->input('name', 0)),
    //         // Add other relevant features here
    //     ];
    
    //     // Use the trained model to predict alumni status based on search features
    //     try {
    //         $prediction = $classifier->predict([$searchFeatures]);
    //     } catch (\Throwable $th) {
    //         // Handle exception if necessary
    //         return back()->with('error', 'Error: Prediction using the KNN model failed.');
    //     }
    
    //     // Filter students based on the prediction
    //     $predictedStudents = [];
    //     foreach ($filteredStudents as $index => $student) {
    //         if ($prediction[$index] == 1) { // Assuming 1 represents alumni status
    //             $predictedStudents[] = $student;
    //         }
    //     }
    
    //     // Return the view with filtered students
    //     return view('students.index')->with('students', $predictedStudents);
    // }






    // public function search(Request $request): View
    // {
    //     // Receive search parameters from the request
    //     $searchQuery = $request->all();
    
    //     // Load student data from the database
    //     $students = Student::all();
    
    //     // Preprocess data
    //     $X = [];
    //     $y = [];
    //     foreach ($students as $student) {
    //         $X[] = [
    //             $student->gender,
    //             $student->batch,
    //             $student->department
    //         ];
    //         $y[] = $student->is_alumni;
    //     }
    
    //     // Initialize and train logistic regression model
    //     $model = new \Phpml\Classification\LogisticRegression();
    //     $model->train($X, $y);
    
    //     // Extract relevant features from the search query
    //     $searchFeatures = [
    //         $searchQuery['gender'] ?? 0,
    //         $searchQuery['batch'] ?? 0,
    //         $searchQuery['department'] ?? 0
    //     ];
    
    //     // Initialize an empty array for storing the filtered students
    //     $filteredStudents = [];
    
    //     // Use the trained model to predict alumni status for each student
    //     foreach ($students as $student) {
    //         $features = [
    //             $student->gender,
    //             $student->batch,
    //             $student->department
    //         ];
    //         $prediction = $model->predict([$features]);
    
    //         // If the predicted alumni status matches the search query, add the student to the filtered array
    //         if ($prediction[0] == ($searchFeatures[0] == 1 ? 1 : 0)) {
    //             $filteredStudents[] = $student;
    //         }
    //     }
    
    //     // Return filtered results to the view
    //     return view('students.index')->with('students', $filteredStudents);
    // }



    public function search(Request $request): View
{
    $query = $request->input('query');
    $gender = $request->input('gender');
    $batch = $request->input('batch');
    $degree = $request->input('degree');
    $department = $request->input('department');

    // Perform search and filtering
    $students = Student::query();

    if ($query) {
        $students->where('name', 'like', "%$query%")
                 ->orWhere('gender','like', "%$query%")
                 ->orWhere('batch', 'like', "%$query%")
                 ->orWhere('email', 'like', "%$query%")
                 ->orWhere('mobile', 'like', "%$query%")
                 ->orWhere('degree', 'like', "%$query%")
                 ->orWhere('department', 'like', "%$query%");
                 
                
    }
    
    if ($gender) {
        $students->where('gender', $gender);
    }

    if ($batch) {
        $students->where('batch', $batch);
    }

    
    if ($degree) {
        $students->where('degree', $degree);
    }

    
    if ($department) {
        $students->where('department', $department);
    }

    // Add conditions for other fields as needed

    $filteredStudents = $students->get();

    return view('students.index')->with('students', $filteredStudents);
}





    
   



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit(string $id): View
    {
        $students = Student::findOrFail($id);
        return view('students.edit')->with('students',$students);
        
    }

    
    public function update(Request $request, $id): RedirectResponse
    {
    $students = Student::find($id);
    $input = $request->all();
    $students->update($input);
    return redirect('students')->with('flash_message','Details Updated!');
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
        Student::destroy($id);
        return redirect('students')->with('flash_message','Staff deleted!');
    }
}