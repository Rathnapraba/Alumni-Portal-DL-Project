
<?php $__env->startSection('content'); ?>

    <!-- Add your CSS stylesheets or include CDN links here -->
    <style>
        body {
          /* background-image: url('https://www.kgkite.ac.in/wp-content/uploads/2023/12/Building-banner-1920X750-1.jpg'); */
            background-size: cover; /* Adjust this based on your design preferences */
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            /* Add additional styles for the body if needed */
            margin: 0; /* Remove default margin for body */
            padding: 0; /* Remove default padding for body */
            color: #fff;
            position: relative; /* Required for absolute positioning of chatbot */
            min-height: 100vh; /* Ensures the body takes up at least the full height of the viewport */
        }
        .home-container {
            padding: 20px;
        }
        .chatbot-container {
            position: absolute;
            bottom: 20px; /* Adjust this value to change the distance from the bottom */
            right: 20px; /* Adjust this value to change the distance from the right */
            width: 100%; /* Adjust the width of the iframe */
            height: 500px; /* Adjust the height of the iframe */
        }
    </style>
</head>
<body>
    <div class="home-container">
        
    </div>

    <!-- Embedding the chatbot -->
    <div class="chatbot-container">
        <iframe src="http://127.0.0.1:5000/" width="100%" height="100%" frameborder="0"></iframe>
    </div>
</body>
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\N RATHNA PRABA\alumni-app\resources\views/home/index.blade.php ENDPATH**/ ?>