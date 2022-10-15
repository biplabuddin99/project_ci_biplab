<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url('assets/vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?= base_url('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= base_url('assets/vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/build/css/custom.min.css') ?>" rel="stylesheet">
  </head>

  <body class="login">
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
		  <?= form_open('') ?>
              <h1>Login Form</h1>
			  <?php if($this->session->flashdata('msg')){
						echo $this->session->flashdata('msg');
					} ?>
              <div>
			  <input type="text" value="<?= set_value('euc') ?>" class="form-control" id="email" placeholder="Enter Email/Username/Contact No" name="euc">
			  <b class="text-danger"><?= form_error('euc'); ?></b>
              </div>
              <div>
			  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
				<b class="text-danger"><?= form_error('pswd'); ?></b>
              </div>
              <div>
			  <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
			  <p class="to_register">Your have already Account?<br>Now Login</p>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 4 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
  </body>
</html>
