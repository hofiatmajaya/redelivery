<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Ad_status_engine extends MY_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->helper("url");
    }

    public function index()
    {
      $data = array(
        "content" => "status_report/ad_status_engine",
        "title" => "AD Status Engine",
        "small_tittle" => "",
        "breadcrumb" => ["Home", "Status Report", "AD Status Engine"]
      );
      $this->load->view("layouts", $data);
    }

  }
