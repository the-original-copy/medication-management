<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medications_Model extends CI_Model{

// For adding expenses
public function add($uid,$sdate,$medication,$dose){
$data=array(
'UserId'=>$uid,
'StartDate'=>$sdate,
'Medication'=>$medication,
'Dose'=>$dose
);
$query=$this->db->insert('tblmedication',$data);
if($query){
$this->session->set_flashdata('success','Medication added successfully.');	
redirect('Medications/add');
} else {
$this->session->set_flashdata('error','Something went wrong. Please try again.');	
redirect('Medications/add');	
}
}
//For Manage Medication
public function manage($uid)
{
	$query=$this->db->select('StartDate,Medication,Dose,NoteDate,ID')
	     ->where('UserId',$uid)
	     ->get('tblmedication');
	     return $query->result();
}

// For medication Deletion
public function delete($uid){
$query=$this->db->where('ID',$uid)
                ->delete('tblmedication');
}


}
