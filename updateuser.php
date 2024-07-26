<?php
require "init.php";
require "index.php";
   $username=$_GET['id'];
   $u=$user->getdatasingle($username);


    if($_POST){

        $user->data=[$_POST['id'],$_POST['username'],$_POST['password'],$_POST['level']];
        $user->update();
        if($_POST>0){
            echo"<script>
            alert('Data Berhasil Diubah!');
            document.location.href='datauser.php';
            </script>";
     }else{

            echo"gagal ubah data";
    }
}
    ?>
    <div class="container">
        <div class="konten">
            <h3 class="text-center mt-3">Ubah Data User</h3>
                <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datauser.php">Kembali</a>
</div>
<div class="card-body"> 

                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$u["id"];?>">
                        <table border="9">
          <tr>
            <tr>
                <td>username</td>
                <td><input type="text" name="username" required="" value="<?= $u["username"];?>"</td>
</tr>
<tr>
    <td>password</td>
    <td><input type="text" name="password" id="password" required="" value="<?= $u["password"];?>"></td>
 <tr>
        <td>level</td>
        <td><input type="text" name="level" required="" value="<?= $u["level"];?>" id="level"></td>
</tr>
<tr>
    <tr>
        <td><button type="submit">Simpan</td>
</tr>
</tr>
</table>
</form>
</div>
</div>
</section>
</div>