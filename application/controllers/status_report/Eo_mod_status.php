<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Eo_mod_status extends MY_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->helper("url");
    }

    public function index()
    {
      $data = array(
        "content" => "status_report/eo_mod_status",
        "title" => "EO Mod Status",
        "small_tittle" => "",
        "breadcrumb" => ["Home", "Status Report", "EO Mod Status"]
      );
      $this->load->view("layouts", $data);
    }

  }
