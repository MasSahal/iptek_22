<?php

if (isset($_POST['login'])) {

    // ambil data username
    $username = $_POST['username'];

    // ambil data password
    $password = $_POST['password'];

    if ($username == "hilman") {

        if ($password == "admin") {
            echo "<h1>Selamat datang Admin!</h1>";
        } else {
            echo "<h1>Oops! password salah!</h1>";
        }
    } else {
        echo "<h1>Oops! username salah!</h1>";
    }

    echo "<br>";
    echo "<a href='index.php'>Kembali</a>";
}


    // if ($username == "admin" and $password == "admin") {
    //     echo "<h1>Selamat datang Admin!</h1>";
    // } else {
    //     echo "<h1>Oops! username atau password salah!</h1>";
    // }