<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Ad_status_apu extends MY_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->helper("url");
    }

    public function index()
    {
      $data = array(
        "content" => "status_report/ad_status_apu",
        "title" => "AD Status APU",
        "small_tittle" => "",
        "breadcrumb" => ["Home", "Status Report", "AD Status APU"]
      );
      $this->load->view("layouts", $data);
    }

  }
