<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Ad_status_airframe extends MY_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->helper("url");
    }

    public function index()
    {
      $data = array(
        "content" => "status_report/ad_status_airframe",
        "title" => "AD Status Airframe",
        "small_tittle" => "",
        "breadcrumb" => ["Home", "Status Report", "AD Status Airframe"]
      );
      $this->load->view("layouts", $data);
    }

  }
