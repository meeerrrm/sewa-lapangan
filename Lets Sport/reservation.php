<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            background-color: #000;
            color: #000;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            background-color: #B9F501;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        h1 {
            text-align: center;
            font-size: 3rem;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="time"] {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            background-color: #fff;
            opacity: 50%;
            color: #000;
            font-size: 1.2rem;
            transition: background-color 0.3s ease; /* Menambahkan transisi untuk perubahan warna latar belakang */
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="date"]:focus,
        input[type="time"]:focus {
            background-color: #fff; /* Mengubah warna latar belakang saat input mendapat fokus */
        }

        input[type="submit"] {
            padding: 10px 30px; /* Sesuaikan dengan kebutuhan */
            cursor: pointer;
            background-color: #000;
            border-radius: 30px;
            color: #fff;
            transition: background-color 0.3s ease;
            align-self: center; /* Memposisikan tombol di sebelah kanan */
        }

        input[type="submit"]:hover {
            background-color: #fff;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reservation</h1>
        <form action="payment.php" method="POST"> <!-- Tambahkan action dan arahkan ke payment.php -->
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
            <label for="time">Jam Masuk:</label>
            <input type="time" id="time" name="time" required>
            <label for="time">Jam:</label>
            <input type="time" id="time" name="time" required>
            <input type="submit" value="Book">
        </form>
    </div>
</body>
</html>
