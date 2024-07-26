<?php
require 'init.php';
    $id=$_GET['id'];
    $siswa->Delete($id);
    if($siswa){
        header('location: datasiswa.php');
    }else{
        die("Gagal menghapus...");
    }

    ?>