<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    


    <title>Post Job</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .form-container label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .form-container input[type="text"],
        .form-container textarea,
        .form-container input[type="file"] {
            width: calc(100% - 20px); /* Adjusted width */
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 20px;
        }

        .form-container input[type="file"] {
            border: none;
            padding: 10px;
            margin-bottom: 0;
            background-color: #f2f2f2;
        }

        .form-container button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-container button[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-container .file-upload-container {
            position: relative;
            display: flex;
            flex-direction: column; /* Changed from row to column */
            align-items: flex-start; /* Adjusted alignment */
        }

        .form-container .file-upload-container label {
            margin-bottom: 5px; /* Adjusted margin */
        }

        .form-container .file-upload-container input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Post Job</h2>
    <form action="<?php echo e(url('/alumni/job')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <label for="role">Role:</label>
        <input type="text" id="role" name="role"  class="form-control" required>

        <label for="company_name">Company Name:</label>
        <input type="text" id="company_name" name="company_name"  class="form-control" required>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location"  class="form-control"required>
      
        <label for="batch">Batch:</label>
        <input type="text" id="batch" name="batch"  class="form-control"required>

        <label for="job_description">Job Description:</label>
        <textarea id="job_description" name="job_description" class="form-control" required></textarea>

        <div class="file-upload-container">
            <label for="file">Upload File (Optional):</label>
            <input type="file" id="file" name="file" class="form-control">
            <span class="file-upload-label">Choose File</span>
        </div>
 <br>
 <br>
        <button type="submit">Apply</button>
    </form>
</div>

</body>

</html>
<?php /**PATH C:\Users\N RATHNA PRABA\alumni-app\resources\views/alumni/job.blade.php ENDPATH**/ ?>