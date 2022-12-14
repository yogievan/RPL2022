<?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
    $db_name ="rpl2022";

    // Membuat koneksi 
    $conn = new MySQLi($servername,$username,$password,$db_name);
    // Memeriksa koneksi 
    if ($conn->connect_error) 
    { 
        die("Koneksi gagal, karena : " . $conn->connect_error); 
    } 
    echo "";
?>