<!DOCTYPE html>
<html>
<head>
	  <!-- Required meta tags -->
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>MediApp||Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="" />

	
</head>
<body>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                  <h3 class="text-center text-primary mb-1">MediApp User Login</h3>
                  <div class="text-center"><small class="text-muted font-weight-bold">Please enter you credentials</small></div>
              </div>
			
<?php
if($this->session->flashdata('error')){ ?>
<p style="color:red"><?php  echo $this->session->flashdata('error');?></p>	
<?php } ?>

<?php echo form_open('login',['name'=>'login']);?>

						<fieldset>
							<div class="form-group">
						
<?php echo form_input(['name'=>'email','id'=>'email','class'=>'form-control','placeholder'=>'Enter email ','value'=>set_value('email')]);?>
<?php echo form_error('email','<div style="color:red">','<div>')?>
							</div>
		<a href="<?php echo site_url('Resetpassword');?>">Forgot Password?</a>
							<div class="form-group">
							
<?php echo form_password(['name'=>'password','id'=>'password','class'=>'form-control','placeholder'=>'Enter the Password','value'=>set_value('password')]);?>
<?php echo form_error('password','<div style="color:red">','<div>')?>	

							</div>
							<div class="checkbox">

<?php echo form_submit(['name'=>'login','id'=>'login','class'=>'btn btn-block btn-gradient-info rounded-0 btn-lg font-weight-medium auth-form-btn','value'=>'login']);?>	
								
									<hr />
							<p style="color:blue">Not registered yet ? 
								<a href="<?php echo site_url('Signup');?>"> Registere Here</a></p>
							</div>
							</fieldset>
					<?php echo form_close();?>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
	<script src="<?php echo base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url() ?>assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url() ?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url() ?>assets/js/misc.js"></script>
  <!-- endinject -->
  <script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>


</body>
</html>



