<?php
require "init.php";
require_once "index.php";
$data_user=$user->getdata();
if(isset($_POST['cari'])){
    $data_user= $user->cari($_POST["keyword"]);
}
?>
<section class="konten">
    <h3 class="tengah">DATA USER NAME</h3>
    <a class="btn btn-sm btn-primary float-end" href="tambahuser.php">Tambah user name</a>
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
           <th>username</th>
           <th>password</th>
           <th>level</th>
           <th>Aksi</th>
       </tr>
        <?php foreach($data_user as $row) :
        ?>
        <tr>
            <td><?= $row['username'];?></td>
            <td><?= $row['password'];?></td>
            <td><?= $row['level'];?></td>
            <td>
                <a class="btn btn-sm btn-warning" href="updateuser.php?id=<?= $row['id']; ?>">Ubah</a>
                <a class="btn btn-sm btn-danger" href="hapususer.php?id=<?= $row['id']; ?>" onclik="return confirm('Yakin Hapus');">Hapus</a>
        </td>
           </tr>
      <?php
      endforeach;?>
      </table>
    </section>