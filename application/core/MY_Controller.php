<?php

  class MY_Controller extends CI_Controller
  {
      public function __construct()
      {
        parent::__construct();
        //$this->load->database();
        //$this->load->model(array("M_menu"));
        $this->load->helper(array("url"));
      }
  }
