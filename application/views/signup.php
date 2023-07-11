<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MediApp||Signup</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
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
	

<body>
	
	<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
			<div class="brand-logo">
                  <h3 class="text-center text-primary mb-1">MediApp User Signup</h3>
                  <div class="text-center"><small class="text-muted font-weight-bold">Please enter you credentials</small></div>
              </div>
				
				<div class="panel-body">
<!--success message -->
<?php if($this->session->flashdata('success')){?>
<p style="color:red"><?php  echo $this->session->flashdata('success');?></p>	
<?php } ?>

<!--error message -->
<?php if($this->session->flashdata('error')){?>
<p style="color:red"><?php  echo $this->session->flashdata('error');?></p>	
<?php } ?>


					<form role="form" action="" method="post" id="" name="signup">
<?php echo form_open('signup',['name'=>'signup']);?>


						<fieldset>
							<div class="form-group">
				
<?php echo form_input(['name'=>'fullname','id'=>'fullname','class'=>'form-control','placeholder'=>'Enter your Full Name','value'=>set_value('fullname')]);?>
<?php echo form_error('fullname','<div style="color:red">','<div>')?>

							</div>
							<div class="form-group">

<?php echo form_input(['name'=>'email','id'=>'email','class'=>'form-control','placeholder'=>'Enter  valid email address','value'=>set_value('email')]);?>
<?php echo form_error('email','<div style="color:red">','<div>')?>								
							</div>
							<div class="form-group">

<?php echo form_input(['name'=>'mobileno','id'=>'mobileno','class'=>'form-control','placeholder'=>'Enter  valid  10 digit mobile number','value'=>set_value('mobileno')]);?>
<?php echo form_error('mobileno','<div style="color:red">','<div>')?>		
							</div>
							<div class="form-group">

<?php echo form_password(['name'=>'newpassword','id'=>'newpassword','class'=>'form-control','placeholder'=>'Enter 8 character Password','value'=>set_value('newpassword')]);?>	
<?php echo form_error('newpassword','<div style="color:red">','<div>')?>

							</div>
							<div class="form-group">

<?php echo form_password(['name'=>'repeatpassword','id'=>'repeatpassword','class'=>'form-control','placeholder'=>'Confirm Password','value'=>set_value('repeatpassword')]);?>	
<?php echo form_error('repeatpassword','<div style="color:red">','<div>')?>
							</div>
							<div class="checkbox">
					

<?php echo form_submit(['name'=>'submit','id'=>'submit','class'=>'btn btn-block btn-gradient-info rounded-0 btn-lg font-weight-medium auth-form-btn','value'=>'Submit']);?>
<p style="color:blue"> Already Registered? <a href="<?php echo site_url('Login');?>">Login</a></p>
								
							</div>
							 </fieldset>
				<?php echo form_close();?>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	</div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
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



