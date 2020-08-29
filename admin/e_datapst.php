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
	$query_mysql = mysqli_query($koneksi,"SELECT * FROM m_client WHERE id_client='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="u_datapst.php" method="post">		
		<table>
			<tr>
				<td>NIS</td>
				<td>
					
					<input type="text" class="form-control" name="nis" value="<?php echo $data['nis'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id_client'] ?>">
					<input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" class="form-control" name="tgl_lahir" value="<?php echo $data['tgl_lahir'] ?>"></td>					
			</tr>	
				
			<tr>
				<td>Sekolah</td>
				<td><input type="text" name="sekolah"  class="form-control" value="<?php echo $data['sekolah'] ?>"></td>					
			</tr>	
			<tr>
				<td>Kelas/Jurusan</td>
				<td><input type="text" class="form-control" name="kelas" value="<?php echo $data['kelas'] ?>"></td>					
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td> 
					<div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="jenis"  value="Laki-Laki"<?php 
                         echo ($data['jenis_kelamin'] =='Laki-Laki' ? 'checked' :''); ?> >Laki-Laki
                    </label>
                    <div></div>
                    <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="jenis"  value="Perempuan"<?php echo ($data['jenis_kelamin'] =='Perempuan' ? 'checked' :''); ?> >Perempuan
                    </label>
				</td>					
			</tr>	
			<tr>
				<td></td>
				<td><input class="btn btn-success" type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
	</div>
<?php
	include '../footer.php';
?>