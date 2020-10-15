<?php
include 'admin/backend/wp-conn.php';
$stmt = $pdo->query("SELECT * FROM wp_posts WHERE post_status = 'publish' AND post_type = 'post' order by post_modified desc");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <meta name="description" content="Personal Portfolio Template">
  <meta name="keyword" content="agency, business, corporate, creative, freelancer, minimal, modern, personal, portfolio, responsive, simple, cartoon">
  <title>Zeemaar - Creative Agency</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/ico/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-precomposed.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/responsivee.css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand:700|Roboto:400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127439272-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127439272-1');
</script>

</head>
  <body id="index-page">
    <!-- Preloader -->
    <div class="leonardo-preloader"></div>
    <!-- Header Start -->
    <header id="header" class="height-0">
      <nav class="navbar-default le-navbar">
        <div class="container">
          <div class="navbar-header"> <button id="menu-nav-btn" type="button" class="mobile-menu-btn navbar-toggle collapsed"
              data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span></span>
            </button> <a class="logo" href="#header"> <img src="img/logo/main-logo.png" alt="" class="logo-img"> </a>
          </div>
          <div class="collapse navbar-collapse nav-responsive" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a class="nav-btn" href="#header">home</a></li>
              <li><a class="nav-btn" href="#services">service</a></li>
              <li><a class="nav-btn" href="#portfolio">portfolio</a></li>
              <li><a class="nav-btn" href="#about">about</a></li>
              <li><a class="nav-btn" href="#blog">blog</a></li>
              <li><a class="nav-btn" href="#pricing">pricing</a></li>
              <li><a class="nav-btn" href="#contact">contact</a></li>
              <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Bonus <span class="glyphicon-plus"></span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-btn" href="blog.php">blog page</a></li>
                  <li><a class="nav-btn" href="blog-post.php">blog post</a></li>
                  <li><a class="nav-btn" href="single-work">single work</a></li>
                  <li><a class="nav-btn" href="portfolio.php">portfolio</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Header End -->
    <!-- Blog Section Start -->
    <div id="blog-page">
      <div class="container">
        <div class="row">
          <!-- Article Start -->
          <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
            <!-- BLog Post -->
            <?php
            header('Content-Type: text/html; charset=utf-8');

            while ($row = $stmt->fetch()) {
              $datetime = $row['post_date'];
              $time = strtotime($datetime);
              $myFormatForView = date("m/d/y g:i A", $time);

             ?>
            <div class="blog-article wow fadeIn" data-wow-delay="0.1s">
              <div class="article-info">
                <span><?php echo $myFormatForView; ?></span>
                <h2><?php echo $row['post_title']; ?></h2>
                <p><?php echo $row['post_content']; ?></p>
                <div class="blog-btn">
                  <a href="<?php echo $row['guid']; ?>">Read More</a>
                </div>
              </div>
            </div>

          <?php } ?>

            <div class="blog-navigation wow fadeIn" data-wow-delay="0.1s">
              <nav aria-label="Page navigation">
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- Article End -->
          <!-- Sidebar Start -->
          <div class="sidebar pull-right col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <!-- Advertise Start -->
            <div class="advertise wow fadeIn" data-wow-delay="0.1s">
              <a href="#">
                <img class="img-responsive" src="img/add.png" alt="Image">
              </a>
            </div>
            <!-- Advertise End -->
            <!-- Popular Posts Start -->
            <div class="side-post wow fadeIn" data-wow-delay="0.1s">
              <h4>Popular</h4>
              <!-- Popular Post -->
              <div class="popular-post">
                <div class="popular-img">
                  <img src="img/blog/popular01.png" alt="Image">
                </div>
                <div class="popular-info">
                  <span>07 Jan 2018</span>
                  <a href="blog-post.html"><h5>Super Awesome Blog Post</h5></a>
                </div>
              </div>
              <!-- Popular Post -->
              <div class="popular-post">
                <div class="popular-img">
                  <img src="img/blog/popular02.png" alt="Image">
                </div>
                <div class="popular-info">
                  <span>07 Jan 2018</span>
                  <a href="blog-post.html"><h5>Super Awesome Blog Post</h5></a>
                </div>
              </div>
              <!-- Popular Post -->
              <div class="popular-post">
                <div class="popular-img">
                  <img src="img/blog/popular03.png" alt="Image">
                </div>
                <div class="popular-info">
                  <span>07 Jan 2018</span>
                  <a href="blog-post.html"><h5>Super Awesome Blog Post</h5></a>
                </div>
              </div>
              <!-- Popular Post -->
              <div class="popular-post">
                <div class="popular-img">
                  <img src="img/blog/popular04.png" alt="Image">
                </div>
                <div class="popular-info">
                  <span>07 Jan 2018</span>
                  <a href="blog-post.html"><h5>Super Awesome Blog Post</h5></a>
                </div>
              </div>
            </div>
            <!-- Popular Posts End -->
          </div>
          <!-- Sidebar End -->
        </div><!-- Row End -->
      </div><!-- Container End -->
    </div>
    <!-- Blog Section End -->
    <!-- COntact start -->
    <div class="contact contact-small contact-margin-top" id="contact">
      <div class="container">
        <div class="row">
          <div class="contac-title small-space title text-center col-xs-12 col-sm-12 col-md-12 col-lg-12 wow fadeIn" data-wow-delay="0.1s">
            <h2>Feel free to contact me for anything</h2>
            <p>I am a people person.</p>
          </div>
        </div><!-- row end -->
        <!-- form start -->
        <div class="row">
          <div class="form-box col-xs-12 col-sm-9 col-md-9 col-lg-8 col-sm-offset-2 col-xs-offset-0 wow fadeIn" data-wow-delay="0.1s">
            <div id="form-messages"></div>
            <form id="contact-form" class="form" method="post" action="http://logovski.com/mailer.php">
              <div class="field form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" tabindex="1" required>
              </div>
              <div class="field form-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" tabindex="2" required>
              </div>
              <div class="field form-group">
                <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Message Here" tabindex="4" required></textarea>
              </div>
              <div class="field btn-style text-center" data-wow-duration="2s">
                <button type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div><!-- row end -->
        <!-- form end -->
      </div><!-- container end -->
    </div>
    <!-- Contact end -->
  <!-- Footer start -->
  <footer class="footer" id="footer">
    <div class="container">
      <div class="row">
        <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12 wow fadeIn" data-wow-delay="0.1s">
          <div>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
            <a href="#"><i class="fab fa-behance"></i></a>
          </div>
          <p> © 2018 - Leonardo,Template</p>
        </div>
      </div><!-- row end -->
    </div><!-- container end -->
    </footer>
    <!-- Footer end -->
    <!-- Jquery -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- scrollreveal js -->
    <script src="js/scrollreveal.js"></script>
    <!-- Isotope js -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- wow.js -->
    <script src="js/wow.min.js"></script>
    <!-- Main js -->
    <script src="js/main.js"></script>
  </body>

<!-- Mirrored from logovski.com/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Aug 2018 05:51:33 GMT -->
</html>
