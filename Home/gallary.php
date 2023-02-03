<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gallary</title>
  <link rel="stylesheet" href="../assets/css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="../assets/css/slider_1.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="../assets/css/home.css">
</head>

<body>
<nav>
    <div class="menu">
      <div class="logo">
        <a href="#">CamDetail</a>
      </div>
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="#">Gallary</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contacUs.php">Contact</a></li>
        <li><a href="../logout process.php">Logout</a></li>
      </ul>
    </div>
  </nav>
  <section class="main swiper mySwiper">
    <div class="wrapper swiper-wrapper">
      <div class="slide swiper-slide">
        <img src="../assets/image/img1.jpg" alt="" class="image" />
        <div class="image-data">
          <span class="text">Enjoy the Best Photograps.</span>
          <h2>
            A photograph is usually looked at <br />
            - seldom looked into
          </h2>
          <a href="#" class="button">About Us</a>
        </div>
      </div>
      <div class="slide swiper-slide">
        <img src="../assets/image/img2.jpg" alt="" class="image" />
        <div class="image-data">
          <span class="text">We really like what we do.</span>
          <h2>
            It is more important to click <br />
            with people than to click the shutter.
          </h2>
          <a href="aboutUs.php" class="button">About Us</a>
        </div>
      </div>
      <div class="slide swiper-slide">
        <img src="../assets/image/img3.jpg" alt="" class="image" />
        <div class="image-data">
          <span class="text">Making Our Destiny.</span>
          <h2>
            The painter constructs,<br />
            the photographer discloses.
          </h2>
          <a href="#" class="button">About Us</a>
        </div>
      </div>
    </div>

    <div class="swiper-button-next nav-btn"></div>
    <div class="swiper-button-prev nav-btn"></div>
    <div class="swiper-pagination"></div>
  </section>

  <!-- Swiper JS -->
  <script src="../assets/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>

</html>