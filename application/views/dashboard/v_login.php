<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Admin</title>

    <!-- Favicon -->
	<link href="" rel="shortcut icon" /> 
	
	<!-- Bootstrap Core CSS -->
    <link href=<?php echo base_url('library/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?> rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href=<?php echo base_url('library/bower_components/metisMenu/dist/metisMenu.min.css'); ?> rel="stylesheet">

    <!-- Custom CSS -->
    <link href=<?php echo base_url('library/dist/css/sb-admin-2.css'); ?> rel="stylesheet">

    <!-- Custom Fonts -->
    <link href=<?php echo base_url('library/bower_components/font-awesome/css/font-awesome.min.css'); ?> rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
				<center><img src="<?php echo base_url('foto/foto_login/login-user.png'); ?>" align="center"/></center>
                    <!--<div class="panel-heading">
                        <h3 class="panel-title" align="center">Please Sign In</h3>
                    </div>-->
                    <div class="panel-body">
                        <?php 
                            echo form_open('login/log', array('name'=>'form1', 'class'=>'form_control', 'method'=>'POST'));
                            ?>
                            <?php
                                $pesan = $this->input->get("pesan");
                                if ($pesan == "gagal") {
                                echo '
                                        <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert"></button>
                                        <strong>Login Gagal!</strong> Username atau password yang anda masukan salah!
                                        </div>';
                                } else if($pesan == "logout") {
                                echo '
                                        <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert"></button>
                                        <strong>Sukses!</strong> Anda berhasil logout. Silahkan klik <a href="home">di sini</a> untuk kembali ke menu home.
                                        </div>';
                                }
                            ?>
                            <fieldset>
                                <div class="form-group">
									<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                    <input class="form-control" placeholder="Username Anda" id="username" name="username">
									</div>
                                </div>
                                <div class="form-group">
									<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
										<input class="form-control" placeholder="Password" id="password" name="password" type="password">
									</div>
                                </div>
                                <div class="form-group">
										Login As : <select class="form-control" name="jabatan" id="jabatan">
										<option value=""> -- Pilih Level -- </option>
										<option value="ADMIN"> ADMIN </option>
										<option value="AUTHOR"> AUTHOR </option>
										</select>
                                </div>
								<div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-primary btn-block">Login</button>
								<br />
                            </fieldset>
                        <?php
                            echo form_close();
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		
		<!-- Footer -->
		<hr>
		<center><p>Copyright &copy; <?php echo date('Y'); ?> <a href="http://www.markazwebdesign.com">Markaz Web Design</a></p></center>
		<!-- End Footer -->
		
	</div> <!-- End Container -->
	
    <!-- jQuery -->
    <script src="<?php echo base_url('library/bower_components/jquery/dist/jquery.min.js'); ?> "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('library/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('library/bower_components/metisMenu/dist/metisMenu.min.js'); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('library/dist/js/sb-admin-2.js'); ?>"></script>

</body>

</html>
