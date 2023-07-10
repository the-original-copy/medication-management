<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updatemedication_Model extends CI_Model{
//for getting details
public function getmedicationdetails($uid){
	$query=$this->db->select('StartDate,Medication,Dose,NoteDate')
	->where('UserId',$uid)
	->from('tblmedication')
	->get();
	return $query->row();
}

//For updating details
public function updatemedication($uid,$sdate,$medication,$dose){
$data=array(
	'UserId'=>$uid,
	'StartDate'=>$sdate,
	'Medication'=>$medication,
	'Dose'=>$dose
);	
$query=$this->db->where('UserId',$uid)
                ->update('tblmedication',$data);
}


} 