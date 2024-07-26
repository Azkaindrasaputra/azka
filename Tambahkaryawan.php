<?php
require_once "init.php";
require_once "index.php";

if($_POST){
    if($_POST>0){
        $karyawan->data=[$_POST['id'],$_POST['Nik'],$_POST['Nama'],$_POST['Alamat'],$_POST['Jabatan'],$_POST['Gaji'],$_POST['Jenis_kelamin']];
        $karyawan->save();
        header('location: datakaryawan.php');
    }else{
        echo "Gagal Tambah Data";
        }
    }
    ?>
    <div class="container">
        <div class="konten">
            <h3 class="text-center mt-3">Tambah Data Karyawan BARU</h3>
            <div class="card">
                <div class="card-header text-bg-success">
                    <a class="btn btn-sm btn-secondary float-end" href="datakaryawan.php">Kembali Lagi</a>
</div>
<div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">
        <table border="0" class="mx-auto">
 <tr>
      <td>Nik</td>
      <td><input type="text" name="Nik" id="Nik"></td>
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
    <td>Jabatan</td>
    <td><input type="text" name="Jabatan" id="Jabatan"></td>
</tr>
<tr>
    <td>Gaji</td>
    <td><input type="text" name="Gaji" id="Gaji"></td>
</tr>
<tr>
    <td>Jenis_kelamin</td>
    <td><input type="text" name="Jenis_kelamin" id="Jenis_kelamin"></td>
</tr>

<tr>
    <td class="text-center"><button type="submit">Simpan</td>
           </tr>
        </tr>
   </table>
   </form>
</section>