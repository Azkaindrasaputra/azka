<?php
//menghapus session
 session_start();
 $_SESSION=[];
 session_unset();
 session_destROY();
 header("location: login.php");
 exit;
?>