<div class="content-body">
	<!-- row -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-3 col-xxl-4 col-lg-3 col-sm-4">
				<div class="widget-stat card bg-primary">
					<div class="card-body  p-4">
						<div class="media">
							<span class="me-3">
								<i class="la la-users"></i>
							</span>
							<div class="media-body text-white text-end">
								<?php
								$totalmhs = "SELECT * FROM mahasiswa";
								$jmlmhs = mysqli_query($con, $totalmhs);
								$jmlmhsw = mysqli_num_rows($jmlmhs);
								?>
								<p class="mb-1">Total mahasiswa</p>
								<h3 class="text-white"><?php echo $jmlmhsw ?></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-xxl-4 col-lg-3 col-sm-4">
				<div class="widget-stat card bg-success">
					<div class="card-body  p-4">
						<div class="media">
							<span class="me-3">
								<i class="la la-users"></i>
							</span>
							<div class="media-body text-white text-end">
								<?php
								$totalds = "SELECT * FROM dosen";
								$jmlds = mysqli_query($con, $totalds);
								$jmldsn = mysqli_num_rows($jmlds);
								?>
								<p class="mb-1">Total Dosen</p>
								<h3 class="text-white"><?php echo $jmldsn ?></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php if ($_SESSION['status'] == 1) { ?>
				<div class="col-xl-3 col-xxl-4 col-lg-3 col-sm-4">
					<div class="widget-stat card bg-info">
						<div class="card-body  p-4">
							<div class="media">
								<span class="me-3">
									<i class="la la-users"></i>
								</span>
								<div class="media-body text-white text-end">
									<?php
									$kelas_sy = "SELECT * FROM anggota_kelas WHERE nim='$nim'";
									$kelas_result = mysqli_query($con, $kelas_sy);
									$jumlah_kelas = mysqli_num_rows($kelas_result);
									?>
									<p class="mb-1">Total Kelas Saya</p>
									<h3 class="text-white"><?php echo $jumlah_kelas ?></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php if ($_SESSION['status'] == 2) { ?>
				<div class="col-xl-3 col-xxl-4 col-lg-3 col-sm-4">
					<div class="widget-stat card bg-info">
						<div class="card-body  p-4">
							<div class="media">
								<span class="me-3">
									<i class="la la-users"></i>
								</span>
								<div class="media-body text-white text-end">
									<?php
									$kelas_sy = "SELECT * FROM anggota_kelas WHERE kode_dosen='$kode_user'";
									$kelas_result = mysqli_query($con, $kelas_sy);
									$jumlah_kelas = mysqli_num_rows($kelas_result);
									?>
									<p class="mb-1">Total Kelas Saya</p>
									<h3 class="text-white"><?php echo $jumlah_kelas ?></h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>

		</div>
	</div>
</div>