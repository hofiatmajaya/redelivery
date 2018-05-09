<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Sb_status_engine extends MY_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->helper("url");
    }

    public function index()
    {
      $data = array(
        "content" => "status_report/sb_status_engine",
        "title" => "SB Status Engine",
        "small_tittle" => "",
        "breadcrumb" => ["Home", "Status Report", "SB Status Engine"]
      );
      $this->load->view("layouts", $data);
    }

  }
