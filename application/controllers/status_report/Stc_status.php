<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Stc_status extends MY_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->helper("url");
    }

    public function index()
    {
      $data = array(
        "content" => "status_report/stc_status",
        "title" => "STC Status",
        "small_tittle" => "",
        "breadcrumb" => ["Home", "Status Report", "STC Status"]
      );
      $this->load->view("layouts", $data);
    }

  }
