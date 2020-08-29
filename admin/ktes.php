<?php
include '../header.php';

?>

<br>

	
 <div class="container-fluid">
 <!-- <h1 class="h3 mb-2 text-gray-800">Data</h1> -->
	<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Kategori Tes</h6>
              <br>
			  	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				Tambah Kategori
				</button>
              <!-- <a class="btn btn-success " href="cetak.php">Cetak</a> -->
			  <!-- <a class="btn btn-primary " href="t_peserta.php">Tambah Data</a> -->
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
		<tr>
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>nama Kategori Tes</th>
			<th>Opsi</th>		
		</tr>
			</thead>
		
		<tbody>
			<?php 
		include "../koneksi.php";
		$query_mysql = mysqli_query($koneksi,"SELECT * FROM k_tes")or die(mysqli_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>			
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['nama_ktes']; ?></td>	
			<td>
				<a href="e_kat.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a>
				<a href="h_kat.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Hapus</a>			
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


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			<form method="post" action="t_kat.php">
				<label for="kategori">Nama Kategori</label>
				<input type="text" class="form-control" name="kategori" id="kategori" placeholder="Masukan Nama Kategori">
			
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Tambah Kategori</button>
		</form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
