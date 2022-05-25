<?php include 'header.php'; ?>

<!-- BREADCRUMB -->
<div id="breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Ganti Password Customer</li>
		</ul>
	</div>
</div>
<!-- /BREADCRUMB -->

<div class="section">
	<div class="container">
		<div class="row">
			
			<?php 
			include 'customer_sidebar.php'; 
			?>

			<div id="main" class="col-md-9">
				
				<h4>GANTI PASSWORD</h4>

				<div id="store">
					<div class="row">

						<div class="col-lg-12">

							<div class='info-data' data-infodata='<?php if(isset($_SESSION['info'])){ echo $_SESSION['info']; } unset($_SESSION['info']); ?>'></div>
							<form action="customer_password_act.php" method="post" id='form-gantipw'>
								<div class="form-group">
									<label for="">Masukkan Password Baru</label>
									<input type="password" class="input" required="required" id="passwordd" name="password" placeholder="Masukkan password .." min="5">
									<label for="">Masukkan Konfirmasi Password Baru</label>
									<input type="password" class="input" required="required" id="passwordd_konfirm" name="password" placeholder="Masukkan password .." min="5">
								</div>

								<div class="form-group">
									<input type="submit" class="primary-btn" id='change' value="Ganti Password">
								</div>
							</form>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>