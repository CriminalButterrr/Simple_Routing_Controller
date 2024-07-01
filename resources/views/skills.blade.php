<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Skills</title>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- Header -->
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 ">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <div class="me-2 circle"></div>
                <h1 class="fs-3 fw-bold">Harold Agwiking</h1> 
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/aboutme" class="nav-link text-black text-decoration-none fw-bold fs-5">About Me</a></li>
                <li class="nav-item"><a href="/skills" class="nav-link text-decoration-none fw-bold fs-5" aria-current="page">Skills</a></li>
                <li class="nav-item"><a href="/hobbies" class="nav-link text-black text-decoration-none fw-bold fs-5">Hobbies</a></li>
            </ul>
        </header>
    </div>

    <div class="container mt-4 px-5 text-center">
        <h1 class="fs-1">My Skills</h1>
        <p class="fs-4">I do all kinds of neat stuff</p>
    </div>

    <div class="container my-3 text-center">
        <div class="row">
            <div class="col">
            <div class="col">
                <box-icon name='code-block'size="10em"></box-icon>
                <h1>{{$skills['skill'][0]}}</h1>
                <p class="fs-5">Craft user-friendly and visually appealing websites using HTML5 and Laravel</p>
            </div>
            </div>
            <div class="col">
                <box-icon type='solid' name='brush' size="10em"></box-icon>
                <h1>{{$skills['skill'][1]}}</h1>
                <p class="fs-5">Create impactful visuals for print and digital media. Photoshop and Canva, </p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <box-icon type='solid' name='cog' size="10em"></box-icon>
                <h1>{{$skills['skill'][2]}}</h1>
                <p class="fs-5">Adapt and thrive in changing environments and project requirements.</p>
            </div>
            <div class="col">
                <box-icon name='search-alt' size="10em"></box-icon>
                <h1>{{$skills['skill'][3]}}</h1>
                <p class="fs-5">Effectively identify and resolve technical and design challenges.</p>
            </div>
            <div class="col">
                <box-icon type='solid' name='user-voice' size="10em"></box-icon>
                <h1>{{$skills['skill'][4]}}</h1>
                <p class="fs-5">Build strong working relationships and collaborate effectively with clients and colleagues.</p>
            </div>
        </div>        
    </div>


    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
            <div class="col-auto px-0 pt-2">
                <div class="triangle"></div>
            </div>
            <div class="col">
                <h3 class="fs-1">Contact</h3>
                <div class="d-flex flex-row gap-3">
                    <a href="https://www.instagram.com/_haaroold_/" class="link fs-5">Instagram</a>
                    <a href="https://x.com/_haaroold_" class="link fs-5 fs-5">Twitter</a>
                    <a href="mailto:h.agwiking@gmail.com" class="link fs-5 fs-5">Email</a>
                </div>
            </div>
        </div>
      </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
