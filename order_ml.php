<?php 
session_start();
include "koneksi.php";
$sql = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE id = '2'");
$data = mysqli_fetch_object($sql);


if (isset($_POST['id'])) {
  $id = $_POST['id'];
  $server = $_POST['server'];
  $dm = $_POST['dm'];
  $dmharga = $_POST['dmharga'];
  $metode = $_POST['metode'];
  

  if ($dm == "") {
    $_SESSION['pesan'] = "Harus di isi";
    $error = 'is-invalid';
      unset($_SESSION['pesan']);
      // ngecek id game



  } elseif(strlen($id) < 3 OR strlen($id) > 12) {
    
      $validid = "is-invalid";

  }else {
    $error = "";


 
// REDIRECT TO WA
  $nomor = $data->nowa;



  $send = "https://wa.me/$nomor?text=HALO ADMIN%0A%0A*INFO ORDER TOP UP*%0AGAME : MOBILE LEGEND %0A%0A ID GAME+:++ $id  %0A ID SERVER +:++ $server %0A ITEM +:++ $dm %0A HARGA +:++ $dmharga %0A METODE PEMBAYARAN +:++ $metode";



  }
  








} else {
  $error = "";
  $validid = "";
}


 ?>




<!DOCTYPE html>
<html>
    <head>
        <title><?= $data->namaweb ?></title>
       
		 <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <script src="dist/css/sweetalert2.all.min.js"></script>
    </head>
<body style="background-color: black; color: white;">


        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container">
                  <a class="navbar-brand" href="#"><span class="text-light font-weight-bold"><?= $data->namaweb ?></span></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="order.php">order</a>
                      </li>
                      
                    </ul>
                  </div>
        </div>
    </nav>


<div class="container">

<?php 
if (isset($_POST['id'])) : ?>
<?php if ($error == "") { ?>

<h3 class="mt-3 text-center">Checkout ...</h3>

<p>Id Game      : <span class="text-warning"><?= $id ?></span></p>
<p>Id Server    : <span class="text-warning"><?= $server ?></span></p>
<p>Nominal      : <span class="text-warning"><?= $dm ?></span></p>
<p>Pembayaran   : <span class="text-warning"><?= $metode ?></span></p>
<p>Total Harga  : <span class="text-warning"><?= $dmharga ?> </span></p>
<a href="<?= $send ?>" target="_blank" class="btn btn-success btn-block btn-lg mt-3 mb-5">KLIK UNTUK MEMESAN</a>
<?php die(); } ?>

<?php endif; ?>
</div>
<div class="container">
  <div class="mt-3 p-2"><img src="img/ml.jpeg" style="width:100%" alt=""></div>


  <h4 class="shadow-sm p-2 mt-3">MOBILE LEGEND</h4>
  <div style="width: 80px; border-radius: 20px; margin-left: 5px; height: 5px; padding:3px; background-color: red; color: red;"></div>


  <div class="shadow-sm">
    <h5 class="mt-3 font-weight-bold">Cara Order : </h5>
    <p>
      <?= $data->caraorder ?>
    </p>
  </div>



  <div class="font-weight-bold text-center">
    <p><?= $data->keterangan ?></p>
  </div>

<form action="" method="post" autocomplete="off">

      <div class="card mb-2">
        <div class="card-body" style="background-color: rgba(0, 0, 0, 0.9);">

          <h5 class="p3 mb-2"><span class="d-inline badge badge-pill badge-primary">1</span> LENGKAPI DATA</h5>

<div class="row">
  <div class="col-8">
     <div class="form-group mt-1">
                <input required type="text" class="<?= $validid ?> form-control" name="id" placeholder="Masukkan ID">
                 <div class="invalid-feedback">
                    ID GAME TIDAK VALID
                 </div>
              </div>
  </div>

  <div class="col-4">
    <div class="form-group mt-1">
                <input required type="text" class="form-control" name="server" placeholder="SERVER">
                
              </div>
  </div>
</div>
             


              <a  class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Petunjuk</a>
          </div>
      </div>


      <div class="card mb-2">
        <div class="card-body" style="background-color: rgba(0, 0, 0, 0.9);">

          <h5 class="p3 mb-2"><span class="d-inline badge badge-pill badge-primary">2</span> PILIH NOMINAL</h5>
  <div class="row p-3">
    



<?php 
$u = 1;
$produk = $data->produk;
$cc =explode(",", $produk);
$jmlarray = count($cc);
foreach ($cc as $a) : ?>
<?php 
$dmaja = explode("|", $a);
 ?>
  <input type="hidden" value="<?= $dmaja[0]; ?>"id="jml<?= $u ?>">
  <input type="hidden" value="<?= $dmaja[1]; ?>"id="kuncir<?= $u ?>">
    <div class="col-6 mb-2">
      <div class="row"><div class="col-12">
        <input type="text" onclick="pilih(<?= $u; ?>)" id="dm<?= $u ?>" class="<?= $error ?> form-control" readonly placeholder="<?= $dmaja['0']; ?>">
      </div></div>
    </div>

<?php $u++; endforeach; ?>


<input type="hidden" name="dm" id="dipilih">
<input type="hidden" name="dmharga" id="dmharga">

<input type="hidden" value="<?= $jmlarray ?>" id="jmlarray">


<div class="col-12 mt-3">
  <h5>ITEM  &nbsp;&nbsp;&nbsp; : <span  id="harganya"></span></h5>
  <h5>HARGA : Rp. <span id="kuncir"></span></h5>

</div>

  </div>
          </div>
      </div>




  <div class="card mb-2">
        <div class="card-body" style="background-color: rgba(0, 0, 0, 0.9);">

          <h5 class="p3 mb-2"><span class="d-inline badge badge-pill badge-primary">3</span> METODE PEMBAYARAN</h5>




  
    <div class="col-12 mb-2">
      
        <div class="form-group">
         
          <select class="form-control mt-3" name="metode">

            <?php $dana = $data->metode;
                $ex = explode(",", $dana);



                foreach ($ex as $key) :  ?>


            <option value="<?= $key ?>"><?= $key ?></option>

                <?php endforeach; ?>
            
           
          </select>
        </div>

    </div>

             
          </div>
  </div>


  <div class="card mb-5">
        <div class="card-body" style="background-color: rgba(0, 0, 0, 0.9);">

          <h5 class="p3 mb-2"><span class="d-inline badge badge-pill badge-primary">4</span> ORDER NOW</h5>
          <button class="mt-3 btn btn-success btn-block mt-2 " type="submit">ORDER</button>
             
          </div>
  </div>




</div>


</form>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header  text-dark">
        <h5 class="modal-title" id="exampleModalLabel">Petunjuk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark">
        Masukkan id game sesuai dengan id game ML Dan server game anda
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





<?php include 'footer.php'; ?>


<script src="dist/js/jquery.slim.min.js"></script>
<script src="sc.js"></script>
<script src="dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>