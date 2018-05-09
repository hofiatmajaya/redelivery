<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Sb_status_apu extends MY_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->helper("url");
    }

    public function index()
    {
      $data = array(
        "content" => "status_report/sb_status_apu",
        "title" => "SB Status APU",
        "small_tittle" => "",
        "breadcrumb" => ["Home", "Status Report", "SB Status APU"]
      );
      $this->load->view("layouts", $data);
    }

  }
