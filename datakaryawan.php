<?php
require "init.php";
require_once "index.php";
$data_karyawan=$karyawan->getdata();
if(isset($_POST['cari'])){
    $data_karyawan=$karyawan->cari($_POST["keyword"]);
}
?>


<section class="konten">
    <h3 class="tengah">DATA KARYAWAN PT.CISONGGOM</h3>
    <br>
    <a class="btn btn-sm btn-primary float-end" href="Tambahkaryawan.php">Tambah Karyawan Baru</a>
    <form action=""method="post">
        <div class="row">
            <div class="col-4">
                <input type="text" class="form-control" name="keyword" id="keyword">
</div>
<div class="col-1">
    <input type="submit" class="btn btn-sm-btn-succes" name="cari" value="cari"><br>
</div>
</div>
<table class="table table-hover mt-3">
        <tr>
            <th>Nik</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Gaji</th>
            <th>Jenis_kelamin</th>
            <th>Aksi</th>
        </tr>
 <?php
 foreach($data_karyawan as $row):
     ?>
      <tr>
        <td><?=$row['Nik']; ?></td>
        <td><?=$row['Nama']; ?></td>
        <td><?=$row['Alamat']; ?></td>
        <td><?=$row['Jabatan']; ?></td>
        <td><?=$row['Gaji']; ?></td>
        <td><?=$row['Jenis_kelamin']; ?></td>
        
    <td>
        <a class="btn btn-sm btn-warning" href="updatekaryawan.php?id=<?=$row["id"];?>">Ubah</a>
        <a class="btn btn-sm btn-danger" href="hapuskaryawan.php?id=<?=$row["id"];?>" onclick="return confirm('Yakin Hapus?');">Hapus</a>
   </td>
    </tr>      
<?php
endforeach;
?>
</table>
</section>

