<?php

    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $tugas = $_GET['tugas'];

    if(($uts + $uas + $tugas ))

    echo 'Nama Mahasiswa : '. $nama;
    echo '<br> Mata Kuliah : '. $matkul;
    echo '<br> Nilai UTS : '. $uts;
    echo '<br> Nilai UAS : '. $uas;
    echo '<br> Nilai Tugas : '. $tugas;



?>