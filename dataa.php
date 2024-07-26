<?php require 'database.php' ;
require 'index.php';
$siswa=new database();
$siswa->table='tb_siswa';
$karyawan=new database();
$karyawan->table='tb_karyawan';