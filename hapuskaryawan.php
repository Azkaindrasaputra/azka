<?php
require 'init.php';
      $id=$_GET['id'];
      $karyawan->delete($id);
if($karyawan){
    header('location: datakaryawan.php');
}else{
    die("Gagal Menghapus...");
}

?>