<?php
include '../header.php';

?>	


<div class="container-fluid">
<center>
    <div class="row ml-5">
        <div class="col-10 ml-5">

          
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Peserta Login</h6>
                        </div>
                        <div class="card-body">
                        <div class="table-responsive">

                <form action="i_peserta.php" method="post">		
                    <table>
                        <tr>
                            <td>NIS</td>
                            <td>
                                <input type="text" class="form-control" name="nis" id="nis" required>
                            </td>					
                        </tr>	
                        <tr>
                            <td>Nama Lengkap</td>
                            <td><input type="text" class="form-control" name="nama" required></td>					
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><input type="date" class="form-control" name="tgl_lahir" required></td>					
                        </tr>	
                        <tr>
                            <td>Sekolah</td>
                            <td><input type="text" class="form-control" name="sekolah" required></td>					
                        </tr>
                        <tr>
                            <td>Kelas/Jurusan</td>
                            <td><input type="text" class="form-control" name="kelas"required></td>					
                        </tr>	

                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><select class="form-control" name="jeniskel" required>
                                <option value="laki-laki">Laki-Laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>	
                            </td>				
                        </tr>
                        <tr>
                            <td>Tanggal Pengerjaan</td>
                            <td><input type="date" class="form-control" name="tglker" required></td>					
                        </tr>
                        <tr><td></td></tr>
                        <br>
                        <tr>
                            <td></td>
                            <td><input type="submit" class="btn btn-success mt-3" value="Simpan"></td>					
                        </tr>				
                    </table>
                </form>
	        </div>
        </div>
        </center>
	</div>
<?php
	include '../footer.php';
?>