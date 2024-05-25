<?php 
    $nilai1 = ['id' => 1, 'nim' => '011011', 'uas' => 84, 'tugas' => 78];
    $nilai2 = ['id' => 2, 'nim' => '011021', 'uas' => 70, 'tugas' => 68]; 
    $nilai3 = ['id' => 3, 'nim' => '011031', 'uas' => 60, 'tugas' => 70]; 
    $nilai4 = ['id' => 4, 'nim' => '011041', 'uas' => 90, 'tugas' => 82]; 

    $kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
    echo $kumpulan_nilai[0]['nim'];
?>