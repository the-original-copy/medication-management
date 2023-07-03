<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Model extends CI_Model{

//function for todays Expenses
public function todaysexpenses($uid){
$tdate=date('Y-m-d');
$data=array(
'StartDate'=>$tdate,
'UserId'=>$uid
);
$this->db->select_sum('Dose');
$this->db->where($data);
$result=$this->db->get('tblmedication')->row();
return $result->Dose;
}

//Function for yesterday expenses
public function yesterdayxpenses($uid){
$tdate=date('Y-m-d',strtotime("-1 days"));
$data=array(
'StartDate'=>$tdate,
'UserId'=>$uid
);
$this->db->select_sum('Dose');
$this->db->where($data);
$result=$this->db->get('tblmedication')->row();
return $result->Dose;
}

//Function for last 7 days expenses
public function last7daysexpenses($uid){
$pasttdate=date('Y-m-d',strtotime("-1 week"));
$cdate=date('Y-m-d');

$data=array(
'StartDate>='=>$pasttdate,
'StartDate<='=>$cdate,
'UserId'=>$uid
);
$result=$this->db->select_sum('Dose')
         ->where($data)
         ->get('tblmedication')->row();  
return $result->Dose;
}

//Function for last 30 days expenses
public function last30daysexpenses($uid){
$pasttdate=date('Y-m-d',strtotime("-1 month"));
$cdate=date('Y-m-d');

$data=array(
'StartDate>='=>$pasttdate,
'StartDate<='=>$cdate,
'UserId'=>$uid
);
$this->db->select_sum('Dose');
$this->db->where($data);
$result=$this->db->get('tblmedication')->row();
return $result->Dose;
}

//Function for current year expenses
public function currentyearsexpenses($uid){
$tdate=date("Y");
$data=array(
'year(StartDate)'=>$tdate,
'UserId'=>$uid
);
$this->db->select_sum('Dose');
$this->db->where($data);
$result=$this->db->get('tblmedication')->row();
return $result->Dose;
}

//Function for total expenses
public function totalsexpenses($uid){
$data=array(
'UserId'=>$uid
);
$this->db->select_sum('Dose');
$this->db->where($data);
$result=$this->db->get('tblmedication')->row();
return $result->Dose;
}


}