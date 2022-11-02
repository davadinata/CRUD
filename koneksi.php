<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbtgslima";

    #buat koneksi
    $koneksi = new mysqli($servername, $username, $password, $dbname);

    #cek koneksi
    if($koneksi->connect_error){
        die("Koneksi gagal bro!" . $koneksi->connect_error);
    }


?>