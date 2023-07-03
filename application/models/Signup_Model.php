<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup_Model extends CI_Model{


public function index($fname,$lname,$emailid,$mobno,$password){
$data=array(
'FirstName'=>$fname,
'LastName'=>$lname,
'Email'=>$emailid,
'MobileNumber'=>$mobno,
'Password'=>$password);
$query=$this->db->insert('tbluser',$data);
if($query){
$this->session->set_flashdata('success','Registration successfull, Now you can login.');	
redirect('signup');
} else {
$this->session->set_flashdata('error','Something went wrong. Please try again.');	
redirect('signup');	
}

}

}
