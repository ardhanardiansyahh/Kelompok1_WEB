

<!-- FOOTER -->
<footer id="footer" class="section section-grey">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- footer widget -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="footer">
					<!-- footer logo -->
					<div class="footer-logo">
						<a class="logo" href="#">
							<img src="frontend/img/logo.png" alt="">
						</a>
					</div>
					<!-- /footer logo -->

					<p>PayPlay penyedia items, voucher games / semua perlengkapan game mu</p>

				</div>
			</div>
			<!-- /footer widget -->

			<!-- footer widget -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="footer">
					<h3 class="footer-header">My Account</h3>
					<ul class="list-links">
						<li><a href="keranjang.php">Keranjang</a></li>
						<li><a href="checkout.php">Checkout</a></li>
						<li><a href="daftar.php">Daftar</a></li>
						<li><a href="masuk.php">Login</a></li>
					</ul>
				</div>
			</div>
			<!-- /footer widget -->

			<div class="clearfix visible-sm visible-xs"></div>

			<!-- footer widget -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="footer">
					<h3 class="footer-header">Customer Service</h3>
					<ul class="list-links">
						<li><a href="#">Tentang</a></li>
						<li><a href="#">Pengiriman</a></li>
						<li><a href="#">Tracking Resi</a></li>
					</ul>
				</div>
			</div>
			<!-- /footer widget -->

		</div>
		<!-- /row -->
		<hr>
		<!-- row -->
		<div class="row">
			<div class="col-md-8 col-md-offset-2 text-center">
				<!-- footer copyright -->
				<div class="footer-copyright">
					
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
					
				</div>
				<!-- /footer copyright -->
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="frontend/js/jquery.min.js"></script>
<script src="frontend/js/bootstrap.min.js"></script>
<script src="frontend/js/slick.min.js"></script>
<script src="frontend/js/nouislider.min.js"></script>
<script src="frontend/js/jquery.zoom.min.js"></script>
<script src="frontend/js/main.js"></script>
<script src="frontend/js/sliders.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.14/dist/sweetalert2.all.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
<script src="frontend/js/sweetalert2.all.min.js"></script>
<!-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@11.4.14/dist/sweetalert2.min.css'> -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="frontend/toastr/build/toastr.min.js"></script>
<script src="frontend/toastr/build/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/toastr@2.1.4/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>t>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

<script>
	
$('#change').on('click', function(e){
    e.preventDefault();

	var password = $('#passwordd').val();
	console.log(password);
	if (password == '') {
		Swal.fire({
  			icon: 'error',
  			title: 'Password Kosong!',
  			text: 'Silahkan diisi password Anda!'
		})
	} else {
		Swal.fire({
			title: 'Apakah Anda yakin?',
			text: "password akan diganti",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#F8694A',
			cancelButtonColor: '#30323A',
			confirmButtonText: 'Ganti!'
		  }).then((result) => {
			if (result.isConfirmed) {
			  $('#form-gantipw').submit();
			} else {
				Swal.fire(
					'  ',
					'yauda, gajadi diganti')
			}
		})
	}
});

const notif = $('.info-data').data('infodata');
if (notif == 'sukses') {
	Swal.fire(
		'Berhasil!',
		'Password terganti',
		'success'
		)
}
</script>


</html>