<?php
include '../header.php';

?>


 <div class="container-fluid">
 <h1 class="h3 mb-2 text-gray-800">Data</h1>
	<div class="card shadow mb-4">
            <div class="card-header py-3">
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered display" id="dataTable" width="100%" cellspacing="0">
                  <thead>
		<tr>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Username</th>
			<th>Password</th>
			<th>Status</th>
			<th>Opsi</th>		
		</tr>
			</thead>
		
		<tbody>
			<?php 
		include "../koneksi.php";
		$query_mysql = mysqli_query($koneksi,"SELECT * FROM mlogin INNER JOIN m_client USING (id_client) where status = 'tidak aktif' and level= 'user' ")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['username']; ?></td>
			<td><?php echo $data['password']; ?></td>
			<td><?php echo $data['status']; ?></td>
			<td>
				<a href="e_login.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a>
				<a href="h_login.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>			
			</td>
		</tr>
		<?php } ?>
 </tbody>
     </table>

    
    

<?php
	include '../footer.php';
?>