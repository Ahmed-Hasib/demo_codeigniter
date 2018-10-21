<?php
class My_model extends CI_Model{

   public function first_name(){
       return "Hasib";
   }
   public function last_name(){
       return "Ahmed";
   }
   public function lover($name){
       if($name=="soma")
       {
           return "Sumaiya afroj Soma";
       }
       return "Not found";
   }


}

?>