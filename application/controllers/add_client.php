
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            
            
           <div class="col-12 grid-margin stretch-card">
              <div class="card rounded-0">
                <div class="card-header bg-gradient-info text-white rounded-0">
                  <h4 class="card-title text-white mb-0">Add User</h4>
                </div>
                <div class="card-body">
                    <?php if($this->session->has_userdata('msg'))
        {?>
                    <script>
                        toast();
                        </script>
    <?php //echo $this->session->userdata('msg'); ?>
 <?php
  
        }
 $this->session->unset_userdata('msg');
?>   
                  <p class="card-description text-info font-style-italic">
                    Kindly fill all the fields below before submitting the form.
                  </p>
                  <form class="forms-sample" method="post" action="<?php echo base_url() ?>/Home/add_client">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" required="" class="form-control" name="name" id="exampleInputName1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email</label>
                      <input type="text" required=""  name="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3">Contact Number</label>
                      <input type="text" required="" maxlength="10"  onkeypress="return isNumber(event)" onchange="check_mobnumber()" name="mobile" class="form-control" id="exampleInputEmail3" placeholder="Mobile">
                    </div>
                    
                    
                    
                    <div class="form-group">
                      <label for="exampleInputCity1">Password</label>
                      <input type="text" name="password" class="form-control" id="exampleInputCity1" placeholder="Password">
                    </div>
                    
                    <div class="form-group text-center">
                          <button type="submit" name="add" class="btn btn-gradient-info mr-2 rounded-0">Add User</button>
                          <a class="btn btn-light border rounded-0" href="<?= base_url('Home/view_client') ?>">Cancel</a>
                    </div>
                  </form>
                </div>
              </div>
            </div> 
            
            
            
        </div>
        <!-- content-wrapper ends -->
        <script>
       function check_mobnumber()
{
    a=document.getElementById("mobile").value;
    if(a.length<10)
    {
       document.getElementById("mobile").style.borderColor="red"; 
       number.focus();
       alert("must Have 10 numbers");
    }
    else
    {
        document.getElementById("mobile").style.borderColor="";
    }
    
}
</script>
<script>
    function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
    </script>