<?php
require "init.php";
require "index.php";
   $id=$_GET['id'];
   $s=$sekolah->getdatasingle($id);


    if($_POST){

        $sekolah->data=[$_POST['id'],$_POST['kode_kabupaten_kota'],$_POST['nama_kabupaten_kota'],$_POST['kategori_sekolah'],$_POST['jumlah_sekolah'],$_POST['satuan'],$_POST['tahun_ajaran']];
        $sekolah->update();
        if($_POST>0){
            echo"<script>
            alert('Data Berhasil Diubah!');
            document.location.href='datasekolah.php';
            </script>";
     }else{

            echo"gagal ubah data";
        }
}

    ?>
    <div class="container">
        <div class="konten">
            <h1 class="text-center mt-3">Ubah Data Sekolah</h1>
                <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datasekolah.php">Kembali</a>
                 </div>
                  <div class="card-body"> 

          <form action="" method="post" enctype="multipart/form-data">
             <input type="hidden" name="id" value="<?=$s["id"];?>">
          <table border="8">
                <tr>
            <td>Kode kabupaten kota</td>
            <td><input type="text" name="Nis" id="kode_kabupaten_kota" required="" value="<?= $s['kode_kabupaten_kota'];?>"></td>
</tr>
            <tr>
                <td>Nama nama_kabupaten_kota</td>
                <td><input type="text" name="nama_kabupaten_kota" id="nama_kabupaten_kota" required="" value="<?= $s['nama_kabupaten_kota'];?>"></td>
           </tr>
           <tr>
                 <td>kategori sekolah</td>
                  <td><input type="text" name="kategori_sekolah" id="kategori_sekolah" required="" value="<?= $s['kategori_sekolah'];?>"></td>
            </tr>
            <tr>
               <td>Jumlah sekolah</td>
                <td><input type="text" name="jumlah_sekolah" id="jumlah_sekolah" required="" value="<?= $s['jumlah_sekolah'];?>"></td>
</tr>
<tr>
               <td>satuan</td>
                <td><input type="text" name="satuan" id="satuan" required="" value="<?= $s['satuan'];?>"></td>
</tr>
<tr>
               <td>tahun ajaran</td>
                <td><input type="text" name="tahun_ajaran" id="tahun_ajaran" required="" value="<?= $s['tahun_ajaran'];?>"></td>
</tr>
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