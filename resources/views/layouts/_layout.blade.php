<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="css/style.css" rel="stylesheet"> 
    <title>My resume</title>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <!--Main Navigation-->
    @section('nav')

    <header class="bg-dark">

        <!--Carusel-->

        <div id="carouselExampleControls" class="carousel slide carousel-fade d-none d-sm-blockd-sm-none d-md-block d-md-none d-lg-block" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/img1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/img2.jpeg" alt="Second slide">
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
    <main id="myInfo" class="main">
        <div class="container mt-5">
            <img src="images/my.jpg" alt="..." class="rounded-circle mx-auto d-block img-thumbnail" width="200px">
            <div class="row mt-5">
                <div class="col-lg-6 mt-4 border-right">
                    <div class="h-100">
                        <h4 class="text-center text-dark pb-3">
                            <img src="images/study.png" alt="study"> Образование и курсы</h4>
                        <p class="text-dark"> Закончил Белорусский национальный технический университет в 2014г., получил специальность инженера-механика. <br> Прошел курсы php-програмиста в онлайн-школе хекслета, где приобрел навыки в програмировании, понимание ООП, MVC, SQL-запросов, поработал с некоторыми фреймворками. Изучал javaScript на learn.javascript.ru и на хекслете немного. А также есть небольшие навыки верстки, на уровне не сложной страницы, как эта. Знания английского чуть выше уровня elementary.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <div class="h-100">
                        <h4 class="text-center text-dark pb-3">
                            <img src="images/hobi.png" alt="hobi"> Хобби и увлечения</h4>
                        <p class="text-dark pl-1">
                            Попробую в краткой форме немного описать своих личных качеств:<br> Обладаю пониманием электротехники на уровне железа, так как с восемнадцати лет увлекался ремонтами разнообразны электроприборов. Вообщем что попросят то и делал (в основном телефоны, но бывало и ноутбуки, пк, телевизоры, магнитолы и т.д.);<br> Обладаю хорошей усидчивостью, так как приходилось паять по несколько часов (хоть я и не особо это любил);<br> Увлекаюсь психологией и саморазвитием, прослушал очень много аудиокниг на эту тему : "Как перестать беспокоиться и начать жить" Дейл Карнеги, "Лидер без титула" Робин Шарма, "Психология влияния" Роберт Чалдини, "Сила подсознания" Диспенза Джо, книги Брайана Трейси и много других, всего около 20 - 30. Поэтому психологически очень устойчив.<br> Приобрел привычку к работе относится, как к получении нового опыта и развитию (благодаря книге "Лидер без титула");<br> Никогда не ищу оправдание, а ищу решение ( нет ничего невозможного);<br> Занимаюсь спортом (бег по утрам, уличные тренажеры, футбол);
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer>
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-lg-7 pt-3">
                    <a href="#myInfo" class="nav-link">
                        <p class="copyright text-white text-right"> &copy; Kolesnik Maksim 2018</p>
                    </a>
                </div>
                <div class="col-lg-5 pt-3">
                    <ul class="text-right pr-5">
                        <li class="list-inline-item">
                            <a href="https://github.com/ZombiMaks">
                            <img src="images/github.png" alt="github">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://vk.com/maksim190">
                            <img src="images/vk.png" alt="vk">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/Maksim45741262">
                            <img src="images/twitter.png" alt="twitter">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="">
                            <img src="images/skype.png" alt="skype">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
