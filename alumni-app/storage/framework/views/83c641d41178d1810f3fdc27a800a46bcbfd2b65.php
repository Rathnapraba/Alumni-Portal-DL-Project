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
    <h2>Student Registration</h2>
    <form action="<?php echo e(url('students')); ?>"  method="post" enctype="multipart/form-data" >
    
        <?php echo csrf_field(); ?>

        <input type="text" name="name" placeholder="Name" required>
        
        
        <select name="gender" required>
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

        <select name="batch" required>
            <option value="">Select Batch</option>
            <option value="2024">2024</option>
            <option value="2023">2023</option>
            <option value="2022">2022</option>
            <option value="2021">2021</option>
            <option value="2020">2020</option>
            <option value="2019">2019</option>
        </select>

        <input type="email" name="email" placeholder="Email Address" required>
        <input type="mobile" name="mobile" placeholder="Mobile" required>
      
        
        <select name="degree" required>
            <option value="">Select degree</option>
            <option value="B.Tech">Bachelor's of Technology</option>
            <option value="B.E">Bachelor's of Engineering </option>
          
        </select>

        <select name="department" required>
            <option value="">Select Department</option>
            <option value="AI & DS">Artificial Intelligence and Data Science</option>
            <option value="IT">Information Technology</option>
        </select>

        <button type="submit">Register</button>

        
</div>

</body>
</html>
<?php /**PATH C:\Users\N RATHNA PRABA\alumni-app\resources\views/students/create.blade.php ENDPATH**/ ?>