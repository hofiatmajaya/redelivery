<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Sb_status_airframe extends MY_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->helper("url");
    }

    public function index()
    {
      $data = array(
        "content" => "status_report/sb_status_airframe",
        "title" => "SB Status Airframe",
        "small_tittle" => "",
        "breadcrumb" => ["Home", "Status Report", "SB Status Airframe"]
      );
      $this->load->view("layouts", $data);
    }

  }
