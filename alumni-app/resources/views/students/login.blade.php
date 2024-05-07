<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

        .login-container {
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #333; 
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ddd; 
            border-radius: 5px;
        }

        .login-container input:focus {
            outline: none;
            border-color: #3498db; 
        }

        .login-container a {
            text-decoration: none;
            color: #3498db; 
            display: block;
            margin-top: 10px;
        }

        .login-container a:hover {
            text-decoration: underline; 
        }

        .login-container button {
            background-color: #3498db; 
            color: white; 
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s; 
        }

        .login-container button:hover {
            background-color: #2980b9; 
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Student Login</h2>

    @if(session('success_message'))
            <div class="alert alert-success">
                {{ session('success_message') }}
            </div>
            <br>
    @endif
    
        <form action="login" method="post" enctype="multipart/form-data">
    @csrf
  

        <input type="email" name="email" placeholder="Email" required> <br>
        <input type="password" name="password" placeholder="Password" required> <br>
        <a href="#">Forgot Password?</a>
        <br>
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
