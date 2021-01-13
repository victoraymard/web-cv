<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html lang="en">



<!--
    No but oh! it's not fair to look at people naked like that, close this page and give me back my CSS everything
    right away!
-->



<head>
    <meta charset="utf-8">
    <title>CV Victor Aymard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Open Graph meta for Facebook and LinkedIn -->
    <meta property="og:title" content="Curiculum Victor Aymard" />
    <meta property="og:url" content="http://www.victor-aymard.com/" />
    <meta property="og:image" content="../img/enBref/enBrefPict.png" />
    <meta property="og:description" content="Welcome to my site, if you want to know a little more about me, this is where it all happens!" />
    <meta property="og:site_name" content="Curiculum Victor Aymard">
    <meta property="og:type" content="website">
    <meta name="author" content="Victor Aymard">

    <!-- Favicons -->
    <link href="../img/favicon-m.png" rel="icon">
    <!--<link href="../img/apple-touch-icon.png" rel="apple-touch-icon">-->

    <!-- caroussel -->
    <script src="../js/carousel.js"></script>

    <!-- Bootstrap CSS File -->
    <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="../css/carousel.css" rel="stylesheet"> <!--carousel 2.0 pour les hobbies-->

    <!-- Main Stylesheet File -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- Timeline Stylesheet File -->
    <link href="../css/timeline.css" rel="stylesheet">

</head>
<body id="page-top">

<!--/ Nav Star /-->
<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll" href="#page-top">My e-CV</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#about">About me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#service">My knowledge</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#work">My Experiences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#mon-parcours">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#blog">Hobbies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#contact">Contact</a>
                </li>
                <li class="nav-item" style="margin-top: 5px">
                    <a href="../index.php" >
                        <img src="../img/en.png" style="max-height: 25px" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--/ Nav End /-->

<!--/ Intro Skew Star /-->
<div id="home" class="intro route bg-image" style="background-image: url(../img/intro-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <!--<p class="display-6 color-d">Hello, world!</p>-->
                <h1 class="intro-title mb-4">Victor Aymard</h1>
                <p class="intro-subtitle"><span class="text-slider-items">
                        Engineering student,<B>Seeking for an apprenticeship </B>,Web developer,UX Designer,Product Designer, Product Manager,Photographer,Videographer
                    </span><strong class="text-slider"></strong></p>
                <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
            </div>
        </div>
    </div>
</div>
<!--/ Intro Skew End /-->

<section id="about" class="about-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="box-shadow-full">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                    <div class="about-img">
                                        <img src="../img/enBref/enBrefPict.png" class="img-fluid b-shadow-a" alt="" style="border-radius: 20px;">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-7">
                                    <div class="about-info">
                                        <p><span class="title-s">Name: </span> <span>Victor Aymard</span></p>
                                        <p><span class="title-s">Profil: </span> <span>Engineering student in master</span></p>
                                        <p><span class="title-s">Email: </span> <span><a href="mailto:victor.aymard@edu.ece.fr?subject=You are looking for an internship?&body=Hello Victor, you don't know me, but I have a feeling we're going to get along very well!" target="_blank">victor.aymard@edu.ece.fr</a></span></p>
                                        <p><span class="title-s">Phone: </span> <span>+33 6 40 46 32 49</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-mf">
                                <p class="title-s">Knowledge</p>


                                <span>UI/UX design</span> <span class="pull-right"></span>
                                <div class="containerok">
                                    <div class="progress-movedok">
                                        <div class="progress-bar1 " role="progressbar" style="width: 75%; border-radius:5px;" aria-valuenow="75" aria-valuemin="0"
                                             aria-valuemax="100" ></div>
                                    </div>
                                </div>

                                <span>Web development</span> <span class="pull-right"></span>
                                <div class="containerok">
                                    <div class="progress-movedok">
                                        <div class="progress-bar2 " role="progressbar" style="width: 85%; border-radius:5px;" aria-valuenow="85" aria-valuemin="0"
                                             aria-valuemax="100" ></div>
                                    </div>
                                </div>

                                <span>Objet Oriented Programming</span> <span class="pull-right"></span>
                                <div class="containerok">
                                    <div class="progress-movedok">
                                        <div class="progress-bar3" role="progressbar" style="width: 70%;border-radius:5px;" aria-valuenow="70" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <span>Team work</span> <span class="pull-right"></span>
                                <div class="containerok">
                                    <div class="progress-movedok">
                                        <div class="progress-bar4" role="progressbar" style="width: 75%;border-radius:5px;" aria-valuenow="75" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-me pt-4 pt-md-0">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        In a nutshell
                                    </h5>
                                </div>
                                <p class="lead">
                                    I'm looking for <strong id="rechercheDeStage">a 12-month apprenticeship starting in April 2021 </strong>
                                    as PO, PM, PrD, or UX designer.
                                </p>
                                <p class="lead">
                                    Currently in his last year at the Ecole Centrale d'Electronique (ECE) of
                                    Paris. I chose the major "Objets Connectés Réseaux et Services". Through this one, I have
                                    to improve my web development skills, as well as to acquire a lot of useful knowledge via
                                    courses in gamification, design thinking, and project management.
                                </p>
                                <p class="lead">
                                    From next April, I plan to start a double degree in UX management and experiential
                                    strategy in order to better understand the user's point of view and the different
                                    methods and strategies to improve a product by better investing in development.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--/ Section Services Star /-->
<section id="service" class="services-mf route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        My knowledge
                    </h3>
                    <p class="subtitle-a">
                        Technical, artistic and social skills
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                        <span class="ico-circle"><i class="ion-monitor"></i></span>
                    </div>
                    <div class="service-content">
                        <h2 class="s-title">Web Development</h2>
                        <p class="s-description text-center">
                            I am proficient in HTML, CSS, JS, as well as in the integration of bootstaps bricks (as illustrated by
                            this e-CV). I also know how to use a fullstack JS (React, Node, Express) approach, as well as how to put
                            set up a hosting solution, to carry out projects in all their aspects.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                        <span class="ico-circle"><i class="ion-code-working"></i></span>
                    </div>
                    <div class="service-content">
                        <h2 class="s-title">Computer Development</h2>
                        <p class="s-description text-center">
                            I was able to acquire a very good understanding of computer code (C, C++, Java) as well as logic.
                            algorithmic by my courses (graph theory) or by myself, via OpenClassroom.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                        <span class="ico-circle"><i class="ion-camera"></i></span>
                    </div>
                    <div class="service-content">
                        <h2 class="s-title">Photography</h2>
                        <p class="s-description text-center">
                            Through my important role in the ECE Paris photography association, I was able to familiarize myself with
                            with the art of photography and video, as well as with software from the Adobe suite (Lightroom,
                            Première, Photoshop) by numerous projects.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                        <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
                    </div>
                    <div class="service-content">
                        <h2 class="s-title">Pedagogy</h2>
                        <p class="s-description text-center">
                            Being currently an assistant on the annual project of the first years of ECE Paris, I like to
                            pass on my knowledge and help the younger ones in their learning. I also gave
                            private lessons before.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                        <span class="ico-circle"><i class="ion-paintbrush"></i></span>
                    </div>
                    <div class="service-content">
                        <h2 class="s-title">Graphic Design</h2>
                        <p class="s-description text-center">
                            Very concerned about the graphic aspect of my projects, I like to apply myself to make beautiful models.
                            before taking care of the frontend part of them to improve the UI (user interface), and
                            make the UX (user experience) optimal.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                        <span class="ico-circle"><i class="ion-android-contact"></i></span>
                    </div>
                    <div class="service-content">
                        <h2 class="s-title">Open-mindedness</h2>
                        <p class="s-description text-center">
                            I think I'm an empathic person who can listen to my various interlocutors to adapt to the
                            better to different situations. Therefore, I can provide adequate contents, both in the background
                            than in form.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Section Services End /-->

<div class="section-counter paralax-mf bg-image" style="background-image: url(../img/counters-bg-3.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
                    </div>
                    <div class="counter-num">
                        <p class="counter">12</p>
                        <span class="counter-text">MONTH OF APPRENTICESIP WANTED</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box pt-4 pt-md-0">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-ios-lightbulb"></i></span>
                    </div>
                    <div class="counter-num">
                        <p class="counter">12634</p>
                        <span class="counter-text">IQ</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box pt-4 pt-md-0">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-ios-people"></i></span>
                    </div>
                    <div class="counter-num">
                        <p class="counter">72</p>
                        <span class="counter-text">NUMBER OF JOKES PER DAY</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="counter-box pt-4 pt-md-0">
                    <div class="counter-ico">
                        <span class="ico-circle"><i class="ion-ribbon-b"></i></span>
                    </div>
                    <div class="counter-num">
                        <p class="counter">820</p>
                        <span class="counter-text">TOEIC</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--/ Section Portfolio Star /-->
<section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        My Experiences
                    </h3>
                    <p class="subtitle-a">
                        Company missions / school and personal projects
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="work-box">
                    <a href="./project-dsp.html">
                        <div class="work-img">
                            <img src="../img/portfolio/dsp.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Dassault Systèmes</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">UI-UX Designer / Dev.</span> / <span class="w-date">April-August 2020</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <span class="ion-ios-plus-outline"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-box">
                    <a href="./project-frap.html">
                        <div class="work-img">
                            <img src="../img/portfolio/frap.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">FRAP</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Product Owner</span> / <span class="w-date">Sep.-Dec. 2019</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <span class="ion-ios-plus-outline"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-box">
                    <a href="./project-hackathon.html">
                        <div class="work-img">
                            <img src="../img/portfolio/sncf.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Hackathon SNCF</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">UX Designer / Dev.</span> / <span class="w-date">21-22 Nov. 2019</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <span class="ion-ios-plus-outline"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-box">
                    <a href="./project-wyes.html">
                        <div class="work-img">
                            <img src="../img/portfolio/wyes.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Wyes</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">UI-UX Designer / Dev. </span> / <span class="w-date">Sep. 2018</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <span class="ion-ios-plus-outline"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-box">
                    <a href="./project-designThining.html">
                        <div class="work-img">
                            <img src="../img/portfolio/dt.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Design Thinking</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">School project</span> / <span class="w-date"> Sept 2019</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <span class="ion-ios-plus-outline"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="work-box">
                    <a href="./project-informatiqueEmbarqué.html">
                        <div class="work-img">
                            <img src="../img/portfolio/iot.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">IOT</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Dev.</span> / <span class="w-date">2018 - 2020</span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="w-like">
                                        <span class="ion-ios-plus-outline"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!--/ Section Portfolio End /-->

<!--/ Section Testimonials Star /-->

<div class="testimonials paralax-mf bg-image" style="background-image: url(../img/overlay-bg-3.JPG)">

    <div class="overlay-mf"></div>

    <div class="container" id="mon-parcours">
        <section class="timeline_css" >



            <div>
                <section class="timeline"  style="height: 100%">
                    <h3 class="title-a" style="justify-content: center; text-align: center; color: rgba(255, 255, 255, 0.8)">Education</h3>
                    <ul>

                        <li>
                            <div>
                                <a title="More infos on the master" href="https://www.supdepub.com/niveaux-detudes/formation-master-2/sp5-ux-management-design-thinking/" target="_blank">
                                    <time>April 2021</time>
                                </a>
                                <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                                    <p>Beginning of a double degree in UX Management and Experiential Strategy</p>
                                    <img src="../img/sup_de_pub.png" style="width: 50%;" alt="">
                                </article>
                            </div>
                        </li>

                        <li>
                            <div>
                                <a title="More infos on the major OCRES" href="https://www.ece.fr/ecole-ingenieur/cursus/specialisations/majeures/objets-connectes-reseaux-et-services/" target="_blank">
                                    <time>Sept 2019</time>
                                </a>
                                <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                                    <p>Master's degree at ECE in the major Connected Objects, Networks and Services.</p>
                                    <img src="../img/logo_ocres.png" style="width: 40%; height: 20%" alt="">
                                </article>


                            </div>
                        </li>

                        <li>
                            <div>
                                <a title="More infos on Malmö Universitet" href="https://mau.se/en/" target="_blank">
                                    <time>Aug 2018</time>
                                </a>
                                <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                                    <p>Departure for a semester at the University of Malmö in Sweden in computer science.</p>
                                    <img src="../img/malmo.png" style="width: 25%" alt="">
                                </article>
                            </div>
                        </li>

                        <li>
                            <div>
                                <a title="More d'informations sur l'ECE" href="https://www.ece.fr/ecole-ingenieur/" target="_blank">
                                    <time>Aug 2017</time>
                                </a>
                                <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                                    <p>Move from EPFL to ECE Paris.</p>
                                    <img src="../img/logo_ece.png" style="width: 50%" alt="">
                                </article>
                            </div>
                        </li>

                        <li>
                            <div>
                                <a title="More infos about Microengineering" href="https://www.epfl.ch/education/bachelor/fr/programmes/microtechnique/" target="_blank">
                                    <time>Sept 2015</time>
                                </a>
                                <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                                    <p>Entrance to EPFL in the Microengineering section.</p>
                                    <img src="../img/EPFL_Logo_2019.png" style="width: 30%" alt="">
                                </article>
                            </div>
                        </li>

                        <li>
                            <div>
                                <a title="You don't need me to explain to you again what the baccalaureate is?" target="_blank">
                                    <time>June 2015</time>
                                </a>
                                <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                                    <p>Obtained the Baccalaureate S, with honours.</p>
                                    <img src="../img/logo_bac.png" style="width: 30%;" alt="">
                                </article>
                            </div>
                        </li>

                    </ul>
                </section>

            </div>

        </section>
    </div>
</div>

<!--/ Section Blog Star /-->
<section id="blog" class="blog-mf sect-pt4 route">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        Hobbies
                    </h3>
                    <p class="subtitle-a">
                        Associative, sporting and artistic activities.
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>

        <div class="container text-center my-3">

            <div class="row mx-auto my-auto">
                <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">

                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-blog">
                                    <div class="card-img">
                                        <a  target="_blank"><img src="../img/sat.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-category-box">
                                            <div class="card-category">
                                                <h6 class="category">Associative</h6>
                                            </div>
                                        </div>
                                        <h3 class="card-title">Satellite</h3>
                                        <p class="card-description">
                                            Bar / concert hall / café-theater / organizer of her own festival. Satellite
                                            is a place meeting where I could discover the love of zythology, as well as
                                            the notions of communication through the position of media and communication
                                            manager for a few months.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item active">
                            <div class="col-md-4">
                                <div class="card card-blog">
                                    <button type="button" class="invisibleBtn" data-toggle="modal" data-target="#jbtvModal">
                                        <div class="card-img">
                                            <a target="_blank"><img src="../img/jbtv.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-category-box">
                                                <div class="card-category">
                                                    <h6 class="category">Associative</h6>
                                                </div>
                                            </div>
                                            <h3 class="card-title">JBTV</h3>
                                            <p class="card-description">
                                                Through my roles as a member and treasurer of the ECE Paris Photography/
                                                Video Association, I have acquired various organizational and management
                                                skills, as well as technical and business knowledge. In these fields
                                                through the realization of various projects.
                                            </p>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-blog">
                                    <button type="button" class="invisibleBtn" data-toggle="modal" data-target="#designModal">
                                        <div class="card-img">
                                            <a target="_blank"><img src="../img/design.jpg" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-category-box">
                                                <div class="card-category">
                                                    <h6 class="category">Hobby</h6>
                                                </div>
                                            </div>
                                            <h3 class="card-title">Graphic Design</h3>
                                            <p class="card-description">
                                                From time to time, I like to redesign logos, to work on animations or
                                                just be interested in the latest trends in desgin software and in
                                                the evolution of their integration.
                                            </p>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-blog">
                                    <div class="card-img">
                                        <a target="_blank"><img src="../img/long1.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-category-box">
                                            <div class="card-category">
                                                <h6 class="category">Hobby</h6>
                                            </div>
                                        </div>
                                        <h3 class="card-title">Longboarding</h3>
                                        <p class="card-description">
                                            Between means of locomotion and artistic sport with longboard dancing,
                                            you will rarely see me without my trusty skateboard, which allows
                                            as much to let off steam as to arrive on time.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-blog">
                                    <div class="card-img">
                                        <a  target="_blank"><img src="../img/esn.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-category-box">
                                            <div class="card-category">
                                                <h6 class="category">Associative</h6>
                                            </div>
                                        </div>
                                        <h3 class="card-title">Erasmus Student Network</h3>
                                        <p class="card-description">
                                            After discovering ESN during my stay in Sweden, I wanted to help,
                                            in my turn, international students in Paris to discover the culture of the city.
                                            French. So I volunteered for this association by helping to
                                            the organization of cultural and convivial events.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                        <img src="../img/arrow-left.png" aria-hidden="true" style="width: 10%; margin-right: 106%" alt="">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                        <img src="../img/arrow-right.png" aria-hidden="true" style="width: 10%; margin-left: 106%" alt="">
                        <!--<span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>-->
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>


<!-- Hobbies Modals  -->

<!-- JBTV-->
<div class="modal fade bd-example-modal-xl" id="jbtvModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">JBTV</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-justify flex">
                <div>
                    I launched into photography a little by chance, the future president had come to see me to propose to me
                    a position on the executive committee of the association. Coming back from Erasmus, I had just taken a lot of
                    photos that made me feel something new, a desire to remember and share that I had never seen before.
                    had never had before (speaking of photography). So I saw a great opportunity to discover
                    this environment and, what's more, to the position of treasurer.</div><br/>
                <div>
                    Through these two complementary aspects, I have developed my rigor in the work by a meticulous organization.
                    I was also able to understand the basics of digital and silver photography without forgetting the different
                    retouching possibilities under Lightroom or Photoshop. In the same desire of discovery, I also
                    interested in the video. As much on the direction as on the post-production which leaves a very great flexibility.
                    to sublimate images through editing, music selection or color retouching.</div><br/>
                <div>
                    Here is a small selection of my shots as well as one of the video projects I participated in.
                </div><br>
                <div class="flex-row">
                    <img src="../img/modals-asso/jb1.jpg" alt="" class="img-fluid">
                    <img src="../img/modals-asso/jb2.jpg" alt="" class="img-fluid">
                </div>
                <video controls width="100%">
                    <source src="../img/modals-asso/teaser1.4.mp4"
                            type="video/mp4">
                    Sorry, your browser doesn't support embedded videos.
                </video>
            </div>
        </div>
    </div>
</div>

<!-- Graphic design  -->
<div class="modal fade bd-example-modal-xl" id="designModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Graphic design</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body flex">
                <iframe
                        style="border: 1px solid rgba(0, 0, 0, 0.1);"
                        width="100%"  height="500"
                        src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Ffile%2FLR7hW60ABtO3afVE8afa6x%2Fportoflio-victor-aymard%3Fnode-id%3D272%253A37"
                        allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</div>

<!--/ Section Blog End /-->


<!--/ Section Contact-Footer Star /-->
<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(../img/overlay-bg-1.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        Please disturb
                                    </h5>
                                </div>
                                <div>
                                    <form action="_mail.php" method="post" role="form" class="contactForm">
                                        <div id="sendmessage">Your message has been sent. Thank you very much!</div>
                                        <div id="errormessage"></div>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your email" data-rule="email" data-msg="Please enter a valid email" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Your message"></textarea>
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="button button-a button-big button-rouded">Send it!</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="title-box-2 pt-4 pt-md-0">
                                    <h5 class="title-left">
                                        To stay in touch
                                    </h5>
                                </div>
                                <div class="more-info">
                                    <p class="lead">
                                        If you want to contact me, please fill in the form opposite.
                                        I would be happy to answer you :)
                                    </p>
                                    <ul class="list-ico">
                                        <li><span class="ion-ios-location"></span> 101 rue Balard, 75015 Paris</li>
                                        <li><span class="ion-ios-telephone"></span> +33 6 40 46 32 49</li>
                                        <li><span class="ion-email"></span> <a href="mailto:victor.aymard@edu.ece.fr?subject=Are you looking for an internship?&body=Hello Victor, you don't know me, but I have a feeling we're going to get along very well!" target="_blank">victor.aymard@edu.ece.fr</a></li>
                                    </ul>
                                </div>
                                <div class="socials">
                                    <ul>
                                        <li><a href="https://www.linkedin.com/in/victor-aymard-324b75150/" target="_blank"><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a></li>
                                        <li><a href="https://github.com/victoraymard" target="_blank"><span class="ico-circle"><i class="ion-social-github"></i></span></a></li>
                                        <li><a href="https://dribbble.com/bosetti" target="_blank"><span class="ico-circle"><i class="ion-social-dribbble"></i></span></a></li>
                                        <li><a href="https://www.figma.com/file/LR7hW60ABtO3afVE8afa6x/portoflio-victor-aymard?node-id=0%3A1" target="_blank"><span class="ico-circle"><i class="ion-social-figma0"></i></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="copyright-box">
                        <div class="credits">
                            <!--
                              All the links in the footer should remain intact.
                              You can delete the links only if you purchased the pro version.
                              Licensing information: https://bootstrapmade.com/license/
                              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                            -->
                            Inspired by DevFolio, designed by myself.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
<!--/ Section Contact-footer End /-->

<a href="./cv%20Victor%20Aymard.pdf" download class="back-to-top-bis "><p>My Curriculum</p><i class="fa fa-download"></i> </a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/jquery/jquery-migrate.min.js"></script>
<script src="../lib/popper/popper.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/counterup/jquery.waypoints.min.js"></script>
<script src="../lib/counterup/jquery.counterup.js"></script>
<script src="../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../lib/lightbox/js/lightbox.min.js"></script>
<script src="../lib/typed/typed.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="../contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="../js/main.js"></script>

<!-- Timeline Javascript File -->
<script src="../js/timeline.js"></script>
<!-- Carousel -->
<script type="text/javascript" src="../js/carousel.js"></script>


</body>
</html>
