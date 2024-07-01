<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>Hobbies</title>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 ">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <div class="me-2 circle"></div>
                <h1 class="fs-3 fw-bold">Harold Agwiking</h1> 
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item "><a href="/aboutme" class="nav-link text-black text-decoration-none fw-bold fs-5">About Me</a></li>
                <li class="nav-item"><a href="/skills" class="nav-link text-black text-decoration-none fw-bold fs-5">Skills</a></li>
                <li class="nav-item"><a href="/hobbies" class="nav-link text-decoration-none fw-bold fs-5" aria-current="page">Hobbies</a></li>
            </ul>
        </header>

        <div class="container mt-4 px-5 text-center">
            <h1 class="fs-1">My Hobbies</h1>
        </div>

        <hr/>

        <section>
            <div class="container mt-5 px-5 ">
                <h2 class="fs-2">Listening to music</h1>
                <p class="fs-4">Here are some of my favorite artists</p>
            </div>

            <div class="row mb-5 mx-5">
                <div class="col">
                    <div class="card border-light shadow-sm p-3 mb-5 bg-body rounded text-center h-100" style="width: 18rem, height: 12rem;">
                        <img src="https://6.soompi.io/wp-content/uploads/image/20240625160207_GIDLE_abf424.jpg?s=900x600&e=t" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h3 class="card-title">{{$artists['artist'][0]}}</h3>
                          <p class="card-text">Favorite Song: {{$artists['fav-song'][0]}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-light shadow-sm p-3 mb-5 bg-body rounded text-center h-100" style="width: 18rem, height: 12rem;">
                        <img src="https://phinf.wevpstatic.net/MjAyMzA4MDlfMjU5/MDAxNjkxNTcxODkzMjM0.fmFhkCfq7R3GsbI1nROCgfpLW4F39FiU-J2TmI8nCtwg.8Uq7FeyHTNdpCTIJcVGKsEl_x36mIwZrc9nHfADOCMEg.JPEG/BTS_%EC%95%84%ED%8B%B0%EC%8A%A4%ED%8A%B8%ED%94%BC%EB%94%94%EC%95%84_%ED%99%88%EC%83%81%EB%8B%A8.jpg?type=w670" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h3 class="card-title">{{$artists['artist'][1]}}</h3>
                          <p class="card-text">Favorite Song: {{$artists['fav-song'][1]}}</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-light shadow-sm p-3 mb-5 bg-body rounded text-center h-100" style="width: 18rem, height: 12rem;">
                        <img src="https://6.soompi.io/wp-content/uploads/image/20240303203307_TWICE.jpg?s=900x600&e=t" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h3 class="card-title">{{$artists['artist'][2]}}</h3>
                          <p class="card-text">Favorite Song: {{$artists['fav-song'][2]}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr/>

        <section>
            <div class="container mt-5 px-5 ">
                <h2 class="fs-2">Playing video games</h1>
                <p class="fs-4">Here are some of the games I've been playing recently</p>
            </div>

            <div class="row mb-5 mx-5">
                <div class="col">
                    <div class="card border-light shadow-sm p-3 mb-5 bg-body rounded text-center h-100" style="width: 18rem, height: 12rem;">
                        <img src="https://img.redbull.com/images/c_limit,w_1500,h_1000,f_auto,q_auto/redbullcom/2020/6/5/ctsejxmdtw9inp8zqqqd/red-bull-campus-clutch-valorant-agents" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h3 class="card-title">{{$games['game'][0]}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-light shadow-sm p-3 mb-5 bg-body rounded text-center h-100" style="width: 18rem, height: 12rem;">
                        <img src="https://cdn.mos.cms.futurecdn.net/Qjac87KCV6YFDzsRtzoCUC-1200-80.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h3 class="card-title">{{$games['game'][1]}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-light shadow-sm p-3 mb-5 bg-body rounded text-center h-100" style="width: 18rem, height: 12rem;">
                        <img src="https://cdn.oneesports.gg/cdn-data/wp-content/uploads/2021/02/WildRift_OfficialWallpaper.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h3 class="card-title">{{$games['game'][2]}}</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

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
</body>
</html>
