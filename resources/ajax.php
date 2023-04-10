<?php

//membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "stock_ingot");

//variabel nrp yang dikirimkan form.php
$nrp = $_GET['nrp'];

//mengambil data
$query = mysqli_query($koneksi, "SELECT * FROM db_penimbang WHERE nrp='$nrp'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'nama'      =>  @$mahasiswa['nama'],);
//tampil data
echo json_encode($data);
?>