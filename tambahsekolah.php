<?php
require_once "init.php";
require_once 'index.php';

if($_POST){
    if($_POST>0){
        $sekolah->data=['',$_POST['kode_kabupaten_kota'],$_POST['nama_kabupaten_kota'],$_POST['kategori_sekolah'],$_POST['jumlah_sekolah'],$_POST['satuan'],$_POST['tahun_ajaran']];
        $sekolah->table='tb_praktikum_1';
        $sekolah->save();
        header('location: datasekolah.php');
    }else{
        echo "Gagal Tambah Data";
    }
    }
?> 

<div class="container">
    <section class="konten">
        <h3 class="text-center mt-3">TAMBAH DATA SEKOLAH</h5>
        <div class="card">
            <div class="card-header tyext-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datasekolah.php">kembali Lagi</a>
           </div>
           <div class="card-body">

    <form action="" method="post" enctype="multipart/from-data">
        <table border="0"  class="mx-auto">
<tr>
<tr>
    <td>kode kabupaten kota</td>
    <td><input type="text" name="kode_kabupaten_kota" id="kode_kabupaten_kota"></td>
</tr>
<tr>
        <td>nama kabupaten kota</td>
        <td><input type="text" name="nama_kabupaten_kota" id="nama_kabupaten_kota"></td>
</tr>
<tr>
    <td>kategori sekolah</td>
    <td><input type="text" name="kategori_sekolah" id="kategori_sekolah"></td>
</tr>
<tr>
    <td>jumlah sekolah</td>
    <td><input type="text" name="jumlah_sekolah" id="jumlah_sekolah"></td>
</tr>
<tr>
    <td>satuan</td>
    <td><input type="text" name="satuan" id="satuan"></td>
</tr>
<tr>
    <td>tahun ajaran</td>
    <td><input type="text" name="tahun_ajaran" id="tahun_ajaran"></td>
</tr>
<tr>
      <td><button type="submit">save</td>
           </tr>
        </tr>
</table>
</form>
</div>
</div>
</section>
</div>