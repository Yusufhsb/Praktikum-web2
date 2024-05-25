<?php
//## Array Asosiatif
//Array Asosiatif memiliki key dan value yang dipisah dengan tanda = >
// Loop **foreach** digunakan untuk mengulangi setiap elemen dalam sebuah array

//array asosiatif

    $mahasiswa = ["Nama"=>"Yusuf Doli islami", "umur"=>20, "Alamat"=>"Padangsidimpuan"];

    echo $mahasiswa["Nama"] . "<br>";

    foreach ($mahasiswa as $key => $value){
        echo $key . " : " . $value;
        echo "<br>";
    }
    echo "<br>";



?>