<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
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

        h5 {
            margin-left: 100px;
            font-size: 20px;
        }

        form {
            display: flex;
            flex-direction: row-reverse; /* Mengatur tata letak menjadi sebaris dan meletakkan tombol di sebelah kanan */
            align-items: center; /* Mengatur agar elemen berada di tengah vertikal */
            margin-top: 20px; /* Memberikan sedikit ruang antara h5 dan tombol */
        }

        label {
            margin-bottom: 10px;
            font-size: 2rem;
            font-weight: bold; /* Membuat teks menjadi tebal */
            float: left; /* Meletakkan label di sebelah kiri */
            clear: both; /* Membersihkan sisi sebelumnya */
        }

        input[type="submit"] {
            padding: 5px 20px;
            cursor: pointer;
            background-color: #000;
            border-radius: 30px;
            color: #B9F501;
            font-size: 1.5rem;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #fff;
            color: #000;
        }

        .box {
            background-color: rgba(98, 98, 98, 0.5); /* Warna abu-abu dengan opacity 50% */
            padding: 20px;
            margin-bottom: 10px;
            margin-left: 100px;
            margin-right: 100px;
            margin-top: 50px;
            text-align: center; /* Untuk membuat konten di tengah */
        }

        input[type="file"] {
            margin-top: 10px; /* Memberikan sedikit ruang di atas input file */
            background-color: #fff;
            padding: 10px;
            border-radius: 30px;
            margin-bottom: 60px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Payment</h1>
        <div class="box">
            <label for="name">Lets SPORTS</label>
            <br>
            <label for="bank">BANK CENTRAL ASIA 123445234</label>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <input type="file" id="image" name="image" accept="image/*">
        </div>
        <h5>*Keterlambatan datang bukan tanggung jawab kami dan waktu akan tetap berjalan sesuai pemesanan*</h5>
        <form action="./thanks.php" method="POST">
            <input type="submit" value="Upload">
        </form>
    </div>
</body>
</html>
