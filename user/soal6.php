<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TES PSIKOLOGI</title>
  <link href="../aset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="../aset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../aset/css/sb-admin-2.min.css" rel="stylesheet">
  
  
  
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <link rel="stylesheet" href="../css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/style.css">
    

   <script>
// Mengatur waktu akhir perhitungan mundur

  var countDownDate = new Date();
countDownDate.setMinutes(countDownDate.getMinutes() + 3); // timestamp
countDownDate = new Date(countDownDate).getTime(); 

// Memperbarui hitungan mundur setiap 1 detik
var x = setInterval(function() {

  // Untuk mendapatkan tanggal dan waktu hari ini
  var now = new Date().getTime();
    
  // Temukan jarak antara sekarang dan tanggal hitung mundur
  var distance = countDownDate - now;
    
  // Perhitungan waktu untuk hari, jam, menit dan detik

  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Keluarkan hasil dalam elemen dengan id = "demo"
  document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
    
  // Jika hitungan mundur selesai, tulis beberapa teks 
  if (distance < 0) {
    clearInterval(x);
   document.getElementById("demo").innerHTML = "Waktu Habis";
   var time = confirm("apakah anda menyimpan");
   if (time) {
    $("#time").submit();  
   }else{
    return false;
   }
  }
}, 1000);
</script>
</head>
 <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-md-3 col-xl-4 d-block">
            <b><h8 class="mb-0 site-logo">Batas pengerjaan soal dalam waktu <span style="color: red" id="demo"></span> !</h8></b>
          </div>
</header>
 <br>
 <br>
 <br>
 <br> <br>

<body id="page-top">

<?php 
  session_start();

  // cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['level']==""){
    header("location:login.php?pesan=gagal");
  }

  ?>

<div class="container">

<?php
// koneksi ke mysqli
$servername = "localhost";
$username = "root";
$password = "";
$db = "client";
// Create connection
$koneksi = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$koneksi) {
die("Connection failed: " . mysqli_connect_error());
}


        $hasil=mysqli_query($koneksi, "select * from m_soal WHERE id_ktes='5' ");
        $jumlah=mysqli_num_rows($hasil);
        $urut=0;
        while($row =mysqli_fetch_array($hasil))
        {
            $id=$row["id_soal"];
            $idt=$row["id_ktes"];
            $pertanyaan=$row["soal"];
            $pilihan_a=$row["a"];
            $pilihan_b=$row["b"];
            $pilihan_c=$row["c"];
            $pilihan_d=$row["d"];
            $pilihan_e=$row["e"];
            $pilihan_f=$row["f"];
            
            ?>
                  <div class="card">
                    <h5 class="card-header bg-success text-white">Soal No.<?php echo $urut=$urut+1; ?> </h5>
                    <div class="card-body">
                                    <div class="form-group">
                                      <form name="form2" method="post" action="jawab6.php" id="time">
                                        <input type="hidden" name="id[]" value=<?php echo $id; ?>>
                                        <input type="hidden" name="idt" value=<?php echo $_SESSION['id_client']; ?>>
                                        <input type="hidden" name="id_peserta" value=<?php echo $id; ?>>
                                        <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
                                       <center> <label><?php echo "$pertanyaan"; ?></label></center>
                                        <div>
                                        <?php
                                            if (!empty($row["gambar"])) {
                                                echo "<tr><td></td><td><center><img src='../foto/$row[gambar]' width='300' hight='300'></center></td></tr>";
                                            }
                                        ?>
                                        </div>
                                        <br>
                                       <div class="container">  
<div class="row">
  <div class="col-md-2">
 A. <input name="pilihan[<?php echo $id; ?>]" type="radio" value="A" >
    <img src="../aset/imgjawab/<?=$pilihan_a ?>" width='100' hight='100' style="margin-bottom: 10px">
  </div>
  <div class="col-md-2">
B.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="B" >
    <img src="../aset/imgjawab/<?=$pilihan_b ?>" width='100' hight='100' style="margin-bottom: 10px" ></div>
  <div class="col-md-2">
C.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="C" >
    <img src="../aset/imgjawab/<?=$pilihan_c ?>" width='100' hight='100' style="margin-bottom: 10px"></div>
  <div class="col-md-2">
D.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="D" >
    <img src="../aset/imgjawab/<?=$pilihan_d ?>" width='100' hight='100' style="margin-bottom: 10px"></div>
  <div class="col-md-2">
E.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="E" >
    <img src="../aset/imgjawab/<?=$pilihan_e ?>" width='100' hight='100' style="margin-bottom: 10px"></div>
  <div class="col-md-2">
F.  <input name="pilihan[<?php echo $id; ?>]" type="radio" value="F" >
    <img src="../aset/imgjawab/<?=$pilihan_f ?>" width='100' hight='100' style="margin-bottom: 10px"></div>
  
</div>
</div>
                                   
                       </div>
                       
                    </div>
                  </div>
                  <br>
                  <?php } ?>    
                                                  
                                 <!-- <input type="submit" name="submit" value="Jawab" onclick="return confirm('Apakah Anda yakin dengan jawaban Anda?')" class="btn btn-primary "> -->
            
            
            
          
</form>
 
</div>
</div>

 </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  
  <!-- Bootstrap core JavaScript-->
  <script src="../aset/vendor/jquery/jquery.min.js"></script>
  <script src="../aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../aset/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../aset/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../aset/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../aset/js/demo/chart-area-demo.js"></script>
  <script src="../aset/js/demo/chart-pie-demo.js"></script>

   <script src="../aset/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../aset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../aset/js/demo/datatables-demo.js"></script>
  
<script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.countdown.min.js"></script>
  <script src="../js/bootstrap-datepicker.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.fancybox.min.js"></script>
  <script src="../js/jquery.sticky.js"></script>

  
  <script src="../js/main.js"></script>


    <!-- Bootstrap core JavaScript-->
  <script src="../aset/vendor/jquery/jquery.min.js"></script>
  <script src="../aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../aset/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../aset/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../aset/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../aset/js/demo/chart-area-demo.js"></script>
  <script src="../aset/js/demo/chart-pie-demo.js"></script>

   <script src="../aset/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../aset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../aset/js/demo/datatables-demo.js"></script>
  
  
  
 

</body>

</html>