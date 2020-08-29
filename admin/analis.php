<?php
include '../header.php';

?>

<br>

	
 <div class="container-fluid">
 <h1 class="h3 mb-2 text-gray-800">Data</h1>
	<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Analis Peserta</h6>
              <br>
              <a class="btn btn-primary " href="c_hasil.php">Cetak</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="dataTable" >
                  	<thead>
						<tr>
							
							<th rowspan="2">Nama Lengkap</th>
							<th colspan="4">Tes A</th>
							<th colspan="4">Tes B</th>
						</tr>
						<tr>
							<th colspan="2">banar</th>
							<th colspan="2">salah</th>
							<th colspan="2">benar</th>
							<th colspan="2">salah</th>	
						</tr>
					</thead>
							<?php 
					include "../koneksi.php";
					$nomor = 1;
					$idc = mysqli_query($koneksi,"SELECT DISTINCT(id_client) as id ,m_client.nama FROM m_hasil  INNER JOIN m_client USING (id_client)")or die(mysqli_error());
					
					
					 while($t=mysqli_fetch_array($idc)){
					 	$id = $t['id'];
					 	$nama = $t['nama'];
					 	$q1=mysqli_query($koneksi,"select sum(benar)as benar,sum(salah)as salah from m_hasil where id_ktes in('1','2',3,4)");
					 	$fe1=mysqli_fetch_array($q1);

					 	$q2=mysqli_query($koneksi,"select sum(benar)as benar,sum(salah)as salah from m_hasil where id_ktes in('5','6',7,8)");
					 	$fe2=mysqli_fetch_array($q2);
		 	?>
		
					<tbody>
		
	
						 	<tr>
						 		<td><?php echo $nama;?></td>
						 		<td><?php echo $fe1['benar'];?><td>
						 		<td><?php echo $fe1['salah'];?><td>
						 		<td><?php echo $fe2['benar'];?><td>
						 		<td><?php echo $fe2['salah'];?><td>
						 	</tr>
		 	<?php
			}?>

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