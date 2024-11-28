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
    

    <div class="container mt-5 ">
        <div class="row">
            <div class="col">
                <h3 class="mb-3 text-center">Work Experience</h3>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="mx-3">
                            <h4 class="text-center">Freelance Development</h4>
                            <div>
                                <strong>2021 - 2024</strong>
                            </div>
                            Worked on many freelance solutions for varying contexts for clients.
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Developing web applications</li>
                            <li class="list-group-item">Developing NodeJS back-end applications with API</li>
                            <li class="list-group-item">Use of the popular discord.js package to create social chatbots.</li>
                        </ul>
                    </div>

                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="mx-3">
                            <h4 class="text-center">Personal Work</h4>
                            <div>
                                <strong>2016 - Current</strong>
                            </div>
                            Developed many applications for professional development purposes, can be found via my <a href="https://github.com/Aaron522">github page</a>.
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Experimenting with Java and C++</li>
                            <li class="list-group-item">Use of PHP to create back-end applications</li>
                            <li class="list-group-item">Using HTML, PHP, CSS and SQL to create <a href="https://github.com/Aaron522/companymanagement">full-stack applications</a>.</li>
                        </ul>
                    </div>

                </div>

                
            </div>
            <div class="col">
                <h3 class="mb-3 text-center">General Skills</h3>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="mx-3">
                            <h4 class="text-center">Front-End</h4>
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JS</li>
                                <li>Bootstrap</li>
                                <li>React</li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="mx-3">
                            <h4 class="text-center">Back-End</h4>
                            <ul>
                                <li>NodeJS</li>
                                <li>PHP</li>
                                <li>MySQL</li>
                                <li>Express</li>
                                <li>APIs</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h3 class="text-center">Previous Projects</h3>
        <div class="text-center mb-3">
            <i>Photos will be added when possible, stock photos will be used temporarily.</i>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="card mb-3">
                    <img src="https://picsum.photos/400/200" alt="Lorem Ipsum" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Company Management System</h5>
                        <p class="card-text">A responsive web panel to manage employees, SQL integration provided.</p>
                        <a class="btn btn-primary" type="button" href="https://github.com/Aaron522/companymanagement">View Source</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-3">
                    <img src="https://picsum.photos/400/200" alt="Lorem Ipsum" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">PHP Login System</h5>
                        <p class="card-text">A simple web login application that uses PHP to insert into an SQL database.</p>
                        <a class="btn btn-primary" type="button" href="https://github.com/Aaron522/phploginsystem">View Source</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-3">
                    <img src="https://picsum.photos/400/200" alt="Lorem Ipsum" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Website Homepage Template</h5>
                        <p class="card-text">This project integrates PHP sessions to track sessions and let users login for personalised data.</p>
                        <a type="button" href="https://github.com/Aaron522/bootstraptestlogin" class="btn btn-primary">View Source</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mb-3">
                    <img src="https://picsum.photos/400/200" alt="Lorem Ipsum" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">JavaScript Chatbot</h5>
                        <p class="card-text">This legacy project uses NodeJS to create a chatbot for the popular social platform Discord.</p>
                        <a class="btn btn-primary" type="button" href="https://github.com/Aaron522/bot">View Source</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @endsection

</body>
</html>