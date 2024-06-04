<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <!-- Import Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            background-color: #000;
            color: #fff;
        }

        header {
            background-image: url('img/footer.png'); /* Menggunakan gambar dari folder img */
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 520px; /* Sesuaikan dengan tinggi gambar */
            position: relative;
        }

        .header-text {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #B9F501;
            font-size: 4rem;
            font-weight: bold;
            z-index: 1; /* Pastikan teks berada di atas gambar */
        }

        .header-text2 {
            position: absolute;
            top: 20.5%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #000;
            font-size: 4rem;
            font-weight: bold;
            z-index: 1; /* Pastikan teks berada di atas gambar */
        }

        .container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            cursor: pointer;
            background-color: #B9F501;
            border: none;
            border-radius: 5px;
            color: #000;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #fff;
            color: #000;
        }

        .logo-container {
            padding-top: 500px;
            padding-left: 60px;
            text-align: left;
            margin-top: 20px; /* Sesuaikan dengan jarak yang diinginkan antara header dan logo */
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
        }

        .logo {
            width: 200px; /* Sesuaikan dengan ukuran yang diinginkan */
        }

        .company-section {
            padding-top: 240px;
            padding-left: 200px;
            position: absolute;
            left: calc(200px + 60px); /* Lebar logo + padding kiri logo */
            transform: translateY(-50%);
            text-align: left;
            z-index: 1; /* Pastikan tulisan berada di atas gambar */
        }

        .company-section h2 {
            color: #B9F501;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .company-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .company-section li {
            margin-bottom: 5px;
        }

        .company-section a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s ease;
        }

        .company-section a:hover {
            color: #B9F501;
        }

        /* Styling for the buttons */
        .button-container {
            padding-left: 500px;
            position: absolute;
            padding-top: 180px;
            left: calc(200px + 60px); /* Lebar logo + padding kiri logo */
            transform: translateY(-50%);
            z-index: 1;
            display: flex;
            flex-direction: column; /* Menyusun tombol ke bawah */
            gap: 20px;
            text-decoration: none;
        }

        .button-container button {
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

        .button-container button:hover {
            background-color: #fff;
            color: #000;
        }

        /* Styling for social media icons */
        .social-media {
            position: absolute;
            top: 580px;
            right: 160px;
            transform: translateY(-50%);
            z-index: 1;
        }

        .social-media a {
            color: #B9F501;
            font-size: 24px;
            margin-left: 20px;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .social-media a:hover {
            color: #fff;
        }

        h1 {
            font-size: 1rem;
            padding-top: 300px;
            padding-bottom: 100px;
        }
    </style>
</head>
<body>
    <header>
    
    </header>
    
    <div class="logo-container">
        <img src="img/logo.png" alt="Logo" class="logo">
        <h4>@copyright</h4>
    </div>

    <div class="company-section">
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

    <div class="button-container">
        <!-- Mengarahkan tombol "Contact Us" ke halaman website -->
        <button><a href="contact.php">Contact Us</a></button>
        <!-- Mengarahkan tombol "Booking Now" ke halaman website -->
        <button><a href="booking.php">Booking Now</a></button>
    </div>

    <!-- Social Media Icons -->
    <div class="social-media">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-github"></i></a>
        <a href="#"><i class="fab fa-linkedin"></i></a>
    </div>

    <h1>Copyright by Irman</h1>
</body>
</html>
