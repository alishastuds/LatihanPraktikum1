<?php
    $nama = "Rizqi Alisha Hendrawan";
    $nim = "102022530023";
    $fakultas = "Rekayasa Industri";
    $prodi = "Sistem Informasi";
    $foto_profil = "foto aku.jpeg"; // Pastikan nama file foto Anda benar di sini
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Web</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        .profile-img {
            width: 150px !important;
            height: 150px !important;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #000;
            margin: 0 auto 20px auto;
            display: block;
        }

        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid #000;
            color: #000;
            text-decoration: none;
            margin: 0 10px;
        }
    </style>
</head>
<body>

    <img src="<?php echo $foto_profil; ?>" class="profile-img" alt="Foto Profil">

    <h2><?php echo $nama . " / " . $nim; ?></h2>
    <p><?php echo $fakultas . " / " . $prodi; ?></p>

    <div class="social-icons">
        <a href="https://www.linkedin.com/in/alisha-hendrawan-8357aa246/" target="_blank">LI</a>
        <a href="https://github.com/alishastuds" target="_blank">Git</a>
        <a href="https://instagram.com/alishza" target="_blank">IG</a>
    </div>

</body>
</html>