<?php
require "init.php";
require_once "index.php";

$data_sekolah=$sekolah->getdata();
if(isset($_POST['cari'])){
    $data_sekolah= $sekolah->cari($_POST["keyword"]);
}
?>
<section class="konten">
    <h3 class="tengah">DATA SEKOLAH SMK SUKAPURA</h3>
    <a class="btn btn-sm btn-primary float-end" href="tambahsekolah.php">Tambah Sekolah Sukapura</a>
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
      <th>id</th>
      <th>kode kabupaten kota</th>
      <th>Nama kabupaten kota</th>
      <th>kategori sekolah</th>
      <th>jumlah sekolah</th>
      <th>satuan</th>
      <th>Tahun ajaran</th>
      <th>Ubah      delete</th>
  </tr>
<?php
foreach($data_sekolah as $row) :?>
    <tr> 
    <td><?=$row['id']; ?></td>
    <td><?=$row['kode_kabupaten_kota']; ?></td>
    <td><?=$row['nama_kabupaten_kota']; ?></td>
    <td><?=$row['kategori_sekolah']; ?></td>
    <td><?=$row['jumlah_sekolah']; ?></td>
    <td><?=$row['satuan']; ?></td>
    <td><?=$row['tahun_ajaran']; ?></td>
<td>
    <a class="btn btn-sm btn-warning" href="updatesekolah.php?id=<?=$row["id"];?>">ubah</a>

    <a class="btn btn-sm btn-danger" href="hapussekolah.php?id=<?=$row["id"];?>" onclick="return confirm('Yakin Hapus?');">Hapus</a>
   </td>
    </tr>      
<?php
endforeach;?>
</table>
</section>