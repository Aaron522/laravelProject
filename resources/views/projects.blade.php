<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects Page</title>
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
    </div>    
    

    
    @extends('layouts.app')

    @section('content')

    <div class="container">
        <h3 class="mt-5 mb-3">Project Overview</h3>
        <p>This page will contain an overview and more detailed description of all the projects that were listed on the home page.</p>
    </div>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card mb-3" style="width: 75%; margin: 0 auto;">
                <!--<img src="" alt="Lorem Ipsum" class="card-img-top">//-->
                <div class="card-body">
                    <h5 class="card-title text-center">Company Management System</h5>
                    <p class="card-text">This system provides a web application that can be used for adding staff members to a database and managing those staff members. It consists of features in a CRUD application and uses backend integration to work.</p>
                    <p class="card-text">This system uses numerous languages to work, which are listed below.</p>
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                    </ul>
                    <p class="card-text">The source code for this specific project can be found via the projects list on the home page.</p>
                </div>
            </div>
        </div>
    </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @endsection
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>