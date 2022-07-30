<?php

      $to = "bakeorouzime@gmail.com";
      $from = $_REQUEST['mail'];
      $tel = $_REQUEST['num'];
      $nom = $_REQUEST['nom'];
      $msg = $_REQUEST['msg'];    
      $headers = "From: $from";
      $headers = "From: " . $from . "\r\n";
      $headers .= "Reply-To: ". $from . "\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
      $subject = "Nouveau message de votre site de nutrition.";
      $headers = "From: $from";
      $headers = "From: " . $from . "\r\n";
      $headers .= "Reply-To: ". $from . "\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
      $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
      $body .= "<table style='width: 100%;'>";
      $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
      $body .= "</td></tr></thead><tbody><tr>";
      $body .= "<td style='border:none;'><strong>Nom:</strong> {$nom}</td>";
      $body .= "<td style='border:none;'><strong>Telephone:</strong> {$tel}</td>";
      $body .= "</tr>";
      $body .= "<tr><td style='border:none;'><strong>E-mail:</strong> {$from}</td></tr>";
      $body .= "<tr><td></td></tr>";
      $body .= "<tr><td colspan='2' style='border:none;'>{$msg}</td></tr>";
      $body .= "</tbody></table>";
      $body .= "</body></html>";
    $send = mail($to, $subject, $body, $headers);
?>
<!doctype html>
<html lang="en">

<head>
  <title>Nutrition &mdash; By Kerene</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/carousel.min.css">

  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header role="banner">
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-9 social">
            <a href="https://www.facebook.com/kerene.ZIME"><span class="fa fa-facebook"></span></a>
            <a href="https://instagram.com/ke_rene?igshid=YmMyMTA2M2Y="><span class="fa fa-instagram"></span></a>
             <a href="https://www.snapchat.com/add/kerene_orou?share_id=NzY4QzdBQ0EtREU1Qy00QkVCLTlEMzUtN0NGNjdCQUVGRTRB&locale=fr_BJ"><span class="fa fa-snapchat"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
          </div>
          <div class="col-3 search-top">

            <form action="contact.html" class="search-top-form">
              <button>Prendre Rendez-Vous</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container logo-wrap">
      <div class="row pt-5">
        <div class="col-12 text-center">
          <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button"
            aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
          <h1 class="site-logo"><a href="index.html">Nutrition et Diététique</a></h1>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-md  navbar-light bg-light">
      <div class="container">


        <div class="collapse navbar-collapse" id="navbarMenu">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Mon approche</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Actualités</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>

        </div>
      </div </nav>
  </header>
  <!-- END header -->


  <section class="site-section">
    <div class="container">

      <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">

          <div class="row">
            <div class="col-md-12">
              <h2 class="mb-4" style="text-align: center; ">Merci de m'avoir contacté.</h2>
              <p style="text-align: center;">Contactez-moi aussi sur whatsapp :+22961351934 </p>
              <p style="color:#EEA578; font-weight: 700;">Consultez mes articles</p>
            </div>
          </div>
        </div>

        <!-- END main-content -->
                  <div class="row mb-5 mt-5">

            <div class="col-md-12">
              <h2 class="mb-4">Mes articles</h2>
            </div>

            <div class="col-md-12">

              <div class="post-entry-horzontal">
                <a href="index.html.html">
                  <div class="image element-animate" data-animate-effect="fadeIn"
                    style="background-image: url(images/assiete.jpg);"></div>
                  <span class="text">
                    <div class="post-meta">
                      <span class="category">Sportif</span>
                      <span class="mr-2">Juillet, 2022 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>Mode d'alimentation pour sportif</h2>
                  </span>
                </a>
              </div>
              <!-- END post -->

              <div class="post-entry-horzontal">
                <a href="index.html.html">
                  <div class="image element-animate" data-animate-effect="fadeIn"
                    style="background-image: url(images/assiete.jpg);"></div>
                  <span class="text">
                    <div class="post-meta">
                      <span class="category">Sportif</span>
                      <span class="mr-2">Juillet, 2022 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>Mode d'alimentation pour sportif</h2>
                  </span>
                </a>
              </div>
              <!-- END post -->

              <div class="post-entry-horzontal">
                <a href="index.html">
                  <div class="image element-animate" data-animate-effect="fadeIn"
                    style="background-image: url(images/assiete.jpg);"></div>
                  <span class="text">
                    <div class="post-meta">
                      <span class="category">Sportif</span>
                      <span class="mr-2">Juillet, 2022 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>Mode d'alimentation pour sportif</h2>
                  </span>
                </a>
              </div>
              <!-- END post -->
            </div>
          </div>
        <div class="col-md-12 col-lg-4 sidebar">
          <!-- END sidebar-box -->
          <div class="sidebar-box">
            <div class="bio text-center">
              <img src="images/person_1.jpeg" alt="Image Placeholder" class="img-fluid">
              <div class="bio-body">
                <h2>OROU ZIME Kérène</h2>
                <p>Diététicienne nutritionniste diplômée d’Etat. Je vous propose de mettre mes connaissances et mon
                  expérience au service de votre bien-être..</p>
                <p><a href="contact.html" class="btn btn-primary btn-sm">Consulter</a></p>
                <p class="social">
                  <a href="https://www.facebook.com/kerene.ZIME"><span class="fa fa-facebook"></span></a>
               <a href="https://instagram.com/ke_rene?igshid=YmMyMTA2M2Y="><span class="fa fa-instagram"></span></a>
               <a href="https://www.snapchat.com/add/kerene_orou?share_id=NzY4QzdBQ0EtREU1Qy00QkVCLTlEMzUtN0NGNjdCQUVGRTRB&locale=fr_BJ"><span class="fa fa-snapchat"></span></a>
                </p>
              </div>
            </div>
          </div>
          <!-- END sidebar-box -->
          <div class="sidebar-box">
            <h3 class="heading">Résumé</h3>
            <div class="post-entry-sidebar">
              <ul>
                <li>
                  <a href="index.htm">
                    <img src="images/assiete.jpg" alt="Image placeholder" class="mr-4">
                    <div class="text">
                      <h4>Mon approche, a la fois nutritionnelle et comportementale</h4>
                      <div class="post-meta">
                        <span class="mr-2">Juillet , 2022 </span> &bullet;
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="index.htm">
                    <img src="images/consult.jpg" alt="Image placeholder" class="mr-4">
                    <div class="text">
                      <h4>Mes consultations </h4>
                      <div class="post-meta">
                        <span class="mr-2">juillet, 2022 </span> &bullet;
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- END sidebar-box -->

          <div class="sidebar-box">
            <h3 class="heading">Tags</h3>
            <ul class="tags">
              <li><a href="index.htm">Alimentation</a></li>
              <li><a href="index.htm">Nutrition</a></li>
              <li><a href="index.htm">Diététique</a></li>
              <li><a href="index.htm">Lifestyle</a></li>
              <li><a href="index.htm">Sport</a></li>
              <li><a href="index.htm">Fitness</a></li>
              <li><a href="index.htm">Bien-etre</a></li>
            </ul>
          </div>
        </div>
        <!-- END sidebar -->

      </div>
    </div>
  </section>

  <footer class="site-footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-4">
          <h3>Bio</h3>
          <p>
            <img style="width: 60px;" src="images/person_1.jpeg" alt="Image placeholder" class="img-fluid">
          </p>

          <p>OROU ZIME Kérène, diététicienne nutritionniste diplômée d’Etat.</p>
        </div>
        <div class="col-md-6 ml-auto">
          <div class="row">
            <div class="col-md-7">
              <h3>Résumé</h3>
              <div class="post-entry-sidebar">
                <ul>
                  <li>
                    <a href="index.htm">
                      <img src="images/assiete.jpg" alt="Image placeholder" class="mr-4">
                      <div class="text">
                        <h4>Mon approche, a la fois nutritionnelle et comportementale</h4>
                        <div class="post-meta">
                          <span class="mr-2">juillet, 2022 </span> &bullet;
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a href="index.htm">
                      <img src="images/consult.jpg" alt="Image placeholder" class="mr-4">
                      <div class="text">
                        <h4>Mes consultations</h4>
                        <div class="post-meta">
                          <span class="mr-2">juillet, 2022 </span> &bullet;

                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-1"></div>

            <div class="col-md-4">

              <div class="mb-5">
                <h3>Liens</h3>
                <ul class="list-unstyled">
                  <li><a href="index.html">Mon approche</a></li>
                  <li><a href="blog.html">Actualites</a></li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </div>

              <div class="mb-5">
                <h3>Social</h3>
                <ul class="list-unstyled footer-social">
                <li><a href="https://www.snapchat.com/add/kerene_orou?share_id=NzY4QzdBQ0EtREU1Qy00QkVCLTlEMzUtN0NGNjdCQUVGRTRB&locale=fr_BJ"><span class="fa fa-snapchat"></span> Snapchat</a></li>
                  <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                  <li><a href="https://instagram.com/ke_rene?igshid=YmMyMTA2M2Y="><span class="fa fa-instagram"></span> Instagram</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <script>document.write(new Date().getFullYear());</script> <a href="index.html" target="_blank"> Copyright
            Tout droit reservé |site web by Nutrition & Dietetique</a>
        </div>
      </div>
    </div>
  </footer>
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#f4b214" />
    </svg></div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.0.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>