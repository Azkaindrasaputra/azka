<?php
require 'init.php';
      $id=$_GET['id'];
      $sekolah->delete($id);
if($sekolah){
    header('location: datasekolah.php');
}else{
    die("Gagal Menghapus...");
}

?>