<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Page</title>
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
  /* CSS */
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
      justify-content: center;
      margin-left: auto;
    }

    .navbar .navbar-nav a {
      color: #b9f501;
      display: inline-block;
      font-size: 1.4rem;
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

    /* Konten Signin */
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding-top: 125px;
    }

    .login-form {
      background-color: #B9F501;
      border: 5px solid #000;
      padding: 20px;
      text-align: center;
      height: 450px;
      width: 80%;
      margin: auto;
    }

    .form-group {
      margin-bottom: 20px;
      padding-left: 100px;
      text-align: left; /* Align label text to the left */
      padding-right: 400px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      color: #000; /* Added color */
      font-size: 1rem;
    }

    h2 {
      font-size: 3rem;
      padding-bottom: 20px;
      color: #000; /* Added color */
    }

    .form-group input {
      width: 100%;
      padding: 8px;
      border-radius: 30px;
      border: none;
      background-color: #626262;
      opacity: 50%;
      color: #fff;
    }

    button {
      padding: 5px 20px;
      border: none;
      border-radius: 30px;
      background-color: #000;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s;
      font-size: 1.5rem;
      margin-left: 250px;
    }

    button:hover {
      background-color: #fff;
      color: #000;
    }
    img {
        width: 300px; 
        height: auto; 
        position: absolute; 
        right: 90px; 
        top: 370px; 
        transform: translateY(-50%); 
        margin-right: 100px;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
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

  <!-- Konten Signin -->
  <div class="container">
  <form class="login-form" style="position: relative;">
    <h2>Register</h2> <!-- Added h2 heading -->
    <div class="form-group">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required> <!-- Changed input type to email -->
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <button type="submit">Register</button>
  </form>
  <img src="./img/smash.png" alt="smash">
</div>
</body>
</html>
