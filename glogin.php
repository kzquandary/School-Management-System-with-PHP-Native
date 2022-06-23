<?php 

if (isset($_POST['register'])) {

    if (!isset($_SESSION))
        session_start();

    $conn = mysqli_connect("localhost","root","","lr");
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $mobile_number = mysqli_real_escape_string($conn, $_POST['mobile_number']);
    $email_address = mysqli_real_escape_string($conn, $_POST['email_address']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    if ($password == $confirm_password) {
        if (preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email_address)) {
            if (preg_match("/^[6-9]\d{9}$/", $mobile_number)) {

                $sql_email = "SELECT email_address FROM user WHERE email_address='$email_address'";
                $result_email = mysqli_query($conn, $sql_email);

                $sql_mobile = "SELECT mobile_number FROM user WHERE mobile_number='$mobile_number'";
                $result_mobile = mysqli_query($conn, $sql_mobile);

                if (mysqli_num_rows($result_email) > 0) {
                    echo '<script type="text/javascript">';
                    echo 'setTimeout(function () { sweetAlert("Oops...","Email Address ' . $email_address . ' is already exists!","error");';
                    echo '}, 500);</script>';
                } else if (mysqli_num_rows($result_mobile) > 0) {
                    echo '<script type="text/javascript">';
                    echo 'setTimeout(function () { sweetAlert("Oops...","Mobile number ' . $mobile_number . ' is already exists!","error");';
                    echo '}, 500);</script>';
                } else {
                   
                    $hash_password = md5($password);

                    $sql = "INSERT INTO user (`username`,`password`,`mobile_number`,`email_address`) VALUES('$username','$hash_password','$mobile_number','$email_address')";

                    $result = mysqli_query($conn, $sql);

                    if (!$result)
                        die("Error while updating!!!...") . mysqli_error($conn);
                    else {
                        //registration successfull message
                        echo '<script type="text/javascript">';
                        echo 'setTimeout(function () { sweetAlert("Success"," ' . $username . ' You have successfully registred","success");';
                        echo '}, 500);</script>';
                    }
                }
            } else {
                    //invalid mobile number error message
                echo '<script type="text/javascript">';
                echo 'setTimeout(function () { sweetAlert("Oops...","Mobile number ' . $mobile_number . ' is invalid!","error");';
                echo '}, 500);</script>';
            }
        } else {
                //email address invalid error messaage
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { sweetAlert("Oops...","Email address ' . $email_address . ' is invalid!","error");';
            echo '}, 500);</script>';
        }
    } else {
            //password does not match error 
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { sweetAlert("Oops...","The two passwords does not match!","error");';
        echo '}, 500);</script>';
    }
}

if (isset($_POST['login'])) {

    session_start();

    include('connection.php');

    $email_address = mysqli_real_escape_string($conn, $_POST['email_address']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $hash_password = md5($password);

    $sql = "SELECT * FROM user WHERE email_address = '$email_address' AND password = '$hash_password' ";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);

    if ($row['email_address'] == $email_address && $row['password'] == $hash_password)  {
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { sweetAlert("<b>Logged In"," You have successfully loged in.</b>","success");';
        echo '}, 500);</script>';
    } else {
        echo '<script type="text/javascript">';
        echo 'setTimeout(function () { sweetAlert("<b>Oops...","Wrong username or Password!...</b>","error");';
        echo '}, 500);</script>';
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sweet Alert Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap font awesome cdn  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap css cdn -->
    <link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
    <!-- MDB css cdn -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/css/mdb.min.css" rel="stylesheet">
    <!-- sweetalert css cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.min.css">
</head>
<body>
   	<!--Modal: Login / Register Form-->
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog cascading-modal" role="document">
	  <!--Content-->
	  <div class="modal-content">
  
		<!--Modal cascading tabs-->
		<div class="modal-c-tabs">
  
		  <!-- Nav tabs -->
		  <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
			<li class="nav-item">
			  <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i>
				Login</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i>
				Register</a>
			</li>
		  </ul>
  
		  <!-- Tab panels -->
		  <div class="tab-content">
			<!--Panel 7-->
			<div class="tab-pane fade in show active" id="panel7" role="tabpanel">
  
			  <!--Body-->
			  <form action="index.php" method="post">
			  <div class="modal-body mb-1">
				<div class="md-form form-sm mb-5">
				  <i class="fa fa-envelope prefix"></i>
				  <input type="email" id="modalLRInput10" class="form-control form-control-sm validate" name="email_address" required>
				  <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
				</div>
  
				<div class="md-form form-sm mb-4">
				  <i class="fa fa-lock prefix"></i>
				  <input type="password" id="modalLRInput11" class="form-control form-control-sm validate" name="password" required>
				  <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
				</div>
				<div class="text-center mt-2">
				  <button class="btn btn-info" type="submit" name="login">Log in <i class="fa fa-sign-in ml-1"></i></button>
				</div>
			  </div>
			</form>
			  <!--Footer-->
			  <!-- <div class="modal-footer">
				<div class="options text-center text-md-right mt-1">
				  <p>Forgot <a class="blue-text" id="forgot" data-target="#ForgotPasswordModal" data-toggle="modal">Password?</a></p>
				</div>
				<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
			  </div>
   -->
			</div>
			<!--/.Panel 7-->
  
			<!--Panel 8-->
			<div class="tab-pane fade" id="panel8" role="tabpanel">
  
			  <!--Body-->
			  <form action="index.php" method="post">
			   <div class="modal-body">
				<div class="md-form form-sm mb-5">
					<i class="fa fa-user prefix"></i>
					<input type="text" id="modalLRInput11" class="form-control form-control-sm validate" name="username" required>
					<label data-error="wrong" data-success="right" for="modalLRInput11">User Name</label>
				</div>

				<div class="md-form form-sm mb-5">
					<i class="fa fa-mobile prefix"></i>
					<input type="text" id="modalLRInput15" class="form-control form-control-sm validate" name="mobile_number" required>
					<label data-error="wrong" data-success="right" for="modalLRInput15">Mobile Number</label>
				</div>

				<div class="md-form form-sm mb-5">
				  <i class="fa fa-envelope prefix"></i>
				  <input type="email" id="modalLRInput12" class="form-control form-control-sm validate" name="email_address" required>
				  <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
				</div>
  
				<div class="md-form form-sm mb-5">
				  <i class="fa fa-lock prefix"></i>
				  <input type="password" id="modalLRInput13" class="form-control form-control-sm validate" name="password" required>
				  <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
				</div>
  
				<div class="md-form form-sm mb-4">
				  <i class="fa fa-lock prefix"></i>
				  <input type="password" id="modalLRInput14" class="form-control form-control-sm validate" name="confirm_password" required>
				  <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>
				</div>
  
				<div class="text-center form-sm mt-2">
				  <button class="btn btn-info" type="submit" name="register">Sign up <i class="fa fa-sign-in ml-1"></i></button>
				</div>
			  </div>
			</form>
			  <!--Footer-->
			  <div class="modal-footer">
				<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
			  </div>
			</div>
			<!--/.Panel 8-->
		  </div>
  
		</div>
	  </div>
	  <!--/.Content-->
	</div>
  </div>
  <!--Modal: Login / Register Form-->

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded my-3" data-toggle="modal" data-target="#modalLRForm">Launch
    Modal LogIn/Register</a>
</div>
<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- mdb js cdn -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.14/js/mdb.min.js"></script>
<!-- bootstrap js cdn -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<!-- sweetalert js cdn -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.min.js"></script>
</body>
</html>