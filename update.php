<?php
require "init.php";
require "index.php";
   $Nis=$_GET['id'];
   $datas=$siswa->getdatasingle($Nis);


    if($_POST){

        $siswa->data=[$_POST['id'],$_POST['Nis'],$_POST['Nama'],$_POST['Alamat'],$_POST['Jurusan']];
        $siswa->update();
        if($_POST>0){
            echo"<script>
            alert('Data Berhasil Diubah!');
            document.location.href='datasiswa.php';
            </script>";
     }else{

            echo"gagal ubah data";
    }
}

    ?>
    <div class="container">
        <div class="konten">
            <h1 class="text-center mt-3">Ubah Data Siswa</h1>
                <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datasiswa.php">Kembali</a>
</div>
<div class="card-body"> 

                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?=$datas["id"];?>">
                        <table border="9">
                <tr>
            <td>Nis</td>
            <td><input type="text" name="Nis" id="Nis" required="" value="<?= $datas['Nis'];?>"></td>
</tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" id="Nama" required="" value="<?= $datas['Nama'];?>"></td>
           </tr>
           <tr>
                 <td>Alamat</td>
                  <td><input type="text" name="Alamat" id="Alamat" required="" value="<?= $datas['Alamat'];?>"></td>
            </tr>
            <tr>
               <td>Jurusan</td>
                <td><input type="text" name="Jurusan" id="Jurusan" required="" value="<?= $datas['Jurusan'];?>"></td>
</tr>
<tr>
    <td><button type="submit">Save</td>
</tr>
</tr>
</table>
</form>
</div>
</div>
</section>
</div>