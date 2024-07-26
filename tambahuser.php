<?php
require_once "init.php";
require_once "index.php";
if($_POST){
 if($_POST>0){

    $user->data=['',$_POST['username'],$_POST['password'],$_POST['level']];
    $user->save();
    echo "sukses Tmbah Data";
}else{
    echo "Gagal Tambah Data";
}
}
?>
<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Tambah Data User</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datauser.php">Kembali</a>
</div>
<div class="card-body">
    <form action="" method="post" enctype="multipart/form-data">
        <table border="1" class="mx-auto">
<tr>
    <td>username</td>
    <td><input type="text" name="username" id="username"></td>
</tr>
<tr>
        <td>password</td>
        <td><input type="text" name="password" id="password"></td>
</tr>
<tr>
    <td>level</td>
    <td><input type="text" name="level" id="level"></td>
</tr>
<tr>
    <td><button type="submit">Simpan</td>
</tr>
</tr>
   </table>
   </form>
</section>