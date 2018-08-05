<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="css/app.css" rel="stylesheet" type="text/css"> 

    <title>My resume</title>

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <!--Main Navigation-->
    <nav class="navbar navbar-dark navbar-expand-md fixed-top" style="background-color: rgba(32,32,32,0.5)">
        <a class="navbar-brand font-italic text-light" href="#">ZombiMaks</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="nav navbar-nav">
                <li class="mr-3 nav-item"><a href="#myPage" class="nav-link">Главная</a></li>
                <li class="mr-3 nav-item"><a href="#myInfo" class="nav-link">Обо мне</a></li>
                <li class="mr-3 nav-item"><a href="#" class="nav-link">Проекты</a></li>
                <li class="mr-5 nav-item"><a href="#" class="nav-link">Контакты</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="mr-2 nav-item"><a href="#" class="nav-link"><img src="images/user.svg" alt="*" width="15px" height="15px"> Регистрация</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><img src="images/logout.svg" alt="$" width="15" height="15"> Вход</a></li>
            </ul>
        </div>
    </nav>

    <header>

        <!--Carusel-->

        <div id="carouselExampleControls" class="carousel slide carousel-fade d-none d-sm-blockd-sm-none d-md-block d-md-none d-lg-block" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/img1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/img2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/img.jpg" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
        </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="sr-only">Next</span>
        </a>
        </div>
        <div id="main-text" class="">
            <div class="col-md text-center ">
                <h1>
                    Junior PHP Developer</h1>
                <h3>
                    The main thing is to be the best.
                </h3>
                <div class="">
                    <a class="btn btn-outline-light btn-clear btn-sm" href="#">Обратная связь</a><a class="btn btn-outline-light btn-clear btn-sm" href="#">Подробнее</a></div>
            </div>
        </div>
    </header>
    <!--     Обо мне     -->
    <main>
        <div class="container-fluid" style="background-color: darkgray">
            <div class="col-8 border text-center m-auto">
                <h4 class="text-center text-light">Образование и курсы</h4>
                <p class="text-light">Белорусский национальный технический университет (БНТУ)</p>
            </div>
            <div class="col-8 border text-center m-auto">
                <h4 class="text-center text-light">Хобби и увлечения</h4>
            </div>
        </div>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
