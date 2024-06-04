<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Page</title>
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
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
      background-image: url('./img/bg.jpeg');
      background-size: cover;
      background-repeat: no-repeat;
      margin: 0;
      padding: 0;
      position: relative;
    }

    .container {
      max-width: 1300px;
      margin: 50px auto;
      position: relative;
    }

    .left {
      width: calc(50% - 10px); /* 50% lebar container dikurangi 10px untuk jarak */
      float: left;
      padding-right: 100px; /* Tambahkan padding kanan untuk jarak */
      position: absolute;
    }

    .right {
        padding-top: 200px;
      width: calc(50% - 10px); /* 50% lebar container dikurangi 10px untuk jarak */
      float: right;
      padding-right: 100px; /* Tambahkan padding kiri untuk jarak */
      position: relative;
    }

    h1 {
        padding-top: 240px;
      font-size: 7rem;
      margin-bottom: 0;
      color: #fff;
    }

    .buttons {
      display: flex;
      flex-direction: column;
      align-items: flex-end;
      position: absolute;
      right: 0;
      transform: translateY(-50%);
      padding-top: 250px;
    }

  .button1 {
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
    font-size: 35px;
    padding: 15px 20px;
    margin: 10px 0;
    border: none;
    border-radius: 30px;
    background-color: #b9f501;
    color: #000;
    cursor: pointer;
    transition: background-color 0.3s;
    background-image: url('./img/phone.png');
    background-size: 50px; /* Adjusted size of the icon */
    background-position: 20px center; /* Adjusted position of the icon */
    background-repeat: no-repeat;
    padding-left: 90px; /* Adjusted padding */
    display: flex;
    align-items: center; /* Center the text and icon vertically */
  }

  .button2 {
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
    font-size: 35px;
    padding: 15px;
    margin: 10px 0;
    border: none;
    border-radius: 30px;
    background-color: #b9f501;
    color: #000;
    cursor: pointer;
    transition: background-color 0.3s;
    background-image: url('./img/star.png');
    background-size: 50px; /* Adjusted size of the icon */
    background-position: right 20px center; /* Adjusted position of the icon */
    background-repeat: no-repeat;
    padding-right: 90px; /* Adjusted padding */
    display: flex;
    align-items: center; /* Center the text and icon vertically */
  }

  .button3 {
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
    font-size: 35px;
    padding: 15px 20px;
    margin: 10px 0;
    border: none;
    border-radius: 30px;
    background-color: #b9f501;
    color: #000;
    cursor: pointer;
    transition: background-color 0.3s;
    background-image: url('./img/coin.png');
    background-size: 50px; /* Adjusted size of the icon */
    background-position: 20px center; /* Adjusted position of the icon */
    background-repeat: no-repeat;
    padding-left: 90px; /* Adjusted padding */
    display: flex;
    align-items: center; /* Center the text and icon vertically */
  }

  .button4 {
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
    font-size: 35px;
    padding: 15px;
    margin: 10px 0;
    border: none;
    border-radius: 30px;
    background-color: #b9f501;
    color: #000;
    cursor: pointer;
    transition: background-color 0.3s;
    background-image: url('./img/gear.png');
    background-size: 50px; /* Adjusted size of the icon */
    background-position: right 20px center; /* Adjusted position of the icon */
    background-repeat: no-repeat;
    padding-right: 90px; /* Adjusted padding */
    display: flex;
    align-items: center; /* Center the text and icon vertically */
  }

    .button:hover {
      background-color: #92c701;
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
    <a href="#" class="navbar-logo">Lets<span> SPORTS</span></a>

    <div class="navbar-nav">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="booking.php">Booking</a>
      <a href="contact.php">Contact</a>
      <a href="signin.php">Sign in</a>
      <a href="register.php">Sign up</a>
    </div>
  </nav> 
  <!-- navbar end -->

  <div class="container">
    <div class="left">
      <h1>WHY US?</h1>
    </div>
    <div class="right">
      <div class="buttons">
        <button class="button1">Easy Booking System</button>
        <button class="button2">Top-notch Facilities</button>
        <button class="button3">Affordable Pricing</button>
        <button class="button4">Diverse Court Options</button>
      </div>
    </div>
    <div style="clear: both;"></div>
  </div>

  <!-- feather icons  -->
  <script>
    feather.replace();
  </script>

  <!-- my javascript  -->
  <script src="js/script.js"></script>
</body>
</html>
