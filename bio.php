<?php
// buat class bio
class bio {
 
   public $Nama,$Tempat_Lahir,$Kelas,$Status ;
  
  
   public function __construct($Nama,$Tempat_Lahir,$Kelas,$Status){
   $this->Nama =$Nama;
   $this->Tempat_Lahir =$Tempat_Lahir;
   $this->Kelas=$Kelas;
   $this->Status=$Status;
   }
  
   public function get_bio(){
     return $this->Nama;
   }
   public function get_tlh(){
     return $this->Tempat_Lahir;
 }
   public function get_kls(){
    return $this->Kelas;
   }
   public function get_stts(){
    return $this->Status;
   }}
  ?>