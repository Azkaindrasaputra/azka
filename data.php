<?php
require "init.php";
if($_POST){
if($_POST>0){
    $siswa->data=[$_POST['Nis'],$_POST['Nama'],$_POST['Alamat'],$_POST['Jurusan']];
    $siswa->save();
    echo"sukses tambah data";}else{echo "gagal tambah data";}}
?>


<section class="konten">
    <h1 class="tengah">Data siswa</h1>
<form action="" method="post">
    <table border="0">
          <tr>
            <tr>
                <td>Nis</td>
                <td><input type="text" name="Nis"></td>
</tr>
<tr>
    <td>Nama</td>
    <td><input type="text" name="Nama" id="Nama"></td>
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