<?php
require 'pageview/header.php';
?>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="index.html">
                                            <img src="images/unjani.png" width="80">
                                        </a>
                                    </div>
                                    <h4 class="text-center mb-4">Login Akun Akademik</h4>
                                    <center>
                                        <?php
                                        if (isset($_GET['pesan'])) {
                                        ?>
                                            <?php if ($_GET['pesan'] == "gagal") : ?>
                                                <div class="alert alert-danger alert-dismissible fade show">
                                                    <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                                        <polyline points="9 11 12 14 22 4"></polyline>
                                                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                    </svg>
                                                    <strong>Gagal!</strong> Kode Login/Password Salah.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                    </button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($_GET['pesan'] == "logout") : ?>
                                                <div class="alert alert-success alert-dismissible fade show">
                                                    <svg viewbox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2">
                                                        <polyline points="9 11 12 14 22 4"></polyline>
                                                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                    </svg>
                                                    <strong>Sukses!</strong> Anda Telah Logout.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                    </button>
                                                </div>
                                            <?php endif; ?>
                                            <?php if ($_GET['pesan'] == "usernotfound") : ?>
                                                <div class="alert alert-danger alert-dismissible fade show">
                                                    <strong>Gagal!</strong> Username Tidak Terdaftar.
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                                    </button>
                                                </div>
                                            <?php endif; ?>
                                        <?php } ?>
                                    </center>
                                    <form action="loginact.php" method="post">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Kode Login</strong></label>
                                            <input type="text" class="form-control" name="kode_login" id="kode_login" placeholder="Kode Login" require>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" require>
                                        </div>
                                        <!-- <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check custom-checkbox ms-1">
                                                    <input type="checkbox" class="form-check-input" value="true" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Tetap Login</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Lupa Password?</a>
                                            </div>
                                        </div> -->
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        // function login(){

        //     var $this = $(this); //submit button selector using ID
        // 	var $caption = $this.html();// We store the html content of the submit button
        // 	var form = "#form"; //defined the #form ID
        // 	var formData = $(form).serializeArray(); //serialize the form into array
        // 	var route = $(form).attr('action'); //get the route using attribute action

        // 	// Ajax config
        // 	$.ajax({
        // 		type: "POST", //we are using POST method to submit the data to the server side
        // 		url: route, // get the route value
        // 		data: formData, // our serialized array data for server side
        // 		beforeSend: function () {//We add this before send to disable the button once we submit it so that we prevent the multiple click
        // 			$this.attr('disabled', true).html("Processing...");
        // 		},
        // 		success: function (response) {//once the request successfully process to the server side it will return result here
        // 			$this.attr('disabled', false).html($caption);
        // 			Swal.fire({
        // 				icon: 'success',
        // 				title: 'Success.',
        // 				text: response
        // 			});
        // 		},
        // 		error: function (XMLHttpRequest, textStatus, errorThrown) {
        // 			// You can put something here if there is an error from submitted request
        // 		}
        // 	});
        // }
    </script>
</body>

</html>