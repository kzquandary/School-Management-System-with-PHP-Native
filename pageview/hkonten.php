<div class="header">
	<div class="header-content">
		<nav class="navbar navbar-expand">
			<div class="collapse navbar-collapse justify-content-between">
				<div class="header-left">
					<div class="dashboard_bar">
						Akademik
					</div>
				</div>
				<ul class="navbar-nav header-right">
					<li class="nav-item">
						<form action="cariuser.php" method="post">
							<div class="input-group search-area ms-auto d-inline-flex">
								<input type="text" name="cari" class="form-control input-default" placeholder="Cari User dengan NIM">
								<div class="input-group-append">
									<button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
								</div>
							</div>
						</form>
					</li>
					<li class="nav-item dropdown notification_dropdown">
						<a class="nav-link bell dz-theme-mode active" href="javascript:void(0);">
							<i id="icon-light" class="far fa-sun"></i>
							<i id="icon-dark" class="far fa-moon"></i>
						</a>
					</li>
					<li class="nav-item dropdown header-profile">
						<a class="nav-link" href="javascript:;" role="button" data-bs-toggle="dropdown">
							<img src="<?php echo $potoprofil ?>" width="20" alt="">
							<div class="header-info">
								<span><?php echo $nama ?><i class="fa fa-caret-down ms-3" aria-hidden="true"></i></span>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a href="profil.php?kode=<?php echo $kode_user ?>" class="dropdown-item ai-icon">
								<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
									<circle cx="12" cy="7" r="4"></circle>
								</svg>
								<span class="ms-2">Profile </span>
							</a>
							<a href="logout.php" class="dropdown-item ai-icon">
								<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
									<polyline points="16 17 21 12 16 7"></polyline>
									<line x1="21" y1="12" x2="9" y2="12"></line>
								</svg>
								<span class="ms-2">Logout </span>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>