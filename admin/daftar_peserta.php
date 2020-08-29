<?php
include '../header.php';

?>

<br>

	
 <div class="container-fluid">
 <h1 class="h3 mb-2 text-gray-800">Data</h1>
	<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Client</h6>
              <br>
              <a class="btn btn-success " href="cetak.php">Cetak</a>
			  <a class="btn btn-primary " href="t_peserta.php">Tambah Data</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
		<tr>
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>Nis</th>
			<th>Nama Lengkap</th>
			<th>Tanggal Lahir</th>
			<th>Sekolah</th>
			<th>Kelas/Jurusan</th>
			<th>Jenis Kelamin</th>
			<th>Opsi</th>		
		</tr>
			</thead>
		
		<tbody>
			<?php 
		include "../koneksi.php";
		$query_mysql = mysqli_query($koneksi,"SELECT * FROM m_client")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['id_client']; ?></td>
			<td><?php echo $data['nis']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['tgl_lahir']; ?></td>
			<td><?php echo $data['sekolah']; ?></td>
			<td><?php echo $data['kelas']; ?></td>
			<td><?php echo $data['jenis_kelamin']; ?></td>
			
			<td>
				<a href="e_datapst.php?id=<?php echo $data['id_client']; ?>" class="btn btn-success">Edit</a>
				<a href="hapus.php?id=<?php echo $data['id_client']; ?>" class="btn btn-danger">Hapus</a>			
			</td>
		</tr>
		<?php } ?>
 </tbody>
     </table>
     </div>
     </div>
     </div>
     </div>

	</div>
<?php
	include '../footer.php';
?>