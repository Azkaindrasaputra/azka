<?php
require_once "init.php";
require_once 'index.php';

if($_POST){
 if($_POST>0){

        $siswa->data=['',$_POST['Nis'],$_POST['Nama'],$_POST['Alamat'],$_POST['Jurusan']];
        $siswa->save();

        echo "Sukses Tambah Data";
    }else{
        echo "Gagal Tambah Data";
    }
    }
?>
<div class="container">
    <section class="konten">
        <h3 class="text-center mt-3">TAMBAH DATA SISWA</h5>
        <div class="card">
            <div class="card-header tyext-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datasiswa.php">kembali</a>
</div>
<div class="card-body">
    <form action="" method="post" enctype="multipart/from-data">
        <table border="0">
<tr>
    <td>Nis</td>
    <td><input type="text" name="Nis" id="Nis"></td>
</tr>
<tr>
        <td>Nama</td>
        <td><input type="text" name="Nama" id="Nama"></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><input type="text" name="Alamat" id="Alamat"></td>
</tr>
<tr>
    <td>Jurusan</td>
    <td><input type="text" name="Jurusan" id="Jurusan"></td>
</tr>
<tr>
      <td><button type=""><a href="index.php">kembali</a></td>
      <td><button type="submit">save</td>
           </tr>
        </tr>
   </table>
   </form>
</section>