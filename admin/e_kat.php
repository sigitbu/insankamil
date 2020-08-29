<?php
include '../header.php';

?>	


<div class="container-fluid">
 <h1 class="h3 mb-2 text-gray-800">Data</h1>
	<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Peserta</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

	<?php 
	include "../koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($koneksi,"SELECT * FROM k_tes WHERE id='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="u_kat.php" method="post">		
		<table>
			<tr>
				<!-- <td>Nama</td> -->
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<!-- <input type="hidden" class="form-control" name="id_client" value="<?php echo $data['id_client'] ?>"> -->
					<input type="text" class="form-control" name="nama_ktes" value="<?php echo $data['nama_ktes'] ?>">
				</td>					
			</tr>	
			
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-success" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
	</div>
<?php
	include '../footer.php';
?>