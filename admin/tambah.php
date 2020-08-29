<?php
include '../header.php';

?>	


<div class="container-fluid">
 <h1 class="h3 mb-2 text-gray-800">Data</h1>
	<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Peserta Login</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">

	<form action="input.php" method="post">		
		<table>
			<tr>
				<td>NIS</td>
				<td>
					<input type="hidden" class="form-control" name="id_client" id="id_client" >
					<input type="text" class="form-control" name="nis" id="nis" onkeyup="autofill()" required>
				</td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" class="form-control" name="nama" id="nama" readonly></td>					
			</tr>
			<tr>
				<td>Sekolah</td>
				<td><input type="text" class="form-control" name="sekolah" id="sekolah" readonly></td>					
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" class="form-control" name="username" required></td>					
			</tr>	
			<tr>
				<td>Password</td>
				<td><input type="text" class="form-control" name="password" required></td>					
			</tr>	
			<tr><td></td></tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-success" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	

	</div>
	<script src="../aset/vendor/jquery/jquery.min.js"></script>
	<script>
		function autofill(){
			var nis = $('#nis').val();
			
			// $.ajax({
			// 	url : 'autofill.php',
			// 	data : 'nis='+nis,
			// })success(function(data){
			// 	var json = data,
			// 	obj = JSON.parse(json);
				
			// 	$('#nama').val(obj.nama);
			// 	$('#sekolah').val(obj.sekolah);
			// 	$('#id_client').val(obj.id_client);


			// })
			$.ajax({
                url: 'autofill.php',
                dataType: 'json',
                data : 'nis='+nis,
                success: function (obj) {
				
				$('#nama').val(obj.nama);
				$('#sekolah').val(obj.sekolah);
				$('#id_client').val(obj.id_client);
                   
                }
            });
		}
	</script>
<?php
	include '../footer.php';
?>
