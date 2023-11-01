<?php
include_once '../../config/config.php';
include_once '../../config/koneksi.php';

if (isset($_POST['simpan'])){
    $idp = $_POST['id'];
    $karnik = $_POST['karyawan_nik'];
    $tahun = $_POST['tahun'];
    $bulan = $_POST['bulan'];
    $gajibayar = $_POST['gaji_bayar'];

    $submit = $koneksi ->query("INSERT INTO penggajian VALUES(
        '$idp',
        '$karnik',
        '$tahun',
        '$bulan',
        '$gajibayar'
        )");

        if ($submit){
            echo "<script>alert('DATA BERHASIL DISIMPAN');location.href='../penggajian/';</script>";
        }else {
            echo "<script>alert('DATA GAGAL DISIMPAN !!');location.href='../penggajian/tambah';</script>";
        }
}else if (isset($_POST['edit'])){
    $idp             = $_POST['id'];
    $karnik          = $_POST['karyawan_nik'];
    $tahun           = $_POST['tahun'];
    $bulan           = $_POST['bulan'];
    $gajibayar       = $_POST['gaji_bayar'];

    $submit = $koneksi ->query("UPDATE penggajian SET 
        id = '$idp',
        karyawan_nik ='$karnik',
        tahun = '$tahun',
        bulan = '$bulan',
        gaji_bayar = '$gajibayar'
        WHERE
        id = '$idp';
        ");

        if ($submit){
            echo "<script>alert('DATA BERHASIL DIUBAH');location.href='../penggajian/';</script>";
        }else {
            echo "<script>alert('DATA GAGAL DIUBAH !!');location.href='../penggajian/edit';</script>";
        }
}else if (isset($_GET['id'])) {
    $delete = $koneksi->query("DELETE FROM penggajian WHERE id = '$_GET[id]'");
    
    if ($delete) {
        echo "<script>alert('Data Berhasil Dihapus');location.href='../penggajian/';</script>";
    } else {
        echo "<script>alert('Data Gagal Dihapus');location.href='../penggajian/';</script>";
    }
}