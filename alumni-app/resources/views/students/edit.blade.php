<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('https://www.kgkite.ac.in/wp-content/uploads/2023/12/Building-banner-1920X750-1.jpg');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .registration-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            width: 300px;
            text-align: center;
        }

        .registration-container h2 {
            margin-bottom: 20px;
            color: #007BFF;
        }

        .registration-container input,
        .registration-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        .registration-container a {
            text-decoration: none;
            color: #007BFF;
            display: block;
            margin-top: 10px;
        }

        .registration-container button {
            background-color: #007BFF;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="registration-container">
    <h2>Edit Student Registration</h2>
    <form action="{{ '/students/'.$students->id }}"  method="post" enctype="multipart/form-data" >
    
    {{ csrf_field() }}
            @method("PATCH")

            <input type="text" name="name" placeholder="Name" value="{{ $students->name }}" required>
        
        <select name="gender" required>
            <option value="">Select Gender</option>
            <option value="male" {{ $students->gender == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ $students->gender == 'female' ? 'selected' : '' }}>Female</option>
        </select>

        <select name="batch" required>
            <option value="">Select Batch</option>
            <option value="2024" {{ $students->batch == '2024' ? 'selected' : '' }}>2024</option>
            <option value="2023" {{ $students->batch == '2023' ? 'selected' : '' }}>2023</option>
            <option value="2022" {{ $students->batch == '2022' ? 'selected' : '' }}>2022</option>
            <option value="2021" {{ $students->batch == '2021' ? 'selected' : '' }}>2021</option>
            <option value="2020" {{ $students->batch == '2020' ? 'selected' : '' }}>2020</option>
            <option value="2019" {{ $students->batch == '2019' ? 'selected' : '' }}>2019</option>
        </select>

        <input type="email" name="email" placeholder="Email Address" value="{{ $students->email }}" required>
        <input type="mobile" name="mobile" placeholder="Mobile" value="{{ $students->mobile }}" required>
      
        
        <select name="degree" required>
            <option value="">Select degree</option>
            <option value="B.Tech" {{ $students->degree == 'B.Tech' ? 'selected' : '' }}>Bachelor's of Technology</option>
            <option value="B.E" {{ $students->degree == 'B.E' ? 'selected' : '' }}>Bachelor's of Engineering </option>
        </select>

        <select name="department" required>
            <option value="">Select Department</option>
            <option value="AI & DS" {{ $students->department == 'AI & DS' ? 'selected' : '' }}>Artificial Intelligence and Data Science</option>
            <option value="IT" {{ $students->department == 'IT' ? 'selected' : '' }}>Information Technology</option>
        </select>

        <button type="submit">Update</button>
    </form>

        
</div>

</body>
</html>
