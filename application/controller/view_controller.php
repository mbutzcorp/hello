<?php

require_once 'application/model/Model_home.php';


class view_controller {


   public function __construct() {
         error_reporting(0);
        $this->model->home= new database_home();
    }

  // Status
   public function show_home(){
        $data_donasi = $this->model->home->select_home();      
        include 'application/view/home/alenovan.php';
    }

  }





  
   
       
    





     

  