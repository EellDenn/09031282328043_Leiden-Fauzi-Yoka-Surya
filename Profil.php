<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: Login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Mahasiswa/i</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f4f4;
            background: linear-gradient(135deg, #eaeaea, #d1d9e6);
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .moving-text {
            position: absolute;
            top: 0;
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
        }

        .moving-text span {
            display: inline-block;
            font-size: 18px;
            color: #fff;
            background-color: #5a7184;
            padding: 10px 20px;
            border-radius: 8px;
            animation: moveText 12s linear infinite;
        }


        

        .container {
            background: #fff;
            color: #444;
            border-radius: 12px;
            width: 90%;
            max-width: 500px;
            padding: 40px 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #34568B;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        .profile-img {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 50%;
            margin: 20px 0;
            border: 5px solid #34568B;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        table {
            margin: 20px auto;
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 12px;
            font-size: 16px;
        }

        th, td {
            padding: 12px 20px;
            text-align: left;
            background-color: #f8f9fa;
            color: #333;
            border-radius: 8px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        }

        th {
            font-weight: bold;
            background-color: #5a7184;
            color: #fff;
            text-align: center;
        }

        tr td:first-child {
            font-weight: bold;
            color: #34568B;
            width: 40%;
        }
    </style>
</head>
<body>
    


    <div class="container">
        <h2>Biodata</h2>
        
        <img class="profile-img" src="Leiden.jpg" alt="Foto Profil">

        
        <table>
            <tr>
                <td>Nama</td>
                <td>Leiden Fauzi Yoka Surya</td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>09031282328043</td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>Yogyakarta, 12 Juni 2005</td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>Sistem Informasi</td>
            </tr>
            <tr>
                <td>Universitas</td>
                <td>Universitas Sriwijaya</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>Jl. Padat Karya Perumahan Griya Intikomp</td>
            </tr>
        </table>
    </div>
</body>
</html>
