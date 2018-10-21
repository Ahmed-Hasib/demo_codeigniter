<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class User_details extends CI_Controller
  {

      public function index($notification="")
      {
         $this->load->helper('my_helper');
         $this->load->model('User_model');
         $data['title']="CodeIgniter Learning";
         $data["notification"]=$notification;
         $data['user_data']=$this->User_model->user_data();

         $this->load->view('User_view',$data);
      }
      public function form_validation(){
          $this->load->library('form_validation');
          $this->form_validation->set_rules("name","Person name","required");
          $this->form_validation->set_rules("hobby","Person Hobby","required");
          if($this->form_validation->run()) {
//              $this->load->model('User_model');
//              $data['user_data']=$this->User_model->user_data();
//              $this->load->view('User_view',$data);
              $this->load->model('User_model');
              $data = array(
                  "name" => $this->input->post('name'),
                  "hobby" => $this->input->post('hobby')

              );
              $this->User_model->insert_data($data);
              redirect(base_url() . "User_details/");
          }
          else
          {
             // $this->index();
              redirect(base_url() . "User_details/");
          }
      }

      public  function delete_data(){
       $id=$_GET['id'];
       $this->load->model('User_model');
       $status['status']=$this->User_model->delete_data($id);
          redirect(base_url() . "User_details/");

      }
      public function  update_data(){

        if(isset($_GET['id']))
         {
           $_SESSION['id']= $_GET['id'];
           $id=$_GET['id'];
         }
         else
         {
             $id=$_SESSION['id'];

         }

            $this->load->view('view_update');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Person Name', 'required');
            $this->form_validation->set_rules('hobby', 'Person Hobby', 'required');
            if ($this->form_validation->run()) {
                $data = array(
                    "name" => $this->input->post('name'),
                    "hobby" => $this->input->post('hobby')
                );
                $this->load->model("User_model");
                $this->User_model->update_data($data,$id);

               redirect(base_url() . "User_details/");
                $notification="Edition completed";


            }

      }
  }

?>