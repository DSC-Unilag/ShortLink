<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./public/css/index.css">
    <link rel="stylesheet" type="text/css" href="./public/css/navbar.css">
    <script src="https://kit.fontawesome.com/a8fd097106.js" crossorigin="anonymous"></script>
    <title>ShortLink | WELCOME </title>
</head>
<body>
<!--     The navigation section is going to be created just like a component.
    to reuse on another page , simply copy the nav tag and paste in your page. then add the navbar.css file and navigation.js link in your html file -->
    <nav class="navbar" id="navbar">
        <span class="navbar-toggle" id="navbar-toggle">
          <i class="fas fa-bars"></i>
        </span>
        <a class="title" href="#"><span class="first"><</span><span class="slash">/</span><span class="second">></span> ShortLink</span></a>
        <ul id="nav-menu" class="nav-menu">
            <!-- <li><a class="nav-links" href="#">Home</a></li> -->
            <li><a class="nav-links" href="#">About</a></li>
            <li><a class="nav-links" href="#">FAQs</a></li>
            <li><a class="nav-links" href="#">Sign In</a></li>
            <li><a class="nav-links" href="#">Register</a></li>
        </ul>
    </nav>

    <!-- main section of the landing  page -->
    <main  style="padding-top: 40px;">
      <section id="hero" class="hero next">
        <div class="hero-writeup">
          <h2>ShortLink for DSCs</h2>
          <p>Explore the features and benefits that come with being a member of this platform. From small breakout sessions to large hakathons,  ShortLink provides a platform for overseeing all your DSC chapter's events.</p>
          <button type="button" name="button">get started</button>
        </div>
        <div class="login-form">
          <form class="" method="get">
            <h2>sign in</h2>
            <input type="text" name="" value="" placeholder="Username"> <br>
            <input type="password" name="" value="" placeholder="Password"><br>
            <div><input type="checkbox" name="" value=""> &nbsp; remember me</div>
            <br><br>
            <input type="submit" name="" value="sign in">
            <p>Not yet a member ? <a href="#">Sign Up</a><br/> <a href="#">Forgot password</a></p>
          </form>
        </div>
      </section>
      <section id="about" class="about">
        <h3 class="section-title">ShortLink Features</h3> <hr class="underline">
        <div class="features-area">
          <div class="card">
            <div class="card-icon">
            </div>
            <div class="card-writeup">
              <h3>URL Shortening</h3>
              <p>ShortLink provides a url shortening feature that enables you render long links memorable</p>
            </div>
            <button type="button" name="button">Get started</button>
          </div>
          <div class="card">
            <div class="card-icon">
            </div>
            <div class="card-writeup">
              <h3>URL Shortening</h3>
              <p>ShortLink provides a url shortening feature that enables you render long links memorable</p>
            </div>
            <button type="button" name="button">Get started</button>
          </div>
          <div class="card">
            <div class="card-icon">
            </div>
            <div class="card-writeup">
              <h3>URL Shortening</h3>
              <p>ShortLink provides a url shortening feature that enables you render long links memorable</p>
            </div>
            <button type="button" name="button">Get started</button>
          </div>
        </div>
        <div class="contributors">
          <div class="">
          </div>
          <div class="">
            <img src="" alt="">
          </div>
        </div>
      </section>
      <div class="benefits">
        <h4>ShortLink for DSCs</h4> <hr class="underline" style="border-color:#fff">
        <p>Handle your events through your links ; have an oversight of possible attendees at your upcoming events along with other analysis provided to you as user of ShortLink</p>
        <center><button type="button" name="button">Become A Member</button></center>
      </div>
    </main>
    <footer>
      <div class="flex-container">
        <div class="footer-about">
          <h2>ShortLink</h2>
          <p>shortlink is an intiative of the Developer Student Club , DSC Unilag. The aim of shortlink is to serve as a platform where DSCs can schedule upcoming events</p>

        </div>
        <div class="quick-links">

        </div>
        <div class="copyright">
        </div>
      </div>
    </footer>
    <script src="./public/js/jquery-2.2.3.min.js"></script>
    <script src="./public/js/navbar.js"></script>
    <script>
      if (window.innerWidth >=768) {
         const hero = document.getElementById('hero');
      hero.style.height= window.innerHeight + 'px';
      }
    </script>
</body>
</html>
