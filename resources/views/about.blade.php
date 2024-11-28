<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="alert alert-warning text-center" role="alert">
        This website is still in development and some pages are incomplete.
    </div>

    <div class="d-flex justify-content-end me-3">
        <div class="dropdown show">
            <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Theme
            </a>
          
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#" id="toggleSwitch">Dark</a>
            </div>
        </div>
    </div>
    
    <script>
        function applySavedTheme() {
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                document.documentElement.setAttribute('data-bs-theme', savedTheme);
                document.getElementById("toggleSwitch").innerHTML = savedTheme === 'light' ? 'Dark' : 'Light';
            }
        }
    
        document.getElementById("toggleSwitch").addEventListener('click', () => {
            let currentTheme = document.documentElement.getAttribute('data-bs-theme');
            let newTheme = currentTheme === 'light' ? 'dark' : 'light';
            document.documentElement.setAttribute('data-bs-theme', newTheme);
            document.getElementById("toggleSwitch").innerHTML = newTheme === 'light' ? 'Dark' : 'Light';
            localStorage.setItem('theme', newTheme);
        });
    
        applySavedTheme();
    </script>

    <div class="container my-3">
        <h1 class="text-center">Aaron Hussain</h1>
        <div class="d-flex justify-content-center">
            <a href="mailto:Aarn10934@outlook.com" type="button" class="btn btn-outline-primary">
                Aarn10934@outlook.com
            </a>
        </div>
        
        <p class="lead text-center">
            Fond of web development and design. Sufficient in programming both front-end and back-end for applications.
        </p>
    </div>    
    

    
    @extends('layouts.app')

    @section('content')

    <div class="container">
        <h3 class="mt-5 mb-3">About Aaron</h3>
        <p>I am a freelance software developer who has created many projects in the past. These can be seen the home page of this website. I have been programming for eight years now and have accomplised many projects within this time. This experience include fullstack website development and python data analysis. More about my personal projects can be found on the projects part of the home page. I also have developed numerous ways to debug errors in progams and make sure that there are no issues in production.</p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @endsection
</body>
</html>