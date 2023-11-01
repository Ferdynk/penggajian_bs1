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
<?php
$id = $_GET['id'];

$data = $koneksi->query("SELECT * FROM penggajian WHERE id = '$id'")->fetch_array();


?>
<body>
    <h2 style="margin-top: 20px; margin-bottom: 20px; text-align:center;">Edit Data Penggajian</h2>
    <br>

    <!--card-->
    <section class="container">
        <form action="proses" method="post">
            <div class="card">
                <div class="card-body bg-dark">
                    <div class="form-group row">
                        
                        <div row mb-3>
                            <label class="col-2" style="color: white;">ID</label>
                            <div class="col-6 ">
                                <input name="id" class="form-control" type="text" placeholder="Isikan ID" value="<?= $data['id'] ?>"readonly>
                            </div>
                        </div>

                        <div row mb-3>
                            <label class="col-2" style="color: white;">Karyawan NIK</label>
                            <div class="col-6 ">
                                <input name="karyawan_nik" class="form-control" type="text" placeholder="Isikan Nama" value="<?= $data['karyawan_nik'] ?>">
                            </div>
                        </div>

                        <div row mb-3>
                            <label class="col-2" style="color: white;">Tahun</label>
                            <div class="col-6 ">
                                <input name="tahun" class="form-control" type="text" placeholder="Isikan Tanggal" value="<?= $data['tahun'] ?>">
                            </div>
                        </div>

                        <div row mb-3>
                            <label class="col-2" style="color: white;">Bulan</label>
                            <div class="col-6 ">
                                <input name="bulan"  class="form-control" type="number" placeholder="Isikan Gaji Pokok" value="<?= $data['bulan'] ?>">
                            </div>
                        </div>

                        <div row mb-3>
                            <label class="col-2" style="color: white;">Gaji Bayar</label>
                            <div class="col-6 ">
                                <input name="gaji_bayar"  class="form-control" type="number" placeholder="Isikan Gaji Pokok" value="<?= $data['gaji_bayar'] ?>">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="edit" class="btn btn-success">Simpan</button>

                </div>
            </div>
        </form>
    </section>
   
</body>
    <!--End card-->

    <?php
    include '../../templates/script.php';
    ?>

</html>

<script>
    new DataTable('#example');
</script>