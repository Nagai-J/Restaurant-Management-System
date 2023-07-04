<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Restaurant Management System</title>
    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Lemonada:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <script src="js/jquery.js"></script>
  </head>
  <body>
    <header id="header">
      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#special">Special</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
      <div class="fas fa-hamburger"></div>

      <a href="#" class="logo"><img src="images/logo.jpg " alt="" /></a>
    </header>

    <section id="home" class="container-fluid">
      <div class="row min-vh-100 align-items-center">
        <div class="col-md-8 m1-md-5 text-md-left text-center content">
          <h1>Food you can't resist</h1>
          <h2>Enjoy the marvelous taste</h2>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus
            aut modi voluptate veniam reprehenderit suscipit commodi placeat
            possimus, ratione tenetur!
          </p>

          <a href="signup.php"><button>get started</button></a>
        </div>

        <div class="video-container">
          <video src="images/vid1.mp4" autoplay loop class="vid vid1"></video>
          <video src="images/vid2.mp4" autoplay loop class="vid vid2"></video>
          <video src="images/vid3.mp4" autoplay loop class="vid vid3"></video>
        </div>
        <div class="controls">
          <div class="dots dot1"></div>
          <div class="dots dot2"></div>
          <div class="dots dot3"></div>
        </div>
      </div>
    </section>

    <section id="special" class="container-fluid">
      <div class="heading text-center">
        <h1>our <span>special</span>
        <p>  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque,
        incidunt.</p>
      </h1>
      </div>
      <div class="card-container">
        <div class='card'>
          <img src="images/card1.jpg" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur nihil placeat nobis expedita, repudiandae at.</p>
          <a href="#"><button>Read More</button></a>
        </div>
         
        <div class='card'>
        <img src="images/card2.jpg" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur nihil placeat nobis expedita, repudiandae at.</p>
        <a href="#"><button>Read More</button></a>
      </div>

      
      <div class='card'>
      <img src="images/card3.jpg" alt="">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur nihil placeat nobis expedita, repudiandae at.</p>
      <a href="#"><button>Read More</button></a>
    </div>
    </div>
    

      </div>
    </section>


    <section id="about" class='container'>
      <div class="heading text-center">
        <h1><span>about</span> us</h1>
      </div>

      <div class="row min-vh-100">
        <div class="col-md-6 text-center text-md-left align-self-center content">

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quasi
             velit animi ad magnam ut quidem assumenda ipsum non esse consequuntur
              incidunt, itaque quos excepturi.</p>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                 Rerum expedita aliquam exercitationem! Adipisci, amet aut.</p>

                 <a href="#"><button>learn more</button></a>
        </div>

        <div class="col-md-6 image">
          <img src="images/pic.jpg" alt="">
        </div>
 

      
      </div>

    </section>
    <script>
      $(document).ready(function () {
        $(".fa-hamburger").click(function () {
          $(this).toggleClass("fa-times");
          $("nav").toggleClass("nav-toggle");
        });

        $("nav ul li a").click(function () {
          $(".fa-hamburger").removeClass("fa-times");
          $("nav").removeClass("nav-toggle");
        });

        $(".dot1").click(function () {
          $(".vid1").css("display", "block");
          $(".vid2").css("display", "none");
          $(".vid3").css("display", "none");
        });

        $(".dot2").click(function () {
          $(".vid2").css("display", "block");
          $(".vid1").css("display", "none");
          $(".vid3").css("display", "none");
        });
        $(".dot3").click(function () {
          $(".vid3").css("display", "block");
          $(".vid1").css("display", "none");
          $(".vid2").css("display", "none");
        });

        $(window).on('scroll load',function(){
          if($(window).scrollTop() > 10){
            $('header').addClass('header-active');
          }else{
            $('header').removeClass('header-active');
          }

        });
      });
    </script>
  </body>
</html>
