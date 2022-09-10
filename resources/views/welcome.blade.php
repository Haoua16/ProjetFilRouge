<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Singuai-Bana</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Vendor CSS Files -->
  <link href="{{asset('aos.css')}}" rel="stylesheet">
  <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="asset{{('bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="asset{{('boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="asset{{('glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="asset{{('remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="asset{{('swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.8.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center" style=" background-color:#0972A1">
          <h5 class="modal-title text-center text-white w-100 font-weight=bold" id="exampleModalLabel">Merci de vous connecter</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
          <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Email Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Mot de passe') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

          </div>

                    <div class="modal-footer"> 
                      

                      <label class="text-center" for="remember">
                         souvenir de Moi
                      </label>
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                      <button type="submit" class="btn text-white center" style="background-color:green">{{ __('Connexion') }}</button>
                        <div class="row mb-0">
                            <div class="col ">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
      </div>
    </div>
  </div>
  {{-- End Login --}}


  <div class="modal fade" id="insModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center" style=" background-color:#0972A1">
          <h5 class="modal-title text-center text-white w-100 font-weight=bold" id="exampleModalLabel">Inscrivez-vous s'il vous plaît</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
          <div class="modal-body">
                <form method="POST" action="{{ route('client.create') }}">
                    @csrf

                    <div class="form-outline mb-4">
                      <label class="form-label" for="nom">Nom</label>
                      <input type="text" id="nom" class="form-control" name="nom">
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="prenom">Prenom</label>
                      <input type="text" id="prenom" class="form-control" name="prenom">
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="telephone">Téléphone</label>
                      <input type="text" id="telephone" class="form-control" name="telephone">
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="adresse">Adresse</label>
                      <input type="text" id="adresse" class="form-control" name="adresse">
                    </div>

                    <div class="row mb-4">
                        <label for="email" class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Email Address') }}</label>

                        <div class="col-mb-4">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-6">
                        <label for="password" class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Mot de passe') }}</label>

                        <div class="col-md-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                        <div class="row mb-6">
                          <label for="password" class="col-md-4 col-form-label text-md-end fw-bold">{{ __('Confirme Mot de passe') }}</label>

                          <div class="col-md-3">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                        </div>

          </div>

              <div class="modal-footer">
              <!-- <button type="submit" class="btn text-white center" style="background-color:grenn">{{ __('Enregister') }}</button> -->
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
              </div>
                </form>
      </div>
    </div>
  </div>
  {{-- End Inscription --}}





<!-- <div class="modal fade" id="confModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Inscrivez-vous s'il vous plaît</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body"> 
                <form action="" enctype="multipart/form-data" method="POST">
                  @csrf
                  <input type="text" id="id" name="id_demandesci">
                    
                  {{-- <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1q">Nom</label>
                    <input type="text" id="form3Example1q" class="form-control" name="nom">
                  </div> --}}
                  <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example1q">Prenom</label>
                      <input type="datetime-local" id="form3Example1q" class="form-control" name="prenom">
                  </div>
                  <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example1q">Téléphone</label>
                      <input type="text" id="form3Example1q" class="form-control" name="telephone">
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1q">Adresse</label>
                    <input type="text" id="form3Example1q" class="form-control" name="adresse">
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example1q">Email</label>
                    <input type="file" id="form3Example1q" class="form-control" name="email">
                  </div>
                  
  
                  {{-- <div class="row">
                    <div class="col mb-4">
                      <div class="form-outline datepicker">
                        <label for="exampleDatepicker1" class="form-label">Mots de passe</label>
                        <input type="file" class="form-control" id="exampleDatepicker1" name="password"/>
                      </div>
  
                    </div>
                    <div class="col-md mb-4">
                      <label for="exampleDatepicker1" class="form-label">Confirmer mots de passe</label>
                      <input type="file" class="form-control" id="exampleDatepicker1" name="confirme"/>
                    </div>
                  </div> --}}
  
                  
  
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                      <button type="submit" class="btn btn-primary">Envoyer</button>
                    </div>
  
                </form>    
                
        </div>
                    
                  
      </div>
    </div>
</div> -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <img src="{{asset('img/apple-touch-icon.png')}}" class="img-fluid" alt="" width="70px">
      <h1 class="logo me-auto"><a href="index.html">Singuai Bana</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">A propos</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link   scrollto" href="#portfolio">Les compagnies de transport</a></li>
          <li><a class="nav-link scrollto" href="#team">Notre équipe</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul> -->
          <li><a class="nav-link scrollto" href="tel: +223 20 79 59 68">Contact</a></li>
          <!-- <li><a class="getstarted scrollto" href="#about">Démarrons</a></li> -->
          <li class="dropdown"><a href="#"><span>Connection</span><i class="bi bi-chevron-down"></i></a>
            <ul>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#loginModal">Se connecter</button></br></br>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insModal">S'inscrire</button>
            </ul>
        </ul>

        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Une application de gestion et de reservation de bus</h1>
          <h2>La meilleure application pour vous.</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Suivant</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Video d'utilisation</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('img/hero-img.png')}}" class="img-fluid animated" alt="">
          <!-- <img src="{{asset('img/bus.jpg')}}" class="img-fluid animated" alt=""> -->
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  
  @if(count($errors))>0)
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}
      </li>
      @endforeach
    </ul>
  </div>
  @endif

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

        <p><h3>Ils nous font confiance</h3></p>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('img/clients/client-1.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('img/clients/client-2.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('img/clients/client-3.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('img/clients/client-4.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('img/clients/client-5.png')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('img/clients/client-6.png')}}" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section> 
    
    <!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>A propos de nous</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
             Singuai-Bana, est une application de gestion et de reservation des bus.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Singuai-Bana est spécialement conçu non seulement pour les différentes compaagnies de transport</li>
              <li><i class="ri-check-double-line"></i> mais aussi pour les citoyens empruntant les bus.</li>
              <li><i class="ri-check-double-line"></i>Elle est conçue pour palier à nos problèmes de reservation, d'aller et retour sans importance,</li>
              <li><i class="ri-check-double-line"></i> d'accès aux bus et de manque d'informations sur les bus et voyage.</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              24/24, vous avez la possibilité de vous renseigner sur les bus de disponibles et payer votre ticket à distance
              Nous vous donnons la possibilité de rétracer toutes vos activités en jour et en heure</br>
              Singuai-Bana vous promet un service en fonction de vos besoins.
            </p>
            <!-- <a href="#" class="btn-learn-more">learn more</a> -->
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Plus de 30<strong>Compagnies</strong></h3>
              <p>
                Le service est agreable, des solutions électroniques pour les besoins et le plaisir du client. Le personnel est attentif et est à votre service.
              </p>
            </div>

            <div class="accordion-list">
              <p>Vous avez :</p>
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span>Télé : pour l'animation.<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      La télé vous rendra le trajet moins long.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span>La climatisation dans les bus.</i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Sans fatigue et sans challeur, le trajet sera plus agreable.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span>Les ports cable.<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Vous pouvez facilement recharger la batterie de vos téléphones et tablettes.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <!-- <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div> -->
          <img src="{{asset('img/why-us.png')}}" class="col-lg-5 align-items-stretch order-1 order-lg-2 img" alt="" data-aos="zoom-in" data-aos-delay="150">
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="asset{{('img/skills.png')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Rassurez-vous</h3>
            <p class="fst-italic">
              Nous nous engageons à vous offrir le meilleur.
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">SECURITE<i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
    
              <div class="progress">
                <span class="skill">SERIEUX<i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">PONCTUALITE<i class="val">100%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CONFORTS<i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nos Services</h2>
          <p>Nous faisons :</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Transport</a></h4>
              <p>Transporter des personnes physiques et ou morales.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Mise en rélation</a></h4>
              <p>Avec Singuai-Bana, vous pouvez facilement en contact avec les différentes compagnie</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-layer"></i></div>
              <h4><a href="">Vente de ticket en ligne</a></h4>
              <p>Plus besoin de vous déplacer nous vous donnons la solution dépuis chez vous.</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Envoie des courriers</a></h4>
              <p>Vos courriers sont protégés et envoyés en toute sécurité à destination.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <!-- <h3>Call To Action</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div> -->
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="{{asset('/login')}}">Appel à l'action</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Singuai-Bana</h2>
          <p>Singuai-Bana, Singuai-Bana est un espace où vous pouvez facilement faire votre reservation en ligne, c'est à dire acheter votre ticket sans vous déplacer.</p>
        </div>

        <!-- <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul> -->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="asset{{('img/portfolio/portfolio-1.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <!-- <h4>App 1</h4>
              <p>App</p> -->
              <a href="asset{{('img/portfolio/portfolio-1.jpg')}}"data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="asset{{('img/portfolio/portfolio-2.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <!-- <h4>Web 3</h4>
              <p>Web</p> -->
              <a href="asset{{('img/portfolio/portfolio-2.jpg')}}"data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="asset{{('img/portfolio/portfolio-3.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <!-- <h4>App 2</h4>
              <p>App</p> -->
              <a href="asset{{('img/portfolio/portfolio-3.jpg')}}"data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="asset{{('img/portfolio/portfolio-4.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <!-- <h4>Card 2</h4>
              <p>Card</p> -->
              <a href="asset{{('img/portfolio/portfolio-4.jpg')}}"data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="asset{{('img/portfolio/portfolio-5.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <!-- <h4>Web 2</h4>
              <p>Web</p> -->
              <a href="asset{{('img/portfolio/portfolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-img"><img src="asset{{('img/portfolio/portfolio-6.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <!-- <h4>App 3</h4>
              <p>App</p> -->
              <a href="asset{{('img/portfolio/portfolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="asset{{('img/portfolio/portfolio-7.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <!-- <h4>Card 1</h4>
              <p>Card</p> -->
              <a href="asset{{('img/portfolio/portfolio-7.jpg')}}"data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img"><img src="asset{{('img/portfolio/portfolio-8.jpg')}}"class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <!-- <h4>Card 3</h4>
              <p>Card</p> -->
              <a href="asset{{('img/portfolio/portfolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-img"><img src="asset{{('img/portfolio/portfolio-9.jpg')}}" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <!-- <h4>Web 3</h4>
              <p>Web</p> -->
              <a href="asset{{('img/portfolio/portfolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>L'équipe</h2>
          <p>Une équipe dévouée qui travaille nuit et jour pour satisfaire sa clientèle.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="{{asset('img/team/team-1.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Takiyou Dakono</h4>
                <span>Chef exécutif en Intégration</span>
                <p>Dévelloppeur fullstack</br>
                Ouvert et disponible.</p>
                <div class="social">
                  <a href="https://wa.me/22394587167"><i class="fa fa-whatsapp"></i></a>
                  <a href="https://www.twitter.com/@HaouaCoulibaly6"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.facebook.com/haoua.coulibaly.5876"><i class="fa fa-facebook-f"></i></a>
                  <a href="https://www.linkedin.com/in/haoua-coulibaly-0a610a196"> <i class="fa fa-linkedin-square"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="{{asset('img/team/team-4.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Sidy Lamine Diakité</h4>
                <span>Spécialiste Back-end</span>
                <p>Développe et conçoit les bases de données de l'entreprise</p>
                <div class="social">
                <a href="https://wa.me/22394587167"><i class="fa fa-whatsapp"></i></a>
                  <a href="https://www.twitter.com/@HaouaCoulibaly6"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.facebook.com/haoua.coulibaly.5876"><i class="fa fa-facebook-f"></i></a>
                  <a href="https://www.linkedin.com/in/haoua-coulibaly-0a610a196"> <i class="fa fa-linkedin-square"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="{{asset('img/team/team-2.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Moctac Bah</h4>
                <span>Designer</span>
                <p>Idéalisation et Maquettage</p>
                <div class="social">
                <a href="https://wa.me/22394587167"><i class="fa fa-whatsapp"></i></a>
                  <a href="https://www.twitter.com/@HaouaCoulibaly6"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.facebook.com/haoua.coulibaly.5876"><i class="fa fa-facebook-f"></i></a>
                  <a href="https://www.linkedin.com/in/haoua-coulibaly-0a610a196"> <i class="fa fa-linkedin-square"></i> </a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-4">
            <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="{{asset('img/team/team-3.jpg')}}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Fadima Maîga</h4>
                <span>Responsable Marketing</span>
                <p>Gère tout ce qui rélève du côté commercial de l'entreprise</p>
                <div class="social">
                <a href="https://wa.me/22394587167"><i class="fa fa-whatsapp"></i></a>
                  <a href="https://www.twitter.com/@HaouaCoulibaly6"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.facebook.com/haoua.coulibaly.5876"><i class="fa fa-facebook-f"></i></a>
                  <a href="https://www.linkedin.com/in/haoua-coulibaly-0a610a196"> <i class="fa fa-linkedin-square"></i> </a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Compagnies</h2>
          <p>Les compagnies les plus utilisées.</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h2><strong>Diarra Transport</strong></h2>
              <h3>Leurs destinations : </h3>
              <ul>
                <li><i class="bx bx-check"></i>Bamako-Koutiala</li>
                <li><i class="bx bx-check"></i>Bamako-Segou</li>
                <li><i class="bx bx-check"></i>Bamako-Kayes</li>
                <li><i class="bx bx-check"></i>Bamako-Mopti</li>
                <li><i class="bx bx-check"></i>Bamako-Burkina</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h2><strong>Africa Tour</strong></h2>
              <h3>Leurs destinations : </h3>
              <ul>
                <li><i class="bx bx-check"></i>Bamako-Koutiala</li>
                <li><i class="bx bx-check"></i>Bamako-Segou</li>
                <li><i class="bx bx-check"></i>Bamako-Kayes</li>
                <li><i class="bx bx-check"></i>Bamako-Mopti</li>
                <li><i class="bx bx-check"></i>Bamako-Gao</li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h2><strong>CMT</strong></h2>
              <h3>Leurs destinations : </h3>
              <ul>
                <li><i class="bx bx-check"></i>Bamako-Koutiala</li>
                <li><i class="bx bx-check"></i>Bamako-Segou</li>
                <li><i class="bx bx-check"></i>Bamako-Kayes</li>
                <li><i class="bx bx-check"></i>Bamako-Mopti</li>
                <li><i class="bx bx-check"></i>Bamako-Sikasso</li>
                <!-- <a href="#" class="buy-btn">Démarrons</a> -->
              </ul>
            </div>
          </div>

          <!-- <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Bamako-Segou</h3>
              <h3>Segou-Bamako</h3>
              <h4>4.000<sup>FCFA</sup><span>Par personne</span></h4>
              <ul>
                <li><i class="bx bx-check"></i>Les deux destinations ont le même tarif.</li>
                <li><i class="bx bx-check"></i>Nous respectons les heures.</li>
                <li><i class="bx bx-check"></i>Et le Rendez-Vous est à 1heure en avances.</li>
                </i>Vous avez la possibilité d'annuler votre voyage au plus tard 1jour à l'avance.</li>
                <li><i class="bx bx-check"></i>Vous pouvez faire des commentaires, nous évaluer et même nous envoyer vos avis sur tout.</li>
              </ul>
              <a href="#" class="buy-btn">Démarrons</a>
            </div>
          </div> -->

          <!-- <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Bamako-Kayes</h3>
              <h3>Kayes-Bamako</h3>
              <h4>12.000<sup>FCFA</sup><span>Par personne</span></h4>
              <ul>
                <li><i class="bx bx-check"></i>Les deux destinations ont le même tarif.</li>
                <li><i class="bx bx-check"></i>Nous respectons les heures.</li>
                <li><i class="bx bx-check"></i>Et le Rendez-Vous est à 1heure en avances.</li>
                </i>Vous avez la possibilité d'annuler votre voyage au plus tard 1jour à l'avance.</li>
                <li><i class="bx bx-check"></i>Vous pouvez faire des commentaires, nous évaluer et même nous envoyer vos avis sur tout.</li>
              </ul>
              <a href="#" class="buy-btn">Démarrons</a>
            </div>
          </div> -->

          <!-- <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Bamako-Burkina-Faso</h3>
              <h3>Burkina-Faso-Bamako</h3>
              <h4>20.000<sup>FCFA</sup><span>Par personne</span></h4>
              <ul>
                <li><i class="bx bx-check"></i>Les deux destinations ont le même tarif.</li>
                <li><i class="bx bx-check"></i>Nous respectons les heures.</li>
                <li><i class="bx bx-check"></i>Et le Rendez-Vous est à 1heure en avances.</li>
                </i>Vous avez la possibilité d'annuler votre voyage au plus tard 1jour à l'avance.</li>
                <li><i class="bx bx-check"></i>Vous pouvez faire des commentaires, nous évaluer et même nous envoyer vos avis sur tout.</li>
              </ul>
              <a href="#" class="buy-btn">Démarrons</a>
            </div>
          </div> -->

          <!-- <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Bamako-Mopti</h3>
              <h3>Mopti-Bamako</h3>
              <h4>12.000<sup>FCFA</sup><span>Par personne</span></h4>
              <ul>
                <li><i class="bx bx-check"></i>Les deux destinations ont le même tarif.</li>
                <li><i class="bx bx-check"></i>Nous respectons les heures.</li>
                <li><i class="bx bx-check"></i>Et le Rendez-Vous est à 1heure en avances.</li>
                </i>Vous avez la possibilité d'annuler votre voyage au plus tard 1jour à l'avance.</li>
                <li><i class="bx bx-check"></i>Vous pouvez faire des commentaires, nous évaluer et même nous envoyer vos avis sur tout.</li>
              </ul>
              <a href="#" class="buy-btn">Démarrons</a>
            </div>
          </div> -->

          <!-- <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Bamako-Sikasso</h3>
              <h3>Sikasso-Bamako</h3>
              <h4>12.000<sup>FCFA</sup><span>Par personne</span></h4>
              <ul>
                <li><i class="bx bx-check"></i>Les deux destinations ont le même tarif.</li>
                <li><i class="bx bx-check"></i>Nous respectons les heures.</li>
                <li><i class="bx bx-check"></i>Et le Rendez-Vous est à 1heure en avances.</li>
                </i>Vous avez la possibilité d'annuler votre voyage au plus tard 1jour à l'avance.</li>
                <li><i class="bx bx-check"></i>Vous pouvez faire des commentaires, nous évaluer et même nous envoyer vos avis sur tout.</li>
              </ul>
            </div>
          </div> -->

          <!-- <a href="#" class="buy-btn">Savoir plus</a> -->

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Les commentaires les plus fréquents</h2>
          <!-- <p>Je suis satisfait de votre compagnie.</p> -->
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Severin Togo<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Très bonne initiative.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Sanata Fané<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  La meilleure application dépuis tout ce temps, nous sommes à l'aise.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Aminata Coulibaly<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Vraiment singuai bana, je vous remercie pour cette initiative.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Djenèba Adja Coumaré<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                 Singuai-Bana, la satisfaction totale, dépuis que j'ai commencé à utiliser votre service je ne me fatigue plus.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Boureima Maiga<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Bonjour, je tenais à vous remercier et vous encourager surtout dans ce que vous faîtes pour nous. Vous nous facilitez la vie.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacts</h2>
          <p>Disponible pour vous repondre à tout moment.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Localisation:</h4>
                <p>Korofina-Sud / RUE : 19 / PORTE : 120</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4> Email:</h4>
                <p><a href="mailto: coulibalyhaoua.16@gmail.com"target=-blank>coulibalyhaoua.16@gmail.com</a></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Téléphone :</h4>
                <p><a href="tel: +223 94 58 71 67"target=-blank><strong>Télephone:</strong> +223 94587167</a></p>
              </div>

              <iframe id="hd" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.8449407714456!2d-7.957284385181262!3d12.658169791062084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7a094d153db12f99!2zMTLCsDM5JzI5LjQiTiA3wrA1NycxOC4zIlc!5e0!3m2!1sfr!2sml!4v1647344713772!5m2!1sfr!2sml" width="465" height="300" style="border:0;" allowfullscreen="" loading="lazy" target=-blank></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Votre Nom</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Votre Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Sujet ou Contexte</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Télechagement</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message a été bien envoyé. Merci !</div>
              </div>
              <div class="text-center"><button type="submit" href="{{asset('coulibalyhaoua.16@gmail.com')}}">Envoyer</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <!-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Joignez notre lettre</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Singuai-Bana</h3>
            <p>
              Korofina-Sud / RUE : 19 / PORTE : 120<br>
              Bamako/MALI<br>
              <!-- United States <br><br> -->
              <i class="fa fa-phone"><a href="tel: +223 94 58 71 67"target=-blank><strong>Télephone:</strong> +223 94587167</a></i><br>
              <i class="fa fa-envelope"><a href="mailto: coulibalyhaoua.16@gmail.com"target=-blank><strong>Email:</strong> coulibalyhaoua.16@gmail.com</a></i><br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos liens</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">A propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Les compagnies de transport</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Equipe</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Offre d'espace à toutes les compagnies de transport</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Base de données complète pour chaque chaque compagnie</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Achat de ticket en ligne</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Retrace toutes les différentes activités d'un client</li></a>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos réseaux sociaux</h4>
            <p> N'hészitez pas à nous contacter</p>
            <div class="social-links mt-3">
            <a href="https://wa.me/22394587167"><i class="fa fa-whatsapp"></i></a>
                  <a href="https://www.twitter.com/@HaouaCoulibaly6"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.facebook.com/haoua.coulibaly.5876"><i class="fa fa-facebook-f"></i></a>
                  <a href="https://www.linkedin.com/in/haoua-coulibaly-0a610a196"> <i class="fa fa-linkedin-square"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Singuai-Bana</span></strong>. Tout Droit Réservé
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designé par <a href="coulibalyhaoua.16@gmail.com">Concept-Light</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>

</html>