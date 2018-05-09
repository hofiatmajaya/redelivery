<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   *
   */
  class M_login extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }

    public function cek_login($user, $pass){
		$query = $this->db->query("select * from user where username='".$pass."' and  email='".$user."'");
		$res = $query->result_array();
        return $res ;
    }
	 public function get_user($user, $pass){
		$query = $this->db->query("SELECT user.user_id, username, email, full_name,  role.role_id as roleid, role_name FROM user 
		JOIN user_role ON user.user_id = user_role.user_id
		JOIN role ON user_role.role_id = role.role_id
		where username='".$pass."' and  email='".$user."'");
		$res = $query->row();
        return $res ;
    }


    public function cek_menu($role_id, $link){
		$query = $this->db->query("SELECT role_name, menu_item_link, menu_item_isactive FROM role
				JOIN menu_role ON menu_role.role_id=role.role_id
				JOIN menu_item ON menu_role.menu_item_id=menu_item.menu_item_id
				WHERE role.role_id = '".$role_id."' AND menu_item_isactive='1' AND menu_item_link = '".$link."'");
		$res = $query->result_array();
        return $res ;
    }


  }
