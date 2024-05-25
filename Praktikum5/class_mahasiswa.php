<?php
        if (isset($_POST["submit"])) {
            require_once "class_mahasiswa.php";

            // Set nilai properti pada objek dari nilai yang diisi pada form
            $nim = $_POST["nim"];
            $nama = $_POST["nama"];
            $thn_angkatan = $_POST["thn_angkatan"];
            $prodi = $_POST["prodi"];
            $ipk = $_POST["ipk"];

						// Buat objek baru dari class bmiPasien
            $mahasiswa1 = new Mahasiswa($nim, $nama, $thn_angkatan, $prodi, $ipk);
            
            echo "<h2>Nilai Mahasiswa</h2> . <br>";
            echo "<p>NIM: " . $mahasiswa1->nim . "</p>";
            echo "<p>Nama: " . $mahasiswa1->nama . " </p>";
            echo "<p>Tahun Angkatan: " . $mahasiswa1->thn_angkatan . " </p>";
            echo "<p>Prodi: " . $mahasiswa1->prodi . "</p>";
            echo "<p>IPK: " . $mahasiswa1->predikat_ipk() . "</p>";
        }
        

        ?>