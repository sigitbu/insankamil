<?php
    include '../koneksi.php';
    $nis = $_GET['nis'];

   $sql = mysqli_query($koneksi,"select * from m_client where nis='$nis'");
   $sis = mysqli_fetch_array($sql);

    $data = array(
        'nama' => $sis['nama'],
        'sekolah' => $sis['sekolah'],
        'id_client' => $sis['id_client']
    );

    echo json_encode($data);
?>