<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   
    <title>KGiSL Institute of Technology</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            
        }

        header {
            background-color: #ff6600;
            padding: 5px 0;
            text-align: center;
        }

        footer {
            background-color: #ff6600;
            padding: 5px 0;
            text-align: center;
        }

        header a {
            color: white;
            text-decoration: none;
            padding: 10px 16px;
            display: inline-block;
        }
        

        nav {
            display: flex;
            align-items: center;
            background-color: #000080;
        }

        
        .nav-box {
            background-color: white;
            padding: 8px; 
            width : 500px;
        }

        .college-logo {
            display: block;
            margin: 0 auto; 
            width: 140px;
            height:auto;
        }

        nav a {
            color: white;
            padding: 40px 60px;
            text-decoration: none;
            text-align: center;
        }

        nav a.active {
            color: orange;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            text-align: left;
            width: 150px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .content {
            margin: 20px; 
        }
    </style>
</head>
<body>

<header>
    
</header>

<nav>
    <div class="nav-box">
        <img class="college-logo" src="https://www.kgkite.ac.in/wp-content/themes/kgkite/images/logo.png" alt="College Logo" width="150">
    </div>
    <a class="active" href="<?php echo e(url('/home')); ?>">HOME</a>

    <div class="dropdown">
    <a href="<?php echo e(url('/students')); ?>">STUDENT</a>
    <div class="dropdown-content">
            
            <a href="<?php echo e(url('/students')); ?>">Student Registration</a>
           
            <a href="<?php echo e(url('/student/gallery')); ?>">Gallery</a>
           
        </div>
    </div>
    
    
    <div class="dropdown">
        <a href="<?php echo e(url('/alumniss')); ?>">ALUMNI</a>
        <div class="dropdown-content">
            <a href="#">Distinguished Alumni</a>
            <a href="<?php echo e(url('/alumni/register')); ?>">Alumni Registration</a>
            <a href="<?php echo e(url('/alumni/gallery')); ?>">Gallery</a>
            <a href="<?php echo e(url('/alumnis')); ?>">Post</a>
        </div>
    </div>
    
    <a href="<?php echo e(url('/admin/index')); ?>">ADMIN</a>
    <a href="<?php echo e(url('/contact')); ?>">CONTACT</a>
    
</nav>

<div class="content">
    <!-- Your content goes here -->
    <?php echo $__env->yieldContent('content'); ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const currentUrl = window.location.href;
        const navLinks = document.querySelectorAll('nav a');

        navLinks.forEach(link => {
            if (currentUrl.includes(link.getAttribute('href'))) {
                link.classList.add('active');
            }

            link.addEventListener('click', function() {
                
                navLinks.forEach(otherLink => {
                    otherLink.classList.remove('active');
                });

               
                link.classList.add('active');
            });
        });
    });
</script>

</body>
</html>



<?php /**PATH C:\Users\N RATHNA PRABA\alumni-app\resources\views/layout.blade.php ENDPATH**/ ?>