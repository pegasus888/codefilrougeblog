<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Home - DWWM Blog</title>

    <!--    Links from Bootstrap "Examples" website (not from sass):
        <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/bootstrap-icons.min.css" rel="stylesheet">-->

    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        /*        .btn-bd-primary {
                    --bd-violet-bg: #712cf9;
                    --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

                    --bs-btn-font-weight: 600;
                    --bs-btn-color: var(--bs-white);
                    --bs-btn-bg: var(--bd-violet-bg);
                    --bs-btn-border-color: var(--bd-violet-bg);
                    --bs-btn-hover-color: var(--bs-white);
                    --bs-btn-hover-bg: #6528e0;
                    --bs-btn-hover-border-color: #6528e0;
                    --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
                    --bs-btn-active-color: var(--bs-btn-hover-color);
                    --bs-btn-active-bg: #5a23c8;
                    --bs-btn-active-border-color: #5a23c8;
                }*/

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        /*        @media (min-width: 768px) {
                    .bd-placeholder-img-lg {
                        font-size: 3.5rem;
                    }
                }

                .b-example-divider {
                    width: 100%;
                    height: 3rem;
                    background-color: rgba(0, 0, 0, .1);
                    border: solid rgba(0, 0, 0, .15);
                    border-width: 1px 0;
                    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
                }

                .b-example-vr {
                    flex-shrink: 0;
                    width: 1.5rem;
                    height: 100vh;
                }*/

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        /*        .nav-scroller {
                    position: relative;
                    z-index: 2;
                    height: 2.75rem;
                    overflow-y: hidden;
                }

                .nav-scroller .nav {
                    display: flex;
                    flex-wrap: nowrap;
                    padding-bottom: 1rem;
                    margin-top: -1px;
                    overflow-x: auto;
                    text-align: center;
                    white-space: nowrap;
                    -webkit-overflow-scrolling: touch;
                }*/

        /*        .btn-bd-primary {
                    --bd-violet-bg: #712cf9;
                    --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

                    --bs-btn-font-weight: 600;
                    --bs-btn-color: var(--bs-white);
                    --bs-btn-bg: var(--bd-violet-bg);
                    --bs-btn-border-color: var(--bd-violet-bg);
                    --bs-btn-hover-color: var(--bs-white);
                    --bs-btn-hover-bg: #6528e0;
                    --bs-btn-hover-border-color: #6528e0;
                    --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
                    --bs-btn-active-color: var(--bs-btn-hover-color);
                    --bs-btn-active-bg: #5a23c8;
                    --bs-btn-active-border-color: #5a23c8;
                }*/

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!--Header-->
<header class="p-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <!--<svg  width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>-->
                <img class="bi me-2 rounded-circle shadow" src="public/assets/images/no_image.jpg" width="60" height="52" alt="logo" style="object-fit: cover;">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 link-info">Home</a></li>
                <li><a href="#" class="nav-link px-2 link-underline-primary">DWWM<sub><i>Blog</i></sub></a></li>
                <!--<li><a href="#" class="nav-link px-2 link-body-emphasis">Catégories</a></li>-->
                <li><a href="#" class="nav-link px-2 link-body-primary">Hobby</a></li>
                <li><a href="#" class="nav-link px-2 link-body-primary">Code</a></li>
                <li><a href="#" class="nav-link px-2 link-body-primary">Travail</a></li>
                <li><a href="#" class="nav-link px-2 link-body-primary">Life</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control" placeholder="Recherche..." aria-label="Search">
            </form>

            <div class="dropdown text-end">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="public/assets/images/no_image.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="#">Profil</a></li>
                    <li><a class="dropdown-item" href="#">Admin</a></li>
                    <li><a class="dropdown-item" href="#"><!--Settings--></a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Se déconnecter</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!--/Header-->

<!-- Slider-->
<!--<div class='container'>-->
<link href="http://fonts.googleapis.com/css?family=Crafty+Girls" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="public/assets/slider/ism/css/my-slider.css"/>
<script src="public/assets/slider/ism/js/ism-2.2.min.js"></script>

<div class="ism-slider" data-play_type="once" data-interval="3000" id="my-slider">
    <ol>
        <!-- Slider 1 -->
        <li>
            <a href="https://phpblog/lifestyle.com" target="_blank">
                <img src="public/assets/images/no_image.jpg">
                <div class="ism-caption ism-caption-0 bg-altdark">DWWM<sub><i>Blog</i></sub></div>
            </a>
        </li>
        <!-- /Slider 1 -->

        <!-- Slider 2 -->
        <li>
            <a href="https://phpblog/environement.com" target="_blank">
                <img src="public/assets/images/no_image.jpg">
                <div class="ism-caption ism-caption-1 text-danger" data-delay='200'>My slide caption text</div>
            </a>
        </li>
        <!-- /Slider 2 -->

        <!-- Slider 3 -->
        <li>
            <a href="https://phpblog/techno.com" target="_blank">
                <img src="public/assets/images/no_image.jpg">
                <div class="ism-caption ism-caption-1" data-delay='200'>My slide caption text</div>
            </a>
        </li>
        <!-- /Slider 3 -->

        <!-- Slider 4 -->
        <li>
            <a href="https://phpblog/society.com" target="_blank">
                <img src="public/assets/images/no_image.jpg">
                <div class="ism-caption ism-caption-2 text-altmycolor" data-delay='500'>My slide caption text</div>
            </a>
        </li>
        <!-- /Slider 4 -->
    </ol>
</div>
<!--</div>-->
<!--/Slider-->

<main class="p-2">
    <h1 class="mx-4 text-primary">Articles</h1>


    <!--Post-->
    <div class="row mb-2">

        <!--Card 1-->
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-altlight">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Hobby</strong>
                    <h3 class="mb-0 text-info">Une passion pour la lecture</h3>
                    <div class="mb-1 text-body-secondary">Auteur, date</div>
                    <div class="col-lg-auto col-12 d-lg-block">
                        <img class="bd-placeholder-img mb-3 w-100" width="200" height="250" src="public/assets/images/techno.jpg" alt="">
                    </div>
                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continuer la lecture ...
                        <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <!--/Card 1-->

        <!--Card 2-->
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-altlight">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Code</strong>
                    <h3 class="mb-0 text-info">Bootstrap en deux mots</h3>
                    <div class="mb-1 text-body-secondary">Auteur, date</div>
                    <div class="col-lg-auto col-12 d-lg-block">
                        <!--<svg class="bd-placeholder-img w-100" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
                        <img class="bd-placeholder-img mb-3 w-100" width="200" height="250" style="object-fit: cover;" src="public/assets/images/techno.jpg" alt="">
                    </div>
                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continuer la lecture ...
                        <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <!--/Card 2-->

        <!--Card 3-->
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-altlight">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Travail</strong>
                    <h3 class="mb-0 text-info">Kit de survie du stagiaire</h3>
                    <div class="mb-1 text-body-secondary">Auteur, date</div>
                    <div class="col-lg-auto col-12 d-lg-block">
                        <!--<svg class="bd-placeholder-img w-100" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
                        <img class="bd-placeholder-img mb-3 w-100" width="200" height="250" style="object-fit: cover;" src="public/assets/images/techno.jpg" alt="">
                    </div>
                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continuer la lecture ...
                        <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <!--/Card 3-->

        <!--Card 4-->
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative bg-altlight">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Life</strong>
                    <h3 class="mb-0 text-info">La vie au soleil</h3>
                    <div class="mb-1 text-body-secondary">Auteur, date</div>
                    <div class="col-lg-auto col-12 d-lg-block">
                        <!--<svg class="bd-placeholder-img w-100" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
                        <img class="bd-placeholder-img mb-3 w-100" width="200" height="250" style="object-fit: cover;" src="public/assets/images/techno.jpg" alt="">
                    </div>
                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
                        Continuer la lecture ...
                        <svg class="bi"><use xlink:href="#chevron-right"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <!--/Card 4-->

    </div>
    <!--/Post-->
</main>

<!--Footer-->
<div class="container">
    <footer class="py-5">
        <div class="row">
            <!--                <div class="col-6 col-md-2 mb-3">
                                <h5>Section</h5>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                                </ul>
                            </div>-->

            <div class="col-6 col-md-2 mb-3">
                <!--<h5>Section</h5>-->
                <ul class="nav flex-column">
                    <!--<li class="nav-item mb-2"><a href="#"><i class="bi bi-house"></i></a></li>-->
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2" href="home.php">
                            <i class="bi bi-house"></i>
                            <!--Home-->
                        </a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-primary">À propos</a></li>
                    <!--<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>-->
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-primary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-primary">Contact</a></li>
                </ul>
            </div>

            <!--                <div class="col-6 col-md-2 mb-3">
                                <h5>Section</h5>
                                <ul class="nav flex-column">
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                                </ul>
                            </div>-->

            <div class="col-md-5 offset-md-3 mb-3">
                <form>
                    <h5 class="text-info">Abonne-toi à la newsletter</h5>
                    <p>Et reçois les derniers articles</p>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <label for="newsletter1" class="visually-hidden">Email</label>
                        <input id="newsletter1" type="text" class="form-control" placeholder="Email">
                        <button class="btn btn-primary" type="button">S'abonner</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>&copy; 2024 DWWM Blog, All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
            </ul>
        </div>
    </footer>
</div>
<!--/Footer-->

<!--<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>


