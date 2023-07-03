<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Expenses_Model extends CI_Model{

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
redirect('Expenses/add');
} else {
$this->session->set_flashdata('error','Something went wrong. Please try again.');	
redirect('Expenses/add');	
}
}
//For Manage Expenses
public function manage($uid)
{
	$query=$this->db->select('StartDate,Medication,Dose,NoteDate,ID')
	     ->where('UserId',$uid)
	     ->get('tblmedication');
	     return $query->result();
}

// For expense Deletion
public function delete($uid){
$query=$this->db->where('ID',$uid)
                ->delete('tblmedication');
}

// For expense Edit
public function edit($uid){
	$query=$this->db->where('ID',$uid)
					->edit('tblmedication');
	}
}