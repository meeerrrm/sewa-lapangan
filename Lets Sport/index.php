<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lets SPORTS</title>

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet"/>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- feather icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- CSS -->
  <style>
    :root {
      --primary: #b9f501;
      --BG: #000000;
      --oth: #626262;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      outline: none;
      border: none;
      text-decoration: none;
    }

    body {
      font-family: "Poppins", sans-serif;
      background-color: var(--BG);
      color: #b9f501;
    }

    /* Navbar */
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.4rem; /* Modified padding */
      background-color: #000000;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 9999;
    }

    .navbar .navbar-logo {
      font-size: 20px;
      font-weight: 700;
      color: #fff;
      border-radius: 50px;
      background-color: #b9f501;
      padding: 5px 30px;
    }

    .navbar .navbar-logo span {
      color: var(--BG);
    }

    .navbar .navbar-nav {
      display: flex;
      justify-content: center; /* Centering navbar items */
      margin-left: auto;
    }

    .navbar .navbar-nav a {
      color: #b9f501;
      display: inline-block;
      font-size: 1.4rem; /* Corrected font size */
      margin: 0 1rem;
    }

    .navbar .navbar-nav a::after {
      content: "";
      display: block;
      padding-bottom: 0.5rem;
      border-bottom: 0.1rem solid var(--primary);
      transform: scaleX(0);
      transition: 0.2s linear;
    }

    .navbar .navbar-nav a:hover::after {
      transform: scaleX(0.5);
    }

    /* Hero section */
    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background-image: url("./img/header-bg.jpeg.png");
      background-repeat: no-repeat;
      background-position: center;
      background-size:cover;
      font-size: 35px;
    }

    /* About Section */
    .about-container {
        
         background-image: url('./img/bg.jpeg');
       width: 100%;
  height: 100vh; 
  text-align: center;
  border: 10px solid #b9f501; 
  padding: 20px; 
  box-sizing: border-box; 
  position: relative; /
    }

    .about-left {
      width: calc(50% - 10px); 
      float: left;
      padding-right: 100px; 
    }

    .about-right {
      padding-top: 200px;
      width: calc(50% - 10px); 
      float: right;
      padding-right: 100px; 
      position: relative;
    }

    .about-title {
      padding-top: 200px;
      font-size: 7rem;
      margin-bottom: 0;
      color: #fff;
    }

    .about-buttons {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      position: absolute;
      right: 0;
      transform: translateY(-50%);
      padding-top: 250px;
    }

    .about-button {
      font-family: 'Poppins', sans-serif;
      font-weight: bold;
      font-size: 40px;
      padding: 15px 20px;
      margin: 10px 0;
      border: none;
      border-radius: 30px;
      background-color: #b9f501;
      color: #000;
      cursor: pointer;
      transition: background-color 0.3s;
      display: flex;
      align-items: center; 
    }

    .about-button img {
      width: 60px; 
      margin-right: 20px; 
    }

    .about-button:hover {
      background-color: #92c701;
    }
    
    /* Booking Section */
   .booking-container {
  width: 100%;
  height: 100vh; 
  text-align: center;
  border: 10px solid #b9f501; 
  padding: 20px; 
  box-sizing: border-box; 
  position: relative; /* Jadikan posisi relatif untuk menetapkan posisi absolut gambar */
}

    .booking-title {
      font-size: 3rem;
    }

    .booking-description {
      font-size: 1.5rem;
      line-height: 1.6;
    }

    .clickable-image img {
      width: 300px; 
      height: auto; 
    }

    .basket {
      top: 50%;
      left: 25%; 
      transform: translate(-50%, -50%); 
      position: absolute; 
    }

    .futsal {
      top: 50%;
      left: 50%; 
      transform: translate(-50%, -50%); 
      position: absolute; 
    }

    .badminton {
      top: 50%;
      left: 75%; 
      transform: translate(-50%, -50%); 
      position: absolute; 
    }
/* Style for header */
 .contact-container {
     
  width: 100%;
  height: 150vh; 
  text-align: center;
  border: 10px solid #b9f501; 
  padding: 20px; 
  box-sizing: border-box; 
  position: relative; /* Jadikan posisi relatif untuk menetapkan posisi absolut gambar */
}
        .contact-header {
            background-image: url('img/footer.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 520px;
            position: relative;
        }

        /* Style for logo container */
        .contact-logo-container {
            padding-top: 500px;
            padding-left: 60px;
            text-align: left;
            margin-top: 20px;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
        }

        /* Style for logo */
        .contact-logo {
            width: 200px;
        }

        /* Style for company section */
        .contact-company-section {
            padding-top: 240px;
            padding-left: 200px;
            position: absolute;
            left: calc(200px + 60px);
            transform: translateY(-50%);
            text-align: left;
            z-index: 1;
        }

        .contact-company-section h2 {
            color: #B9F501;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .contact-company-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .contact-company-section li {
            margin-bottom: 5px;
        }

        .contact-company-section a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s ease;
        }

        .contact-company-section a:hover {
            color: #B9F501;
        }

        /* Style for button container */
        .contact-button-container {
            padding-left: 500px;
            position: absolute;
            padding-top: 180px;
            left: calc(200px + 60px);
            transform: translateY(-50%);
            z-index: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
            text-decoration: none;
        }

        .contact-button-container button {
            padding: 10px 20px;
            cursor: pointer;
            background-color: #B9F501;
            border: none;
            border-radius: 5px;
            color: #000;
            font-weight: bold;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .contact-button-container button:hover {
            background-color: #fff;
            color: #000;
        }

        /* Style for social media icons */
        .contact-social-media {
            position: absolute;
            padding-top: 80px;
            right: 160px;
            transform: translateY(-50%);
            z-index: 1;
        }

        .contact-social-media a {
            color: #B9F501;
            font-size: 24px;
            margin-left: 20px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-social-media a:hover {
            color: #fff;
        }

        /* Style for text */
        .contact-text {
            font-size: 1rem;
            padding-top: 300px;
            padding-bottom: 100px;
        }
    /* Media Queries */

    /* Tablet */
    @media (max-width: 768px) {
      html {
        font-size: 62.5%;
      }
      .navbar .navbar-nav {
        position: absolute;
        top: 100%;
        right: -100%;
        background-color: #b9f501;
        width: 30rem;
        height: 100vh;
        transition: 0.3s; /* Corrected transition value */
      }
      .navbar .navbar-nav.active {
        right: 0;
      }
    }

    /* Mobile Phone */
    @media (max-width: 450px) {
      html {
        font-size: 55%;
      }
    }
  </style>
</head>
<body>
  <!-- navbar start -->
  <nav class="navbar">
    <a href="#Home" class="navbar-logo">Lets<span> SPORTS</span></a>

    <div class="navbar-nav">
      <a href="#Home">Home</a>
      <a href="#about">About</a>
      <a href="#booking">Booking</a>
      <a href="#contact">Contact</a>
      <a href="signin.html">Sign in</a>
      <a href="register.php">Sign up</a>
    </div>
  </nav> 
  <!-- navbar end -->

  <!-- hero section start -->
  <section class="hero" id="Home">
    <main class="content">
      <h1>DISCOVER YOUR SPORT WITH US</h1>
    </main>
  </section>
  
  <!-- About Section -->
  <section id="about">
    <div class="about-container">
      <div class="about-left">
        <h1 class="about-title">WHY US?</h1>
      </div>
      <div class="about-right">
        <div class="about-buttons">
          <button class="about-button">
            <img src="./img/phone.png" alt="Phone icon"> Easy Booking System
          </button>
          <button class="about-button">
            <img src="./img/star.png" alt="Star icon"> Top-notch Facilities
          </button>
          <button class="about-button">
            <img src="./img/coin.png" alt="Coin icon"> Affordable Pricing
          </button>
          <button class="about-button">
            <img src="./img/gear.png" alt="Gear icon"> Diverse Court Options
          </button>
        </div>
      </div>
      <div style="clear: both;"></div>
    </div>
  </section>

  <!-- Booking Section -->
  <section id="booking">
    <div class="booking-container">
      <h2 class="booking-title">Choose Your Sport</h2>
     
        <!-- Menambahkan gambar-gambar yang dapat diklik -->
        <a href="futsal.php" class="futsal clickable-image">
          <img src="./img/futsal.png" alt="Futsal">
        </a>
        <a href="basket.php" class="basket clickable-image">
          <img src="./img/basket.png" alt="Basket">
        </a>
        <a href="badminton.php" class="badminton clickable-image">
          <img src="./img/badminton.png" alt="Badminton">
        </a>
     
    </div>
  </section>
  
  <section id="contact">
        <div class="contact-container">
    <!--<div class="contact-logo-container">-->
    <!--    <img src="img/logo.png" alt="Logo" class="contact-logo">-->
    <!--    <h4>@copyright</h4>-->
    <!--</div>-->
<div class="contact-header">
    
    </div>
    <div class="contact-company-section">
        <h2>Company</h2>
        <br>
        <ul>
            <li><a href="about.php">About us</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Teams</a></li>
            <li><a href="contact.php">Contact us</a></li>
        </ul>
    </div>

    <div class="contact-button-container">
        <!-- Mengarahkan tombol "Contact Us" ke halaman website -->
        <button><a href="contact.php">Contact Us</a></button>
        <!-- Mengarahkan tombol "Booking Now" ke halaman website -->
        <button><a href="booking.php">Booking Now</a></button>
    </div>

    <!-- Social Media Icons -->
    <div class="contact-social-media">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-github"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
    </div>
 </div>

  </section>

  <!-- feather icons  -->
  <script>
    feather.replace();
  </script>

  <!-- my javascript  -->
  <script src="js/script.js"></script>
</body>
</html>
