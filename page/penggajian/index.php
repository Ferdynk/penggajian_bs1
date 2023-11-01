<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>

<!doctype html>
<html lang="en">

<?php
include '../../templates/head.php';
?>

<!-- Navbar -->
<?php
include '../../templates/navbar.php';
?>
<!-- End Navbar -->

<body>
    <h2 style="margin-top: 20px; margin-bottom: 20px; text-align:center;">Penggajian</h2>
    <br>

    <!--card-->
    <section class="container">
        <class="card">
          <div class="card-header">
            <a href="tambah" class="btn bg-primary" style="margin-left: 10px; color:white;">Tambah</a>
          </div>
          <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-striped">
      <thead class ="table-dark">
        
    <tr>
      <th scope="col">No</th>
      <th scope="col">ID</th>
      <th scope="col">Karyawan NIK</th>
      <th scope="col">Tahun</th>
      <th scope="col">Bulan</th>
      <th scope="col">Gaji Bayar</th>
      <th scope="col">Opsi</th>


    </tr>
  </thead>
  <tbody>
    <?php
        $idp = 1;
        $penggajian = $koneksi->query("SELECT*FROM penggajian ORDER BY id DESC");
        while ($data = $penggajian->fetch_array()){
    ?>
    <tr>
        <td><?= $idp++?></td>
        <td><?= $data['id'] ?></td>
        <td><?= $data['karyawan_nik'] ?></td>
        <td><?= $data['tahun'] ?></td>
        <td><?= $data['bulan'] ?></td>
        <td><?= $data['gaji_bayar'] ?></td>
        <td>
        <a href="edit?id=<?= $data['id'] ?>" class="btn bg-success" style="color:white;">Edit</a>
        <a href="proses?id=<?= $data['id'] ?>" class="btn bg-danger" style="color:white;">Hapus</a>
        </td>
    </tr>
    <?php }?>
  </tbody>
</table>
</div>
        </div>
    </section>
   
</body>

    <?php
    include '../../templates/script.php';
    ?>

</html>

<script>
    new DataTable('#example');
</script>