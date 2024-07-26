<?php 

require 'database.php';
// require 'index.php';

$siswa=new database();
$siswa->table='tb_siswa';
$siswa->field=['id','Nis','Nama','Alamat','Jurusan'];

$karyawan=new database();
$karyawan->table='tb_karyawan';
$karyawan->field=['id','Nik','Nama','Alamat','Jabatan','Gaji','Jenis_kelamin'];

$user=new database();
$user->table='user';
$user->field=['id','username','password','level'];

$sekolah=new database();
$sekolah->table='tb_praktikum_1';
$sekolah->field=['id','kode_kabupaten_kota','nama_kabupaten_kota','kategori_sekolah','jumlah_sekolah','satuan','tahun_ajaran'];
?>