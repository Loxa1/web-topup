

<?php 

$link_ig = "https://instagram.com/vivom5087";
$link_fb = "https://www.facebook.com/iphonemasrafli";
$link_t = "https://vt.tiktok.com/ZSJejTGP/";

 ?>

<div class="container-fluid mt-5">
	<div class="row">
		<div class="col-md-4 col-12 text-center mb-4 p-5"style="background-color: rgba(0, 0, 0, 1);">
			<h5>BERLANGGANAN</h5>
			<h3>IKUTI KAMI SEKARANG JUGA</h3>
			<div class="row justify-content-center">
				
				<div style="width:30%"><a href="<?= $link_ig ?>"><img src="img/ig.png" style="width: 60px" alt=""></a></div>
				<div style="width:30%"><a href="<?= $link_fb ?>"><img class="mt-1" src="img/fb.png" style="width: 55px" alt=""></a></div>
				<div style="width:30%"><a href="<?= $link_t ?>"><img src="img/t.png" style="width: 60px" alt=""></a></div>
				
			</div>
		</div>

		<div class="col-md-4 col-12 mb-4">
			<h5><?= $data->namaweb ?></h5>
			  <div style="width: 80px; border-radius: 20px; margin-left: 5px; height: 5px; padding:3px; background-color: red; color: red;"></div>
			<p><?= $data->namaweb ?> adalah penyedia layanan top up game favoritmu tanpa ribet, nikmati pengalaman top up bersama kami. Kami menyedikan pembayaran yang bervariasi</p>
			
		</div>

		<div class="col-md-4 col-12 mb-4">
			<h5>OPSI PEMBAYARAN</h5>
			  <div style="width: 80px; border-radius: 20px; margin-left: 5px; height: 5px; padding:3px; background-color: red; color: red;"></div>
<br>
			<a style="color: white" href="https://wa.me/<?= $data->nowa ?>?text=helo+"><p>Chat Whatsapp</p></a>
			
		</div>


	</div>
</div>



<div class="footer text-center">
	<p>Copyright 2021 by <?= $data->namaweb ?></p>
</div>