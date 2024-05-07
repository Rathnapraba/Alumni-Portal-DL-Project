@extends('layout')

@section('content')
    <style>
        .gallery-container {
            text-align: center;
            margin: 20px; 
        }

        .gallery-heading {
            margin-bottom: 20px; 
        }

        .gallery-image {
            margin: 10px; 
        }
    </style>

    <div class="gallery-container">
        <h1 class="gallery-heading"> Gallery </h1>
        <h3> Photos </h3>

        <img class="gallery-image" src="https://www.kgkite.ac.in/wp-content/uploads/2023/12/3-1.jpg" alt="photo" width="300" height="300"> 
        <img class="gallery-image" src="https://www.kgkite.ac.in/wp-content/uploads/2023/12/3.jpg" alt="photo" width="300" height="300">
        <img class="gallery-image" src="https://www.kgkite.ac.in/wp-content/uploads/2023/12/1-1.jpg" alt="photo" width="300" height="300">
        <img class="gallery-image" src="https://www.kgkite.ac.in/wp-content/uploads/2023/12/2.jpg" alt="photo" width="300" height="300">
        <img class="gallery-image" src="https://www.kgkite.ac.in/wp-content/uploads/2023/12/WhatsApp-Image-2023-10-21-at-12.21.58-PM-5.jpeg" alt="photo" width="300" height="300">
        <img class="gallery-image" src="https://www.kgkite.ac.in/wp-content/uploads/2023/12/WhatsApp-Image-2023-10-21-at-12.21.57-PM-1.jpeg" alt="photo" width="300" height="300">
        <img class="gallery-image" src="https://www.kgkite.ac.in/wp-content/uploads/2023/12/alumni-1.jpg" alt="photo" width="300" height="300">
    </div>
@endsection
