<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class Layouts extends MY_Controller{

    public function __construct()
    {
      parent::__construct();
      $this->load->helper("url");
    }

    public function index()
    {
      // $data = array(
      //   "content" => "landing_view",
      //   "title" => "Home",
      //   "small_tittle" => "",
      //   "breadcrumb" => ["Home"],
      //   "menu" => $this->M_menu->tampil()
      // );
      $data=array(
        'content' => "landing_view"
      );
      $this->load->view("layouts", $data);
    }

  }
