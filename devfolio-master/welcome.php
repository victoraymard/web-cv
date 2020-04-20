<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); header('Content-type: text/html; charset=utf-8');?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CV Victor Aymard</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
<!-- TODO expérience et hobies
  TODO pour les chifres : 22ans / 3langues... -->
  <!-- Favicons -->
  <link href="img/favicon-m.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- caroussel -->
  <link href="css/Caroussel.css" rel="stylesheet">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="js/caroussel.js"></script>

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Timeline Stylesheet File -->
  <link href="css/timeline.css" rel="stylesheet">


  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
    ======================================================= -->
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
            <a class="nav-link js-scroll active" href="#home">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Mes connaissances</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Mes Expériences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog">Hobbies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
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
          <p class="intro-subtitle"><span class="text-slider-items">Etudiant en ingénierie,<B>En recherche de stage</B>,Développeur web,Assistant de projet,Trésorier d'une association,Photographe,Vidéaste,Barman</span><strong class="text-slider"></strong></p>
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
                      <img src="img/linkedinPicture.jpg" class="img-fluid b-shadow-a" alt="" style="border-radius: 20px;">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Nom: </span> <span>Victor Aymard</span></p>
                      <p><span class="title-s">Profile: </span> <span>Etudiant ingénieur en master</span></p>
                      <p><span class="title-s">Email: </span> <span><a href="mailto:victor.aymard@edu.ece.fr?subject=Tu cherches un stage?&body=Bonjour Victor, vous ne me connaissez pas, mais je sens que nous allons bien nous entendre!">victor.aymard@edu.ece.fr</a></span></p>
                      <p><span class="title-s">Téléphone: </span> <span>+33 6 40 46 32 49</span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Connaissances</p>


                  <span>Pack Office</span> <span class="pull-right">75%</span>
                  <!--<div id="progress_bar1"></div> TODO gérer les progress bar en animation / enlever le pouscentage ?-->
                  <div class="containerok">
                    <div class="progress-movedok">
                      <div class="progress-bar1 " role="progressbar" style="width: 75%; border-radius:5px;" aria-valuenow="75" aria-valuemin="0"
                      aria-valuemax="100" ></div>
                    </div>
                  </div>

                  <span>Programmation web</span> <span class="pull-right">85%</span>
                  <div class="containerok">
                    <div class="progress-movedok">
                      <div class="progress-bar2 " role="progressbar" style="width: 85%; border-radius:5px;" aria-valuenow="85" aria-valuemin="0"
                      aria-valuemax="100" ></div>
                    </div>
                  </div>

                  <span>Programmation Orientée Objet</span> <span class="pull-right">70%</span>
                  <div class="containerok">
                    <div class="progress-movedok">
                      <div class="progress-bar3" role="progressbar" style="width: 70%;border-radius:5px;" aria-valuenow="70" aria-valuemin="0"
                      aria-valuemax="100"></div>
                    </div>
                  </div>

                  <span>Electronique embarqueé</span> <span class="pull-right">60%</span>
                  <div class="containerok">
                    <div class="progress-movedok">
                      <div class="progress-bar4" role="progressbar" style="width: 60%;border-radius:5px;" aria-valuenow="60" aria-valuemin="0"
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
                    Je recherche <strong id="rechercheDeStage">un stage de 4 mois d'avril à août 2020</strong> 
                    dans lequel j'aimerais bien perfectionner mes compétenses en UI/UX design. Mais je reste ouvert à 
                    toute discussion.
                  </p>
                  <p class="lead">
                    Actuellement en quatrième année au sein de l'Ecole Centrale d'Electronique de Paris, j'ai décidé de
                    suivre la majeure Objets Connectés Réseaux et Services. Au travers de celle-ci, j'ai pu me
                    perfectionner ne développement web, ainsi qu'aquérir de nombreuses connaissances utiles via des
                    cours de gamification, de design thinking, et de gestion de projet.
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
              Compétences techniques, artistiques, et sociales
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
              <h2 class="s-title">Developpement Web</h2>
              <p class="s-description text-center">
                Je maîtrise les langages HTML, CSS, JS, ainsi que l'intégration de briques bootstaps (comme l'illustre cet e-CV). Je sais également aborder une approche fullstack JS (React, Node, Express) pour mener des projets sous tous leurs aspects.
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
                Par mes nombreux cours (C, C++, Java), j'ai pu aquérir une très bonne compréhension du code informatique
                ainsi que la logique algorithmique par mes cours (théorie des graphs) ou par moi même, via OpenClassroom.
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
                avec l'art de la photo et de la vidéo, ainsi qu'avec les logiciels de la suite Adobe (Lightroo,
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
                Etant actuellement assistant sur le projet annuel des premières années de l'ECE Paris, j'aime aider les
                plus jeunes à comprendre et transmettre mes connaissance. J'ai également donné des cours particulier
                auparavant.
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
                Très soucieux de l'aspect graphique de mes projets, j'aime m'appliquer à faire des belles maquettes avant de m'occuper de la partie frontend de ceux-ci pour améliorer l'UI (interface utilisateur) et rendre l'UX (expérience utilisateur) optimale.
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
              <h2 class="s-title">Ouverture d'esprit</h2>
              <p class="s-description text-center">
                Je suis quelqu'un d'empathique qui sait s'adapter aux différentes situtions et adapter la forme de mes 
                propos à mon interlocuteur.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Services End /-->

  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg-1.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">16</p>
              <span class="counter-text">MOIS DE STAGE RECHERCHEES</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
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
              <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">635</p>
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
                Missions en entreprise / projets scoliares et personnels
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="work-box">
              <a href="img/portfolio/frap.png" data-lightbox="gallery-mf">
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
              <a href="img/portfolio/hack&bot.png" data-lightbox="gallery-mf">
                <div class="work-img">
                  <img src="img/portfolio/hack&bot.png" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title">Hackathon SNCF</h2>
                      <div class="w-more">
                        <span class="w-ctegory">UX designer / Dev.</span> / <span class="w-date">21-22 Nov. 2019</span>
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
                  <img src="img/portfolio/wyes_logo.png" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title">Wyes</h2>
                      <div class="w-more">
                        <span class="w-ctegory">UI-UX Design / Dev. mobile</span> / <span class="w-date">18 Sep. 2018</span>
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
              <a href="img/portfolio/amazonece.PNG" data-lightbox="gallery-mf">
                <div class="work-img">
                  <img src="img/portfolio/amazonece.PNG" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title">Amazon ECE</h2>
                      <div class="w-more">
                        <span class="w-ctegory">UI / Dev.Frontend</span> / <span class="w-date"> Mai 2018</span>
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
              <a href="img/portfolio/projet-malmo.PNG" data-lightbox="gallery-mf">
                <div class="work-img">
                  <img src="img/portfolio/projet-malmo.PNG" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title">Lampes connectées</h2>
                      <div class="w-more">
                        <span class="w-ctegory">Developement</span> / <span class="w-date">Sept.-Dec. 2018</span>
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
              <a href="img/portfolio/bapbap.png" data-lightbox="gallery-mf">
                <div class="work-img">
                  <img src="img/portfolio/bapbap.png" alt="" class="img-fluid">
                </div>
                <div class="work-content">
                  <div class="row">
                    <div class="col-sm-8">
                      <h2 class="w-title">Bapbap</h2>
                      <div class="w-more">
                        <span class="w-ctegory">Brasseur</span> / <span class="w-date">Jan.-Fev. 2018</span>
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

    <div class="testimonials paralax-mf bg-image" style="background-image: url(img/overlay-bg-2.jpg)">

    <div class="overlay-mf"></div>

      <div class="container" id="mon-parcours">
        <section class="timeline_css">



          <div>
            <section class="timeline">
              <h3 class="title-a" style="justify-content: center; text-align: center; color: rgba(255, 255, 255, 0.8)">Mon Parcours</h3>
              <ul>
                <li>
                  <div>
                    <a title="Plus d'infos sur OCRES" href="https://www.ece.fr/ecole-ingenieur/cursus/specialisations/majeures/objets-connectes-reseaux-et-services/" target="_blank">
                      <time>Aujourd'hui</time>
                    </a>
                    <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                      <p>En quatrième année à l'ECE au sein de la majeure Objets Connectés, Réseaux Et Services (et à la recherche d'un stage)</p>
                      <img src="img/ocres.PNG" style="width: 40%; height: 20%">
                    </article>


                  </div>
                </li>

                <li>
                  <div>
                    <a title="Plus d'infos sur Malmö Universitet" href="https://mau.se/en/" target="_blank">
                      <time>Aout 2018</time>
                    </a>
                    <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                      <p>Départ pour un semestre à l'univesité de Malmö en Suède en computer science</p>
                      <img src="img/malmo.png" style="width: 20%;">
                    </article>
                  </div>
                </li>

                <li>
                  <div>
                    <a title="Plus d'informations sur l'ECE" href="https://www.ece.fr/ecole-ingenieur/" target="_blank">
                      <time>Aout 2017</time>
                    </a>
                    <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                      <p>Passerelle entre l'EPFL et l'ECE Paris</p>
                      <img src="img/logo_ece.png" style="width: 50%">
                    </article>
                  </div>
                </li>

                <li>
                  <div>
                    <a title="Plus d'informations sur la microtechnique" href="https://www.epfl.ch/education/bachelor/fr/programmes/microtechnique/" target="_blank">
                      <time>Septembre 2015</time>
                    </a>
                    <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                      <p>Entrée à l'EPFL en section Microtechnique</p>
                      <img src="img/EPFL_Logo_2019.png" style="width: 25%">
                    </article>
                  </div>
                </li>

                <li>
                  <div>
                    <a title="Vous n'avez quand même pas besoin que je vous ré-explique ce qu'est le bac?" href="#" target="_blank">
                      <time>Juin 2015</time>
                    </a>
                    <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                      <p>Obtention du Baccalauréat, mention très bien</p>
                      <!--<img src="img/EPFL_Logo_2019.png" style="width: 25%">-->
                    </article>
                  </div>
                </li>

              </ul>
            </section>

          </div>

        <!--<div class="container" >

          <h4 class="text-center title-a" style="margin-bottom: 370px;" >Mon parcours</h4>
          <div class="timeline flex-container">

            <div class="timeline-item flex-items-default selected">
              <div class="timeline-content align-content-center animated bounceIn">
                <h2>Septembre 2015</h2>
                <p>Après l'obtention de mon Baccalauréat mention très bien, je décide de rentrer à l'EPFL en section
                  Microtechnique</p>
                 <img src="img/EPFL_Logo_2019.png" style="width: 80%">
              </div>
            </div>
            <div class="timeline-item flex-items-default">
              <div class="timeline-content align-content-center">
                <h2>Août 2017</h2>
                <p>Passerelle entre l'EPFL et l'ECE Paris</p>
                <img src="img/logo_ece.png" style="width: 100%">
              </div>
            </div>
            <div class="timeline-item flex-items-default">
              <div class="timeline-content align-content-center">
                <h2>Août 2018</h2>
                <p>Départ pour un semestre à l'univesité de Malmö en Suède en computer science</p>
                <img src="img/malmo.png" style="width: 37%;">
              </div>
            </div>
            <div class="timeline-item flex-items-default">
              <div class="timeline-content align-content-center">
                <h2>Aujourd'hui</h2>
                <p>En équivalent master 1 au sein de la majeur Objets Connectés, Réseaux Et Services (et à la recherche
                  d'un stage)</p>
                <img src="img/ocres.PNG" style="width: 100%">
              </div>
            </div>


            <div class="dropdown animated bounceIn" style="left: -88px;">
              <div class="inner">
                <div class="arrow-down"></div>
              </div>
            </div>

          </div>
        </div>-->
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
              Voilà un résumé de ce qui occupe mon temps libre, ou qui a pu l'occuper
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>






      <!--<div class="container">
        <div class="row">
          <div class="MultiCarousel" data-items="1,2,3,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
            <div class="MultiCarousel-inner">












              <div class="item">
                <div class="pad15">
                  <p class="lead">Multi Item Carousel</p>
                  <p>₹ 1</p>
                  <p>₹ 6000</p>
                  <p>50% off</p>
                </div>
              </div>



              <div class="item">
                <div class="pad15">
                  <p class="lead">Multi Item Carousel</p>
                  <p>₹ 1</p>
                  <p>₹ 6000</p>
                  <p>50% off</p>
                </div>
              </div><div class="item">
                <div class="pad15">
                  <p class="lead">Multi Item Carousel</p>
                  <p>₹ 1</p>
                  <p>₹ 6000</p>
                  <p>50% off</p>
                </div>
              </div><div class="item">
                <div class="pad15">
                  <p class="lead">Multi Item Carousel</p>
                  <p>₹ 1</p>
                  <p>₹ 6000</p>
                  <p>50% off</p>
                </div>
              </div><div class="item">
                <div class="pad15">
                  <p class="lead">Multi Item Carousel</p>
                  <p>₹ 1</p>
                  <p>₹ 6000</p>
                  <p>50% off</p>
                </div>
              </div>

            </div>
            <button class="btn btn-primary leftLst"><</button>
            <button class="btn btn-primary rightLst">></button>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <br/><br/><br/>
            <hr/>
            <p>Settings</p>
            <p>Change data items for xs,sm,md and lg display items respectively. Ex:data-items="1,3,5,6"</p>
            <p>Change data slide for slides per click Ex:data-slide="1"</p>
          </div>
        </div>
      </div>-->





      <div class="row">
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html" target="_blank"><img src="img/jbtv.PNG" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">JBTV</h6>
                </div>
              </div>
              <h3 class="card-title">Trésorier et membre</h3>
              <p class="card-description">
                Par ces rôles au sein de l'association de photo / vidéo de l'ECE Paris, j'ai acquis diverses aptitudes
                d'organisation, de gestion, ainsi que des connaissances techniques et artistiques dans ces domaines.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html" target="_blank"><img src="img/sat.png" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Satellite</h6>
                </div>
              </div>
              <h3 class="card-title">Membre</h3>
              <p class="card-description">
                Bar / salle de concerts / de cafés-théatres / organisateur de son propre festival. Satellite est un lieu
                de rencontre où j'ai pu découvrir l'amour de la zythologie, ainsi que des notions de communication par
                le poste de responsable médias et communication durant quelques mois.
              </p>
            </div>

          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html" target="_blank"><img src="img/esn.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Erasmus Student Network</h6>
                </div>
              </div>
              <h3 class="card-title">Membre</h3>
              <p class="card-description">
                Après avoir découvert ESN lors de mon séjour en Suède, j'ai eu envie d'aider les étudiants
                internationnaux parisiens à découvrir la culture française.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
                    Des questions ?
                  </h5>
                </div>
                <div>
                  <form action="mail.php" method="post" role="form" class="contactForm">
                    <div id="sendmessage">Votre message a bien été envoyé. Merci Beaucoup !</div>
                    <div id="errormessage"></div>
                    <div class="row">
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
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
                          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Votre message"></textarea>
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
                    Prière de déranger
                  </h5>
                </div>
                <div class="more-info">
                  <p class="lead">
                    Si l'envie de me contacter vous prend, n'hésitez pas à remplir le formulaire si contre. Je me
                    ferai une joie de vous répondre :)
                  </p>
                  <ul class="list-ico">
                    <li><span class="ion-ios-location"></span> 101 rue Balard, 75015 Paris</li>
                    <li><span class="ion-ios-telephone"></span> +33 6 40 46 32 49</li>
                    <li><span class="ion-email"></span> <a href="mailto:victor.aymard@edu.ece.fr?subject=Tu cherches un stage?&body=Bonjour Victor, vous ne me connaissez pas, mais je sens que nous allons bien nous entendre!">victor.aymard@edu.ece.fr</a></li>
                  </ul>
                </div>
                <div class="socials">
                  <ul>
                    <li><a href="https://www.linkedin.com/in/victor-aymard-324b75150/" target="_blank"><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a></li>
                    <li><a href="https://github.com/victoraymard" target="_blank"><span class="ico-circle"><i class="ion-social-github"></i></span></a></li>
                    <li><a href="https://www.instagram.com/jbtv_ece/?hl=fr" target="_blank"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
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
            <p class="copyright">&copy; Copyright <strong>DevFolio</strong>. All Rights Reserved</p>
            <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
                Designed by <!--<a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a> and Victor Aymard--> myself.
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <!--<a href="./cv.pdf" download class="back-to-top"> <p>Mon CV</p> <i class="fa fa-download"></i></a>-->
  <a href="./cv.pdf" download class="back-to-top-bis "><p>Mon CV</p><i class="fa fa-download"></i> </a>
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

</body>
</html>
