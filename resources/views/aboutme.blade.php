<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>About Me</title>

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
                <li class="nav-item"><a href="/aboutme" class="nav-link text-decoration-none fw-bold fs-5" aria-current="page">About Me</a></li>
                <li class="nav-item"><a href="/skills" class="nav-link text-black text-decoration-none fw-bold fs-5">Skills</a></li>
                <li class="nav-item"><a href="/hobbies" class="nav-link text-black text-decoration-none fw-bold fs-5">Hobbies</a></li>
            </ul>
        </header>
    </div>

    <!-- Contents -->
    <div class="container mt-5 px-5">
        <div class="row">
            <div class="col-auto d-none d-lg-block px-0 pt-3">
                <div class="square "></div>
            </div>
            <div class="col-md-7 me-5">
                <h1 class="fs-1">Hi there!</h1>
                <p class="fs-3">
                    Hi again, I'm {{$personal_information['name']}}! I'm a novice web designer, eager to learn and grow in the field of web design. 
                    I'm excited to use my skills to create beautiful and functional websites.
                </p>
                <p class="fs-3">
                    When I'm not designing you may find me on SM eating or basically any restaurants or cafe around the city. 
                    Thanks for stopping by.  
                </p>
                </div>
                <div class="col-md-3 ">
                    <h4 class="fs-4 mt-4">What I like</h4>
                    <p class="fs-4">{{$personal_information['likes'][0]}}</p>
                    <p class="fs-4">{{$personal_information['likes'][1]}}</p>
                    <p class="fs-4">Making <a href="https://open.spotify.com/user/222ep2knfqqa6d7gggebjxhlq?si=732689e30cdb448c" class="text-black">playlists</a></p>
                    <h4 class="fs-4 mt-4">Favorite Artists</h4>
                    <p class="fs-4">BTS</p>
                    <p class="fs-4">Twice</p>
                    <p class="fs-4">(G)I-DLE</p>
                    <h4 class="fs-4">Favorite Movies/Series</h4>
                    <p class="fs-4">The Umbrella Academy</p>
                    <p class="fs-4">The Grand Budapest Hotel</p>
                    <p class="fs-4">The French Dispatch</p>
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
