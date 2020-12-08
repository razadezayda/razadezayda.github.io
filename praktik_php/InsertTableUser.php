<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "";
    $database = "praktikumdb";

    $connect = mysqli_connect($namaHost, $username, $password, $database);

    if($connect){
    	echo "Koneksi dengan MySQL berhasil <br>";
    }
    else{
    	echo "Koneksi dengan MySQL gagal" . mysqli_connect_error();
    }

    $pass=md5(123);

    $sql = "INSERT INTO user
            VALUES (1, 'admin', '$pass')";
            
    if (mysqli_query($connect, $sql)) {
        echo "Record berhasil ditambahkam";
    }
    else{
        echo "Record gagal ditambahkan <br> " . mysqli_error($connect);
    }

    mysqli_close($connect);
?>