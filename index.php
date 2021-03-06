<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); header('Content-type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html lang="fr">






<!--
    Non mais oh! ça ne se fait pas de regarder les gens tous nu comme ça, fermez cette page et remettez moi mon CSS tout
    de suite !
-->









<head>
    <meta charset="utf-8">
    <title>CV Victor Aymard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon-m.png" rel="icon">
    <!--<link href="img/apple-touch-icon.png" rel="apple-touch-icon">-->

    <!-- caroussel -->
    <script src="js/carousel.js"></script>

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet"> <!--carousel 2.0 pour les hobbies-->

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Timeline Stylesheet File -->
    <link href="css/timeline.css" rel="stylesheet">

</head>

<body id="page-top">

<!--/ Nav Star /-->
<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll" href="#page-top">Mon e-CV</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
                aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#about">à propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#service">Mes connaissances</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#work">Mes Expériences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#mon-parcours">Mon Parcours</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#blog">Hobbies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll" href="#contact">Contact</a>
                </li>
                <li class="nav-item" style="margin-top: 5px">
                    <a href="en/index.php" >
                        <img src="img/fr.png" style="max-height: 25px" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--/ Nav End /-->

<!--/ Intro Skew Star /-->
<div id="home" class="intro route bg-image" style="background-image: url(img/intro-bg.png)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
        <div class="table-cell">
            <div class="container">
                <!--<p class="display-6 color-d">Hello, world!</p>-->
                <h1 class="intro-title mb-4">Victor Aymard</h1>
                <p class="intro-subtitle"><span class="text-slider-items">Etudiant en ingénierie,<B>En recherche d'alternance</B>,Développeur web,UX Designer,Photographe,Vidéaste</span><strong class="text-slider"></strong></p>
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
                                        <img src="img/enBref/enBrefPict.png" class="img-fluid b-shadow-a" alt="" style="border-radius: 20px;">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-7">
                                    <div class="about-info">
                                        <p><span class="title-s">Nom: </span> <span>Victor Aymard</span></p>
                                        <p><span class="title-s">Profil: </span> <span>Etudiant ingénieur en master</span></p>
                                        <p><span class="title-s">Email: </span> <span><a href="mailto:victor.aymard@edu.ece.fr?subject=Tu cherches un stage?&body=Bonjour Victor, vous ne me connaissez pas, mais je sens que nous allons bien nous entendre!" target="_blank">victor.aymard@edu.ece.fr</a></span></p>
                                        <p><span class="title-s">Téléphone: </span> <span>+33 6 40 46 32 49</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="skill-mf">
                                <p class="title-s">Connaissances</p>


                                <span>UI/UX design</span> <span class="pull-right"></span>
                                <div class="containerok">
                                    <div class="progress-movedok">
                                        <div class="progress-bar1 " role="progressbar" style="width: 75%; border-radius:5px;" aria-valuenow="75" aria-valuemin="0"
                                             aria-valuemax="100" ></div>
                                    </div>
                                </div>

                                <span>Programmation web</span> <span class="pull-right"></span>
                                <div class="containerok">
                                    <div class="progress-movedok">
                                        <div class="progress-bar2 " role="progressbar" style="width: 85%; border-radius:5px;" aria-valuenow="85" aria-valuemin="0"
                                             aria-valuemax="100" ></div>
                                    </div>
                                </div>

                                <span>Programmation Orientée Objet</span> <span class="pull-right"></span>
                                <div class="containerok">
                                    <div class="progress-movedok">
                                        <div class="progress-bar3" role="progressbar" style="width: 70%;border-radius:5px;" aria-valuenow="70" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>

                                <span>Travail en équipe</span> <span class="pull-right"></span>
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
                                        En bref
                                    </h5>
                                </div>
                                <p class="lead">
                                    Je recherche <strong id="rechercheDeStage">une alternance de 12 mois à partir d’avril 2021 </strong>
                                    pour approfondir mes connaissances dans l’UI / UX design.
                                </p>
                                <p class="lead">
                                    Actuellement en dernière année au sein de l’Ecole Centrale d’Electronique (ECE) de
                                    Paris. J'y ai choisi la majeure "Objets Connectés Réseaux et Services". Au travers de celle-ci, j'ai
                                    pu me perfectionner en développement informatique, ainsi qu'acquérir de nombreuses connaissances utiles via
                                    des cours de gamification, de design thinking, et de gestion de projet.
                                </p>
                                <p class="lead">
                                    Dès Avril prochain, je compte commencer un double diplôme en UX management et stratégie expérientielle afin
                                    de mieux comprendre ce monde qui fait la jonction entre design et ingénieurie. Permettant alors de
                                    réduire le temps de release de produits software mais pas uniquement.
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
                        Mes connaissances
                    </h3>
                    <p class="subtitle-a">
                        Compétences techniques, artistiques et sociales
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
                        <h2 class="s-title">Développement Web</h2>
                        <p class="s-description text-center">
                            Je maîtrise les langages HTML, CSS, JS, ainsi que l'intégration de briques bootstaps (comme l'illustre
                            cet e-CV). Je sais également aborder une approche fullstack JS (React, Node, Express), ainsi que mettre
                            en place une solution d'hébergement, pour mener des projets sous tous leurs aspects.
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
                        <h2 class="s-title">Développement informatique</h2>
                        <p class="s-description text-center">
                            J'ai pu acquérir une très bonne compréhension du code informatique (C, C++, Java) ainsi que la logique
                            algorithmique par mes cours (théorie des graphs) ou par moi-même, via OpenClassroom.
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
                        <h2 class="s-title">Photographie</h2>
                        <p class="s-description text-center">
                            Par mon rôle important au sein de l'association de photographie de l'ECE Paris, j'ai pu me familiariser
                            avec l'art de la photo et de la vidéo, ainsi qu'avec les logiciels de la suite Adobe (Lightroom,
                            Première, Photoshop) par de nombreux projets.
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
                        <h2 class="s-title">Pédagogie</h2>
                        <p class="s-description text-center">
                            Étant actuellement assistant sur le projet annuel des premières années de l'ECE Paris, j'aime
                            transmettre mes connaissances et aider les plus jeunes dans leur apprentissage. J'ai également donné des
                            cours particuliers auparavant.
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
                        <h2 class="s-title">Design Graphique</h2>
                        <p class="s-description text-center">
                            Très soucieux de l'aspect graphique de mes projets, j'aime m'appliquer à faire des belles maquettes
                            avant de m'occuper de la partie frontend de ceux-ci pour améliorer l'UI (interface utilisateur) et
                            rendre l'UX (expérience utilisateur) optimale.
                        </p>
                        <iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="800" height="450" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Ffile%2FLR7hW60ABtO3afVE8afa6x%2Fportoflio-victor-aymard%3Fnode-id%3D0%253A1" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="service-box">
                    <div class="service-ico">
                        <span class="ico-circle"><i class="ion-android-contact"></i></span>
                    </div>
                    <div class="service-content">
                        <h2 class="s-title">Ouverture d'esprit</h2>
                        <p class="s-description text-center">
                            Je pense être quelqu'un d'empathique qui sache écouter mes différents interlocuteurs pour m'adapter au
                            mieux aux différentes situations. De ce fait, je peux fournir des contenus adéquats, autant dans le fond
                            que dans la forme.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Section Services End /-->

<div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg-3.jpg)">
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
                        <span class="counter-text">MOIS D'ALTERNANCE RECHERCHÉES</span>
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
                        <span class="counter-text">QI</span>
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
                        <span class="counter-text">NOMBRE DE BLAGUES PAR JOUR</span>
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
                        Mes Expériences
                    </h3>
                    <!--TODO: ouvrir l'image avec un texte explicatif du projet
                      TODO: permettre plusieurs images par projet (faire en sorte de ne pas pouvoir switcher aussi facilement entre les projets ?)-->
                    <p class="subtitle-a">
                        Missions en entreprise / projets scolaires et personnels
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
                            <img src="img/portfolio/dsp.png" alt="" class="img-fluid">
                        </div>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Dassault Systèmes</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">UI-UX Designer / Dev</span> / <span class="w-date">Avril-Aout 2020</span>
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
                            <img src="img/portfolio/frap.png" alt="" class="img-fluid">
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
                            <img src="img/portfolio/sncf.png" alt="" class="img-fluid">
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
                            <img src="img/portfolio/wyes.png" alt="" class="img-fluid">
                        </div>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Wyes</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">UI-UX Design / Dev. </span> / <span class="w-date">Sep. 2018</span>
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
                            <img src="img/portfolio/dt.png" alt="" class="img-fluid">
                        </div>
                        <div class="work-content">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2 class="w-title">Design Thinking</h2>
                                    <div class="w-more">
                                        <span class="w-ctegory">Projet scolaire</span> / <span class="w-date"> Sept 2019</span>
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
                            <img src="img/portfolio/iot.png" alt="" class="img-fluid">
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

<div class="testimonials paralax-mf bg-image" style="background-image: url(img/overlay-bg-3.JPG)">

    <div class="overlay-mf"></div>

    <div class="container" id="mon-parcours">
        <section class="timeline_css" >



            <div>
                <section class="timeline"  style="height: 100%">
                    <h3 class="title-a" style="justify-content: center; text-align: center; color: rgba(255, 255, 255, 0.8)">Mon Parcours</h3>
                    <ul>

                        <li>
                            <div>
                                <a title="Plus d'infos sur le master" href="https://www.supdepub.com/niveaux-detudes/formation-master-2/sp5-ux-management-design-thinking/" target="_blank">
                                    <time>Avril 2021</time>
                                </a>
                                <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                                    <p>Début d'un double diplôme en alternance en UX management & stratégie expérientielle.</p>
                                    <img src="img/sup_de_pub.png" style="width: 50%;" alt="">
                                </article>
                            </div>
                        </li>

                        <li>
                            <div>
                                <a title="Plus d'infos sur la majeure OCRES" href="https://www.ece.fr/ecole-ingenieur/cursus/specialisations/majeures/objets-connectes-reseaux-et-services/" target="_blank">
                                    <time>Septembre 2019</time>
                                </a>
                                <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                                    <p>Master à l'ECE au sein de la majeure Objets Connectés, Réseaux Et Services.</p>
                                    <img src="img/logo_ocres.png" style="width: 40%; height: 20%" alt="">
                                </article>


                            </div>
                        </li>

                        <li>
                            <div>
                                <a title="Plus d'infos sur Malmö Universitet" href="https://mau.se/en/" target="_blank">
                                    <time>Aout 2018</time>
                                </a>
                                <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                                    <p>Départ pour un semestre à l'univesité de Malmö en Suède en computer science.</p>
                                    <img src="img/malmo.png" style="width: 25%;" alt="">
                                </article>
                            </div>
                        </li>

                        <li>
                            <div>
                                <a title="Plus d'informations sur l'ECE" href="https://www.ece.fr/ecole-ingenieur/" target="_blank">
                                    <time>Aout 2017</time>
                                </a>
                                <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                                    <p>Passerelle entre l'EPFL et l'ECE Paris.</p>
                                    <img src="img/logo_ece.png" style="width: 50%" alt="">
                                </article>
                            </div>
                        </li>

                        <li>
                            <div>
                                <a title="Plus d'informations sur la microtechnique" href="https://www.epfl.ch/education/bachelor/fr/programmes/microtechnique/" target="_blank">
                                    <time>Septembre 2015</time>
                                </a>
                                <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                                    <p>Entrée à l'EPFL en section Microtechnique.</p>
                                    <img src="img/EPFL_Logo_2019.png" style="width: 30%" alt="">
                                </article>
                            </div>
                        </li>

                        <li>
                            <div>
                                <a title="Vous n'avez quand même pas besoin que je vous ré-explique ce qu'est le bac?" target="_blank">
                                    <time>Juin 2015</time>
                                </a>
                                <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                                    <p>Obtention du Baccalauréat S, mention très bien.</p>
                                    <img src="img/logo_bac.png" style="width: 30%;" alt="">
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
                        Activités associatives, sportives et artistiques.
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
                                        <a  target="_blank"><img src="img/sat.png" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-category-box">
                                            <div class="card-category">
                                                <h6 class="category">Associatif</h6>
                                            </div>
                                        </div>
                                        <h3 class="card-title">Satellite</h3>
                                        <p class="card-description">
                                            Bar / salle de concerts / de cafés-théatres / organisatrice de son propre festival. Satellite est un lieu
                                            de rencontre où j'ai pu découvrir l'amour de la zythologie, ainsi que des notions de communication par
                                            le poste de responsable média et communication durant quelques mois.
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
                                            <a target="_blank"><img src="img/jbtv.PNG" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-category-box">
                                                <div class="card-category">
                                                    <h6 class="category">Associatif</h6>
                                                </div>
                                            </div>
                                            <h3 class="card-title">JBTV</h3>
                                            <p class="card-description">
                                                Par mes rôles de membre et de trésorier au sein de l'association de photographie / vidéo de l'ECE Paris,
                                                j'ai acquis diverses aptitudes d'organisation, de gestion, ainsi que des connaissances techniques et
                                                artistiques dans ces domaines par la réalisation de différents projets.
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
                                            <a target="_blank"><img src="img/design.png" alt="" class="img-fluid"></a>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-category-box">
                                                <div class="card-category">
                                                    <h6 class="category">Hobbie</h6>
                                                </div>
                                            </div>
                                            <h3 class="card-title">Design graphique</h3>
                                            <p class="card-description">
                                                De temps à autre, j'aime redesigner des logos, travailler des animations ou juste m'intéresser
                                                aux dernières tendances de desgin software et à l'évolution de leur intégration.
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
                                        <a target="_blank"><img src="img/long1.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-category-box">
                                            <div class="card-category">
                                                <h6 class="category">Hobbie</h6>
                                            </div>
                                        </div>
                                        <h3 class="card-title">Longboarding</h3>
                                        <p class="card-description">
                                            Entre moyen de locomotion et sport artistique avec le longboard dancing, vous me verrez rarement sans
                                            ma fidèle planche à roulette, qui permet autant de me défouler, que d'arriver à l'heure.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="col-md-4">
                                <div class="card card-blog">
                                    <div class="card-img">
                                        <a  target="_blank"><img src="img/esn.jpg" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-category-box">
                                            <div class="card-category">
                                                <h6 class="category">Associatif</h6>
                                            </div>
                                        </div>
                                        <h3 class="card-title">Erasmus Student Network</h3>
                                        <p class="card-description">
                                            Après avoir découvert ESN lors de mon séjour en Suède, j'ai eu envie d'aider, à mon tour,les étudiants
                                            internationaux  parisiens à découvrir la culture française. J'ai donc été bénévole de cette association
                                            en aidant à l'organisation d'évènements culturels et convivaux.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                        <img src="img/arrow-left.png" aria-hidden="true" style="width: 10%; margin-right: 106%" alt="">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                        <img src="img/arrow-right.png" aria-hidden="true" style="width: 10%; margin-left: 106%" alt="">
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
                    Je me suis lancé dans la photographie un peu par hasard, le futur président était venu me voir pour me proposer
                    un poste au sein du comité de direction de l’association. Revenant d’Erasmus, j’avais justement pris beaucoup de
                    photos qui faisaient vibrer en moi quelque chose de nouveau, une envie de se souvenir et de partager que je
                    n’avais jamais eu auparavant (en parlant de photographie). J’ai donc vu une formidable opportunité de découvrir
                    ce milieu et qui plus est, au poste de trésorier.</div><br/>
                <div>
                    Par ces deux aspects complémentaires, j’ai développé ma rigueur dans le travail par une organisation minutieuse.
                    J’ai également pu comprendre les bases de la photographie numérique et argentique sans oublier les différentes
                    possibilités de retouches sous Lightroom ou Photoshop. Dans la même envie de découverte, je me suis également
                    intéressé à la vidéo. Autant sur la réalisation que la post-production qui laisse une très grande flexibilité
                    pour sublimer les images par le montage, le choix de la musique ou les retouches colorimétriques.</div><br/>
                <div>
                    Voici donc une petite sélection de mes clichés ainsi que l’un des projets vidéo auxquels j’ai participé.
                </div><br>
                <div class="flex-row">
                    <img src="img/modals-asso/jb1.jpg" alt="" class="img-fluid">
                    <img src="img/modals-asso/jb2.jpg" alt="" class="img-fluid">
                </div>
                <video controls width="100%">
                    <source src="img/modals-asso/teaser1.4.mp4"
                            type="video/mp4">
                    Sorry, your browser doesn't support embedded videos.
                </video>
            </div>
        </div>
    </div>
</div>



<!-- Design graphique -->
<div class="modal fade bd-example-modal-xl" id="designModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Desgin graphique</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body flex">
                <iframe
                        style="border: 1px solid rgba(0, 0, 0, 0.1);"
                        width="100%"  height="500"
                        src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Ffile%2FLR7hW60ABtO3afVE8afa6x%2Fportoflio-victor-aymard%3Fnode-id%3D0%253A1"
                        allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>
</div>

<!--/ Section Blog End /-->


<!--/ Section Contact-Footer Star /-->
<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg-1.jpg)">
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
                                        Prière de déranger
                                    </h5>
                                </div>
                                <div>
                                    <form action="_mail.php" method="post" role="form" class="contactForm">
                                        <div id="sendmessage">Votre message a bien été envoyé. Merci Beaucoup !</div>
                                        <div id="errormessage"></div>
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" data-rule="email" data-msg="Please enter a valid email" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <textarea class="form-control" name="message" id="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Votre message"></textarea>
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" class="button button-a button-big button-rouded">Envoyez-le!</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="title-box-2 pt-4 pt-md-0">
                                    <h5 class="title-left">
                                        Pour rester en contact
                                    </h5>
                                </div>
                                <div class="more-info">
                                    <p class="lead">
                                        Si l'envie de me contacter vous prend, n'hésitez pas à remplir le formulaire ci-contre. Je me
                                        ferais une joie de vous répondre :)
                                    </p>
                                    <ul class="list-ico">
                                        <li><span class="ion-ios-location"></span> 101 rue Balard, 75015 Paris</li>
                                        <li><span class="ion-ios-telephone"></span> +33 6 40 46 32 49</li>
                                        <li><span class="ion-email"></span> <a href="mailto:victor.aymard@edu.ece.fr?subject=Tu cherches un stage?&body=Bonjour Victor, vous ne me connaissez pas, mais je sens que nous allons bien nous entendre!" target="_blank">victor.aymard@edu.ece.fr</a></li>
                                    </ul>
                                </div>
                                <div class="socials">
                                    <ul>
                                        <li><a href="https://www.linkedin.com/in/victor-aymard-324b75150/" target="_blank"><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a></li>
                                        <li><a href="https://github.com/victoraymard" target="_blank"><span class="ico-circle"><i class="ion-social-github"></i></span></a></li>
                                        <li><a href="https://dribbble.com/bosetti" target="_blank"><span class="ico-circle"><i class="ion-social-dribbble"></i></span></a></li>
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

<a href="./cv%20Victor%20Aymard.pdf" download class="back-to-top-bis "><p>Mon CV</p><i class="fa fa-download"></i> </a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/popper/popper.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/counterup/jquery.waypoints.min.js"></script>
<script src="lib/counterup/jquery.counterup.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/typed/typed.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>

<!-- Timeline Javascript File -->
<script src="js/timeline.js"></script>
<!-- Carousel -->
<script type="text/javascript" src="js/carousel.js"></script>


</body>
</html>

