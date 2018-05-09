<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Ldnd_status extends MY_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->helper("url");
    }

    public function index()
    {
      $data = array(
        "content" => "LDND/ldnd_status",
        "title" => "LDND Status",
        "small_tittle" => "",
        "breadcrumb" => ["Home", "Last Done Next Due Status", "LDND Status"]
      );
      $this->load->view("layouts", $data);
    }

  }
