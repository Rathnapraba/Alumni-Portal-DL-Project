<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>KITE Alumni Registration Form</title>
<style>
   body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            /* background-image: url('https://www.kgkite.ac.in/wp-content/uploads/2023/12/Building-banner-1920X750-1.jpg'); */
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }

        .registration-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .registration-container h2 {
            margin-bottom: 20px;
            color: #007BFF;
        }

        .registration-container input,
        .registration-container select,
        .registration-container textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .registration-container select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url('data:image/svg+xml;utf8,<svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>');
            background-position: right 10px top 50%;
            background-size: 12px;
            background-repeat: no-repeat;
        }

        .registration-container button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: calc(100% - 20px);
        }

        .registration-container button:hover {
            background-color: #0056b3;
        }

        .registration-container a {
            text-decoration: none;
            color: #007BFF;
            display: block;
            margin-top: 10px;
        }
</style>
</head>
<body>
<div class="registration-container">
    <h2>KITE Alumni Registration Form</h2>
    <form action="{{ url('/alumniss') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="mobile" placeholder="Mobile No. (Preferably Whatsapp No.)" required>
        
        <select name="batch" required>
            <option value="">Batch</option>
            <option value="2022">2022-2026</option>
            <option value="2021">2021-2025</option>
            <option value="2020">2020-2024</option>
            <option value="2019">2019-2023</option>
        </select>
        
        <select name="department" required>
            <option value="">Department</option>
            <option value="IT">Information Technology</option>
            <option value="CSE">Computer Science</option>
            <option value="AI & DS">Artificial Intelligence and Data Science</option>
        </select>
        
        <textarea name="address" placeholder="Address for Communication" rows="4" required></textarea>
        <input type="text" name="current_designation" placeholder="Current Designation" required>
        <input type="text" name="employer_name" placeholder="Name of the Employer" required>
        <input type="text" name="work_location" placeholder="Work Location" required>
        <input type="text" name="domain" placeholder="Domain of Work" required>
        <input type="number" name="experience_years" placeholder="Years of experience" required>
        <input type="text" name="highest_degree" placeholder="Highest Degree" required>
        
        <select name="present_status" required>
            <option value="">Status</option>
            <option value="completed">Completed</option>
            <option value="pursuing">Pursuing</option>
        </select>
        
        <input type="text" name="university" placeholder="Name and Location of the University / Institution" required>
        
        <button type="submit">Submit</button>
    </form>
</div>
</body>
</html>
