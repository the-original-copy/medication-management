<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <?php
$fname=$this->session->userdata('fname');
?>

            <div class="profile-usertitle-name"><?php echo $fname;?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>
        
        <ul class="nav menu">
            <li class="active"><a href="<?php echo site_url('Dashboard');?>"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
            
            
           
            
                    <li><a class="" href="<?php echo site_url('medication/add');?>">
                        <span class="fa fa-arrow-right">&nbsp;</span> Add medication
                    </a></li>
                    <li><a class="" href="<?php echo site_url('medication/manage');?>">
                        <span class="fa fa-arrow-right">&nbsp;</span> Manage medication
                    </a></li>
                




            
            <li><a href="<?php echo site_url('Profile');?>"><em class="fa fa-user">&nbsp;</em> Profile</a></li>
             <li><a href="<?php echo site_url('Changepassword');?>"><em class="fa fa-clone">&nbsp;</em> Change Password</a></li>
<li><a href="<?php echo site_url('Logout');?>"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

        </ul>
    </div>
