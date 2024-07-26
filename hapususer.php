<?php
require "init.php";
     $username=$_GET['id'];
     $user->Delete($username);
if($user){
    header('location: datauser.php');
}else{
    die("gagal Menghapus...");
}

?>