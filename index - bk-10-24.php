<?php
include 'admin/backend/wp-conn.php';
$stmt = $pdo->query("SELECT * FROM wp_posts WHERE post_status = 'publish' AND post_type = 'post' order by post_modified desc Limit 2");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <meta name="description" content="We make great websites">
  <meta name="keyword" content="agency, business, corporate, creative, freelancer, minimal, modern, personal, portfolio, responsive, simple, cartoon">
  <title>Zeemaar - Creative Agency</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/ico/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-precomposed.png">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.min.css?key=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/responsivee.css?key=<?php echo time(); ?>">
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
  <!-- <div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

  </div> -->
  <div id="particles-js">
  </div>
  <header id="header">
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
            <!-- <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                aria-expanded="false">Bonus <span class="glyphicon-plus"></span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-btn" href="blog.php">blog page</a></li>
                <li><a class="nav-btn" href="blog-post.php">blog post</a></li>
                <li><a class="nav-btn" href="single-work">single work</a></li>
                <li><a class="nav-btn" href="portfolio.php">portfolio</a></li>
              </ul>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <div class="hero-area">
      <div class="container">
        <div class="row">
          <div class="hero-title col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h1 class="wow slideInLeft" data-wow-duration="1s">We Make Great Websites.</h1>
            <p class="wow slideInLeft" data-wow-duration="1.5s">Get stylish, effective, SEO optimized Website at very
              affordable rates. Share your business plans with us & get advice from our experts. </p>
            <div class="btn-style wow slideInLeft" data-wow-duration="2s"> <a href="#contact">Get a FREE Quote</a>
            </div>
          </div>
          <div class="hero-img col-xs-12 col-sm-12 col-md-6 col-lg-6"> <img class="img-responsive wow slideInRight"
              data-wow-duration="1s" src="img/hero-illustration1.svg" alt="illustration"> <img class="img-responsive wow slideInRight"
              data-wow-duration="1.5s" src="img/hero-illustration2.svg" alt="illustration"> <img class="img-responsive wow slideInRight"
              data-wow-duration="2s" src="img/hero-illustration3.svg" alt="illustration"> </div>
        </div>
      </div>
    </div>
  </header>
  <!-- </div> -->

  <div class="fixed-social-icons">
    <nav class="social">
      <ul>
        <li><a href="https://facebook.com">Facebook <i class="fab fa-facebook-square"></i></a></li>
        <li><a href="https://twitter.com/">Twitter <i class="fab fa-twitter"></i></a></li>
        <!-- <li><a href="https://wa.me/971553971476?text=I%20have%20a%20question">Whatsapp <i class="fab fa-whatsapp"></i></a></li> -->
        <li><a href="https://m.me/herbialissupplements">Messenger <i class="fab fa-facebook-messenger"></i></a></li>
        <li><a href="http://behance.net/">Instagram <i class="fab fa-instagram"></i></a></li>
        <li><a href="http://behance.net/">LinkedIn <i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="http://behance.net/">Pinterest <i class="fab fa-pinterest-p"></i></a></li>
      </ul>
    </nav>
  </div>

<!-- test fixed -->
<!-- <div id="fixed-social">
  <div>
    <a href="#" class="fixed-facebook" target="_blank"><i class="fab fa-facebook"></i> <span>Facebook</span></a>
  </div>
  <div>
    <a href="#" class="fixed-twitter" target="_blank"><i class="fab fa-twitter"></i> <span>Twitter</span></a>
  </div>
  <div>
    <a href="#" class="fixed-gplus" target="_blank"><i class="fab fa-whatsapp"></i> <span>Whatsapp</span></a>
  </div>
  <div>
    <a href="#" class="fixed-messenger" target="_blank"><i class="fab fa-facebook-messenger"></i> <span>Messenger</span></a>
  </div>
  <div>
    <a href="#" class="fixed-linkedin" target="_blank"><i class="fab fa-linkedin"></i> <span>LinkedIn</span></a>
  </div>
  <div>
    <a href="#" class="fixed-instagrem" target="_blank"><i class="fab fa-instagram"></i> <span>Instagram</span></a>
  </div>
  <div>
    <a href="#" class="fixed-pint" target="_blank"><i class="fab fa-pinterest-p"></i> <span>Pinterest</span></a>
  </div>
</div> -->
<!-- test fixed -->


  <div class="whatsapp-fixed">
    <a href="https://wa.me/971553971476?text=I%20have%20a%20question"><i class="fab fa-whatsapp"></i></a>
  </div>

  <div id="services">
    <div class="container">
      <div class="row">
        <div class="title text-center col-xs-12 col-sm-12 col-md-12 col-lg-12 wow fadeIn" data-wow-delay="0.1s">
          <h2>Our Services</h2>
          <p>We are offering multiple services to our clients.</p>
        </div>
      </div>
      <div class="row">
        <div class="service-illustration col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <img class="img-responsive wow slideInLeft" data-wow-duration="1s" src="img/service-illustration1.svg" alt="illustration">
          <img class="img-responsive wow slideInLeft" data-wow-duration="2s" src="img/service-illustration2.svg" alt="illustration">
        </div>
        <div class="service-offers col-xs-12 col-sm-12 col-md-6 col-lg-6">
          <div class="offer wow fadeIn" data-wow-delay="0.1s">
            <img class="img-responsive" src="img/service-icons/service-icon-1.svg" alt="illustration">
            <h3>Web Design And Development</h3>
            <p>We create beautiful websites that are effective marketing tools. Sleek design and functionality is
              vitally important.</p>
          </div>
          <div class="offer wow fadeIn" data-wow-delay="0.1s">
            <img class="img-responsive" src="img/service-icons/service-icon-2.svg" alt="illustration">
            <h3>Digital Marketing</h3>
            <p>It's not just about a website, It's about getting people there.</p>
          </div>
          <div class="offer wow fadeIn" data-wow-delay="0.1s">
            <img class="img-responsive" src="img/service-icons/service-icon-3.svg" alt="illustration">
            <h3>Search Engine Optimization (SEO)</h3>
            <p>We will help you by keeping your website at the top.</p>
          </div>
        </div>
      </div>
    </div>
    <div id="stats">
      <div class="container">
        <div class="row">
          <div class="stats-box text-center col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <span class="counter-value" data-count="74">0</span>
            <div class="stats-info">
              <p>Completed Projects</p>
            </div>
          </div>
          <div class="stats-box text-center col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <span class="counter-value" data-count="867">0</span>
            <div class="stats-info">
              <p>Mails Sents</p>
            </div>
          </div>
          <div class="stats-box text-center col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <span class="counter-value" data-count="1034">0</span>
            <div class="stats-info">
              <p>Coffee Takens</p>
            </div>
          </div>
          <div class="stats-box text-center col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <span class="counter-value" data-count="2682">0</span>
            <div class="stats-info">
              <p>Jokes Told</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="portfolio">
    <div class="container">
      <div class="row">
        <div class="title text-center col-xs-12 col-sm-12 col-md-12 col-lg-12 wow fadeIn" data-wow-delay="0.1s">
          <h2>Our Portfolio</h2>
          <p></p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
          <div class="text-center portfolio-filter">
            <ul>
              <li class="active-item" data-filter="*">All</li>
              <li data-filter=".web">Web</li>
              <li data-filter=".app">App</li>
              <li data-filter=".illustrations">Illustrations</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row work-items">
        <div class="item-box col-lg-4 col-md-4 col-sm-6 col-xs-12 web">
          <div class="single-item">
            <div class="img-box img-box-overlay">
              <img src="img/portfolio/asfand-x.jpg" alt="">
              <div class="overlay-text text-center">
                <a class="after-overlay" href="single-work.html">Asfand Sports</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item-box col-lg-4 col-md-4 col-sm-6 col-xs-12 web">
          <div class="single-item">
            <div class="img-box img-box-overlay">
              <img src="img/portfolio/weed-x.jpg" alt="">
              <div class="overlay-text text-center">
                <a class="after-overlay" href="single-work.html">Weed Fans</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item-box col-lg-4 col-md-4 col-sm-6 col-xs-12 app">
          <div class="single-item">
            <div class="img-box img-box-overlay">
              <img src="img/portfolio/awake.jpg" alt="">
              <div class="overlay-text text-center">
                <a class="after-overlay" href="single-work.html">Awakenings</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item-box col-lg-4 col-md-4 col-sm-6 col-xs-12 illustrations">
          <div class="single-item">
            <div class="img-box img-box-overlay">
              <img src="img/portfolio/builder-x.jpg" alt="">
              <div class="overlay-text text-center">
                <a class="after-overlay" href="single-work.html">Builder Sports</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item-box col-lg-4 col-md-4 col-sm-6 col-xs-12 web">
          <div class="single-item">
            <div class="img-box img-box-overlay">
              <img src="img/portfolio/euro.jpg" alt="">
              <div class="overlay-text text-center">
                <a class="after-overlay" href="single-work.html">Euro 1 Suppliments</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item-box col-lg-4 col-md-4 col-sm-6 col-xs-12 web">
          <div class="single-item">
            <div class="img-box img-box-overlay">
              <img src="img/portfolio/herbialis-x.jpg" alt="">
              <div class="overlay-text text-center">
                <a class="after-overlay" href="single-work.html">Herbiaiis</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item-box col-lg-4 col-md-4 col-sm-6 col-xs-12 web">
          <div class="single-item">
            <div class="img-box img-box-overlay">
              <img src="img/portfolio/juried-x.jpg" alt="">
              <div class="overlay-text text-center">
                <a class="after-overlay" href="single-work.html">Juried Art Service</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item-box col-lg-4 col-md-4 col-sm-6 col-xs-12 app">
          <div class="single-item">
            <div class="img-box img-box-overlay">
              <img src="img/portfolio/cell-device.jpg" alt="">
              <div class="overlay-text text-center">
                <a class="after-overlay" href="single-work.html">Mobile Sites</a>
              </div>
            </div>
          </div>
        </div>
        <div class="item-box col-lg-4 col-md-4 col-sm-6 col-xs-12 app">
          <div class="single-item">
            <div class="img-box img-box-overlay">
              <img src="img/portfolio/fitness-x.jpg" alt="">
              <div class="overlay-text text-center">
                <a class="after-overlay" href="single-work.html">Superfit Max</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="btn-style text-center wow fadeIn" data-wow-duration="2s">
            <a href="portfolio.html">All My Works</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="about">
    <div class="container">
      <div class="row">
        <div class="title text-center col-xs-12 col-sm-12 col-md-12 col-lg-12 wow fadeIn" data-wow-delay="0.1s">
          <h2>About Us</h2>
          <ul>
            <li>
              Zeemaar Web is a professional website development and web design company, offering affordable web design
              services. We offer a complete range of services pertaining to your web presence, from conceptualization
              till escorting you to the destination.
            </li>
            <li>
              Zeemaar Web is packed with highly skilled web designers, developers, copywriters, and SEO experts.
              Excellence of Web design services and affordability of budget makes us choicest amongst all, and founded
              a global clientele for us.
            </li>
            <li>
              We offer quality web development, software development and several other IT services, including Web
              Designing. Application Development.
            </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12">
          <div class="about-illustration">
            <img class="img-responsive wow slideInLeft" data-wow-duration="2s" src="img/hero-illustration3.svg" alt="illustration">
          </div>
        </div>
        <div class="col-lg-7 col-md-5 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.1s">
          <div class="about-info">
            <h2>Hi There!!!</h2>
            <p>Vivamus suscipit tortor eget felis porttitor volutpat. Mauris blandit aliquet elit, eget tincidunt nibh
              pulvinar a. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Proin
              eget tortor risus.</p>
            <div>
              <a href="#">
                <i class="fab fa-dribbble"></i>
              </a>
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-behance"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="partners">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 wow fadeIn" data-wow-delay="0.1s">
            <img class="partner-logo aligncenter img-responsive" src="img/partners/excalibur.png" alt="illustration">
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 wow fadeIn" data-wow-delay="0.1s">
            <img class="partner-logo aligncenter img-responsive" src="img/partners/herbialis.png" alt="illustration">
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 wow fadeIn" data-wow-delay="0.1s">
            <img class="partner-logo aligncenter img-responsive" src="img/partners/elp.png" alt="illustration"> </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 wow fadeIn" data-wow-delay="0.1s">
            <img class="partner-logo aligncenter img-responsive w-38" src="img/partners/anvilmax.png" alt="illustration">
          </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 wow fadeIn" data-wow-delay="0.1s">
            <img class="partner-logo aligncenter img-responsive" src="img/partners/logo5.svg" alt="illustration"> </div>
          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 wow fadeIn" data-wow-delay="0.1s">
            <img class="partner-logo aligncenter img-responsive" src="img/partners/logo6.svg" alt="illustration"> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="quotes">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.1s">
          <div class="quote-box">
            <div class="quote-info">
              <div class="qute-avatar">
                <img src="img/avatar.jpg" alt="avatar"> </div>
              <div class="contact-info">
                <p>Ammar</p>
                <span>Landgreen Lawn Care</span>
              </div>
            </div>
            <div class="quote-text">
              <p>"Zeemaar has transformed our homemade website into a professional site that has exceeded our
                expectations. We have an excellent platform to show off our lawn care business. They met the deadline
                they set and have followed through with all
                our requests. Many people have already complemented on how well it looks!"</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.1s">
          <div class="quote-box">
            <div class="quote-info">
              <div class="qute-avatar">
                <img src="img/avatar.png" alt="avatar"> </div>
              <div class="contact-info">
                <p>Rick</p>
                <span>Shutters & Shades</span>
              </div>
            </div>
            <div class="quote-text">
              <p>"Let this serve as our heartfelt recommendation to use of Zeemaar Web Marketing to web site and search
                engine optimization work. They did everything we asked of them and done in an equally timely manner.
                Their positive energy and enthusiasm
                are totally uplifting and he's backed that up with expertise in his work."</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.1s">
          <div class="quote-box">
            <div class="quote-info">
              <div class="qute-avatar">
                <img src="img/avatar.png" alt="avatar"> </div>
              <div class="contact-info">
                <p>Jeff</p>
                <span>Jostens of Northern Michigan</span>
              </div>
            </div>
            <div class="quote-text">
              <p>"The team at Zeemaar ensures that our website is always running at peak performance. Their attention
                to detail and timely handing of our website issues is the reason we keep coming back to them for all of
                our website support needs."</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="blog">
    <div class="container">
      <div class="row">
        <div class="title text-center col-xs-12 col-sm-12 col-md-12 col-lg-12 wow fadeIn" data-wow-delay="0.1s">
          <h2>From My Blog</h2>
          <p>Read our informative and intresting blog</p>
        </div>
      </div>
      <div class="row">
        <?php

        while ($row = $stmt->fetch()) {
          $datetime = $row['post_date'];
          $time = strtotime($datetime);
          $myFormatForView = date("m/d/y g:i A", $time);
          // $loop = new WP_Query( array( 'post_type' => 'page', 'meta_key' => '_thumbnail_id' ) );

          // // strip tags to avoid breaking any html
          // $string = strip_tags($row['post_content']);
          // if (strlen($string) > 500) {
          //
          //     // truncate string
          //     $stringCut = substr($string, 0, 500);
          //     $endPoint = strrpos($stringCut, ' ');
          //
          //     //if the string doesn't contain any space then it will cut without word basis.
          //     $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
          //     $string .= '... <a href="/this/story">Read More</a>';
          // }


         ?>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="0.1s">

          <div class="blog-box">
            <div class="blog-info">
              <span><?php echo $myFormatForView; ?></span>
              <h4><?php echo $row['post_title']; ?></h4>
              <!-- <p><?php echo $string; ?> -->
              <p><?php echo $row['post_content'] ?>
              </p>
              <!-- <img src="blog/wp-content/uploads/<?php echo $loop ?>" alt=""> -->
              <div class="blog-btn">
                <a href="<?php echo $row['guid']; ?>">Read More</a>
              </div>
          </div>
        </div>
      </div>
    <?php } ?>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="btn-style text-center wow fadeIn" data-wow-duration="2s">
            <a href="blog">All Blog Stories</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="pricing">
    <div class="container">
      <div class="row">
        <div class="title text-center col-xs-12 col-sm-12 col-md-12 col-lg-12 wow fadeIn" data-wow-delay="0.1s">
          <h2>Our Pricing</h2>
          <p></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-xs-12 col-sm-12 wow fadeIn" data-wow-delay="0.1s">
          <div class="text-center price-table">
            <h4>Web Design & Development</h4>
            <div class="price-icon">
              <img src="img/service-icons/service-icon-1.svg" alt="illustration"> </div>
            <ul>
              <li>Modern Design</li>
              <li>Custom Website Design</li>
              <li>Mobile Web Design</li>
              <li>Fully Responsive</li>
              <li>Dynamic & Static Websites</li>
              <li>Clean Code</li>
            </ul>
            <div class="price">
              <p>$160
                <span>/ Starting from</span>
              </p>
            </div>
            <div class="price-table-btn">
              <button type="button" name="button">Select</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-12 wow fadeIn" data-wow-delay="0.1s">
          <div class="text-center price-table">
            <h4>Graphic Design</h4>
            <div class="price-icon">
              <img src="img/service-icons/service-icon-3.svg" alt="illustration"> </div>
            <ul>
              <li>Modern Design</li>
              <li>Vector File</li>
              <li>PSD file</li>
              <li>High Resolution</li>
              <li>Clean Design</li>
              <li>Custom Design</li>
            </ul>
            <div class="price">
              <p>$89
                <span>/ Starting From</span>
              </p>
            </div>
            <div class="price-table-btn">
              <button type="button" name="button">Select</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-12 wow fadeIn" data-wow-delay="0.1s">
          <div class="text-center price-table">
            <h4>SEO</h4>
            <div class="price-icon">
              <img src="img/service-icons/service-icon-2.svg" alt="illustration"> </div>
            <ul>
              <li>SEO Website Analysis</li>
              <li>In-depth keywords Analysis</li>
              <li>On-page Optimization</li>
              <li>Off-page Optimization</li>
              <li>Content Development</li>
              <li>Link Building</li>
            </ul>
            <div class="price">
              <p>$120
                <span>/ Strating from</span>
              </p>
            </div>
            <div class="price-table-btn">
              <button type="button" name="button">Select</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-12 wow fadeIn" data-wow-delay="0.1s">
          <div class="text-center price-table">
            <h4>Digital Marketing</h4>
            <div class="price-icon">
              <img src="img/service-icons/service-icon-2.svg" alt="illustration"> </div>
            <ul>
              <li>Email Marketing</li>
              <li>Social Media Marketing</li>
              <li>Search Engine Marketing</li>
              <li>Blogging</li>
              <li>Google Ads - PPC</li>
              <li>Branding</li>
            </ul>
            <div class="price">
              <p>$150
                <span>/ Starting from</span>
              </p>
            </div>
            <div class="price-table-btn">
              <button type="button" name="button">Select</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-12 wow fadeIn" data-wow-delay="0.1s">
          <div class="text-center price-table">
            <h4>E-Commerce Solutions</h4>
            <div class="price-icon">
              <img src="img/service-icons/service-icon-1.svg" alt="illustration"> </div>
            <ul>
              <li>Import/Export Websites Development</li>
              <li>Order Management</li>
              <li>Payment Gateway Integration</li>
              <li>SSL Certificate Solution</li>
              <li>Online Shopping Store</li>
              <li>Image Upload For The Products</li>
            </ul>
            <div class="price">
              <p>$270
                <span>/ Starting from</span>
              </p>
            </div>
            <div class="price-table-btn">
              <button type="button" name="button">Select</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-12 wow fadeIn" data-wow-delay="0.1s">
          <div class="text-center price-table">
            <h4>Web Hosting</h4>
            <div class="price-icon">
              <img src="img/service-icons/service-icon-2.svg" alt="illustration"> </div>
            <ul>
              <li>24/7 Support & Administration</li>
              <li>Super Fast Severs</li>
              <li>Easy To Use Control Panel</li>
              <li>Web Based Email Access</li>
              <li>99.99% Uptime Guarantee</li>
              <li>Affordable Rates</li>
            </ul>
            <div class="price">
              <p>$49
                <span>/ Starting from</span>
              </p>
            </div>
            <div class="price-table-btn">
              <button type="button" name="button">Select</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="contac-title title text-center col-xs-12 col-sm-12 col-md-12 col-lg-12 wow fadeIn" data-wow-delay="0.1s">
          <h2>Feel Free To Contact Us For Any Query</h2>
          <p>We are always here for you.</p>
        </div>
      </div>
      <div class="row">
        <div class="form-box col-xs-12 col-sm-8 col-md-8 col-lg-8 wow fadeIn" data-wow-delay="0.1s">
          <div id="mail-status"></div>
          <!-- <form class="form"> -->
            <div class="field form-group">
              <input type="text" class="form-control demoInputBox" name="userName" id="userName" placeholder="Your Name" tabindex="1"> </div>
              <span id="userName-info" class="info"></span>
            <div class="field form-group">
              <input type="email" class="form-control demoInputBox" name="userEmail" id="userEmail" placeholder="Your Email" tabindex="2">
              <span id="userEmail-info" class="info"></span>
            </div>
            <div class="field form-group">
              <textarea rows="5" cols="50" class="form-control demoInputBox" name="content" id="content" placeholder="Message Here" tabindex="4"></textarea>
              <span id="content-info" class="info"></span>
            </div>
            <div class="field btn-style text-center" data-wow-duration="2s">
              <button onClick="sendContact();" name="submit" class="btnAction">Send Message</button>
            </div>
          <!-- </form> -->
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
          <div class="contact--us">
            <div class="contact--us__email">
            <h3>get in touch</h3>
            <h4>For support or any question</h4>
            <p>Email us at <a href="mailto:info@zeemaar.com">info@zeemaar.com</a></p>
          </div>
          <div class="contact--us__address">
            <h4><img src="img/ico/uae.png" alt="icon-uae"> Address 1</h4>
            <p>Al Baraha - Deira - Dubai</p>
            <p>United Arab Emirates</p>
            <p><a href="tel:+971553971476"><i class="fas fa-mobile-alt"></i> (+971) 55-3971476</a></p>
          </div>
          <br>
          <div class="contact--us__address">
            <h4><img src="img/ico/pakistan.png" alt="icon-pakistan"> Address 2</h4>
            <p>Paris Road - Sialkot - Punjab</p>
            <p>Pakistan</p>
            <p><a href="tel:+923068971173"><i class="fas fa-mobile-alt"></i> (+92) 306-8971173</a></p>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- newsletter popup -->

  <!-- newsletter popup -->
  <footer class="footer" id="footer">
    <div class="container">
      <div class="row">
        <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12 wow fadeIn" data-wow-delay="0.1s">
          <div>
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://wa.me/971553971476?text=I%20have%20a%20question">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="#">
              <i class="fab fa-pinterest-p"></i>
            </a>
            <a href="#">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <p> Zeemaar © 2018</p>
        </div>
      </div>
    </div>

  </footer>
  <!-- <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top
    <span></span>
  </a> -->
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scrollreveal.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/my.js?key=<?php echo time(); ?>"></script>
  <script src="js/particles.min.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdc9BzbbBEerUMDGWVxwDcHJ87dMb02Rw&callback=initMap"
    async defer></script> -->
  <script type="text/javascript">
    $(function () {
      $(document).scroll(function () {
        var $nav = $(".navbar-fixed-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
      });
    });
  </script>
  <script>
    particlesJS.load('particles-js', 'particles.json', function () {

    });
  </script>

<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us19.list-manage.com","uuid":"3830fb05dc9e001508110e3a9","lid":"cf85879577","uniqueMethods":true}) })</script>

<!-- Load Facebook SDK for JavaScript -->
<!-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> -->

<!-- Your customer chat code -->
<!-- <div class="fb-customerchat"
  attribution=setup_tool
  page_id="270907396942805"
  theme_color="#0084ff">
</div> -->


  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5bbefdaa08387933e5badc4e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>


</html>
