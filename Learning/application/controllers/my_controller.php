<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class my_controller extends CI_Controller {
     
     
     
     public function index(){
         
         $this->load->view("home");
     }
     public function test(){
         
         $this->load->model("My_model");
         $first_name=$this->My_model->first_name();
         echo "My Name ".$first_name."<br>";
         $gf=$this->My_model->lover("soma");
         echo "Girl Friend Name is : ".$gf."<br>";

         $this->load->model("Test_model","ts");//second parameter is used to shorten the model name
         $name=$this->ts->testing();
         echo $name;

         
     }
 }
?>