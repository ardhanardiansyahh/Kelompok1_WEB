

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

					<p>TimeZone Online penyedia items, voucher games / semua perlengkapan game mu</p>

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

<script>

	$(document).ready(function(){

		function numberWithCommas(x) {
			return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		}

		$('.jumlah').on("keyup",function(){
			var nomor = $(this).attr('nomor');

			var jumlah = $(this).val();

			var harga = $("#harga_"+nomor).val();

			var total = jumlah*harga;

			var t = numberWithCommas(total);

			$("#total_"+nomor).text("Rp. "+t+" ,-");
		});
	});








	$(document).ready(function(){
		$('#provinsi').change(function(){
			var prov = $('#provinsi').val();


			var provinsi = $("#provinsi :selected").text();

			$.ajax({
				type : 'GET',
				url : 'rajaongkir/cek_kabupaten.php',
				data :  'prov_id=' + prov,
				success: function (data) {
					$("#kabupaten").html(data);
					$("#provinsi2").val(provinsi);
				}
			});
		});

		$(document).on("change","#kabupaten",function(){

			var asal = 152;
			var kab = $('#kabupaten').val();
			var kurir = "a";
			var berat = $('#berat2').val();

			var kabupaten = $("#kabupaten :selected").text();

			$.ajax({
				type : 'POST',
				url : 'rajaongkir/cek_ongkir.php',
				data :  {'kab_id' : kab, 'kurir' : kurir, 'asal' : asal, 'berat' : berat},
				success: function (data) {
					$("#ongkir").html(data);
					// alert(data);

					// $("#provinsi").val(prov);
					$("#kabupaten2").val(kabupaten);

				}
			});
		});

		function format_angka(x) {
			return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		}

		$(document).on("change", '.pilih-kurir', function(event) { 
			// alert("new link clicked!");
			var kurir = $(this).attr("kurir");
			var service = $(this).attr("service");
			var ongkir = $(this).attr("harga");
			var total_bayar = $("#total_bayar").val();

			$("#kurir").val(kurir);
			$("#service").val(service);
			$("#ongkir2").val(ongkir);
			var total = parseInt(total_bayar) + parseInt(ongkir);
			$("#tampil_ongkir").text("Rp. "+ format_angka(ongkir) +" ,-");
			$("#tampil_total").text("Rp. "+ format_angka(total) +" ,-");
		});


		// $(".pilih-kurir").on("change",function(){

		// 	alert('sd');
			// var asal = 152;
			// var kab = $('#kabupaten').val();
			// var kurir = "a";
			// var berat = $('#berat2').val();

			// $.ajax({
			// 	type : 'POST',
			// 	url : 'rajaongkir/cek_ongkir.php',
			// 	data :  {'kab_id' : kab, 'kurir' : kurir, 'asal' : asal, 'berat' : berat},
			// 	success: function (data) {
			// 		$("#ongkir").html(data);
			// 		// alert(data);

			// 	}
			// });
		// });



	});
</script>

</html>