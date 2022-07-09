<?php include("inc_header.php") ?>
<?php
$nim = "";
$nama = "";
$jurusan = "";
$alamat = "";
$jeniskelamin = "";
$agama = "";
$kelas = "";
$error  = "";
$sukses = "";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  $id = "";
}

if (isset($_POST['simpan'])) {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $jurusan = $_POST['jurusan'];
  $alamat = $_POST['alamat'];
  $jeniskelamin = $_POST['jeniskelamin'];
  $agama = $_POST['agama'];
  $kelas = $_POST['kelas'];

  if ($nim == '' or $nama == '') {
    $error  = "Harap Masukkan Data yang Lengkap";
  }

  if (empty($error)) {
    if ($id != "") {
      $sql1 = "UPDATE tabelmhs set nim=$nim, nama=$nama, jurusan=$jurusan, alamat=$alamat, jeniskelamin=$jeniskelamin, agama=$agama, kelas=$kelas";
    } else {
      $sql1  = "INSERT into tabelmhs (nim,nama,jurusan,alamat,jeniskelamin,agama,kelas) values ('$nim','$nama','$jurusan','$alamat','$jeniskelamin','$agama','$kelas')";
    }

    $q1    = mysqli_query($koneksi, $sql1);
    if ($q1) {
      $sukses = "Data berhasil Diinput";
    } else {
      $error  = "Coba Lagi";
    }
  }
}

?>
<h1>INPUT PAGE</h1>
<div class="mb-3 row">
  <a href="index.php">
    << Kembali</a>
</div>
<?php
if ($error) {
?>
  <div class="alert alert-danger" role="alert">
    <?php echo $error ?>
  </div>
<?php
}
if ($sukses) {
?>
  <div class="alert alert-primary" role="alert">
    <?php echo $sukses ?>
  </div>
<?php
}
?>
<form action="" method="post">
  <div class="mb-3 row">
    <label for="nimm" class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nim" value="<?php echo $nim ?>" name="nim">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" value="<?php echo $nama ?>" name="nama">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="jurusan" value="<?php echo $jurusan ?>" name="jurusan">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="alamat" value="<?php echo $alamat ?>" name="alamat">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="jeniskelamin" value="<?php echo $jeniskelamin ?>" name="jeniskelamin">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="agama" class="col-sm-2 col-form-label">Agama</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="agama" value="<?php echo $agama ?>" name="agama">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="kelas" value="<?php echo $kelas ?>" name="kelas">
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
    </div>

    <?php include("inc_footer.php") ?>