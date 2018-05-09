
<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

  class M_menu extends CI_Model
  {
     public function __construct()
      {
        parent::__construct();
      }

      public function tampil()
      {
        // $this->db->where("menu_item_isparent", "0");
        // $this->db->where("menu_item_isactive", "1");
        $query = $this->db->query("SELECT * FROM `menu_item`
			JOIN menu_role ON menu_role.menu_item_id=menu_item.menu_item_id
			WHERE `menu_item_isparent` = '0' AND `menu_item_isactive` = '1' order by menu_item.menu_item_id");
        $data = array();
        if ($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                // $this->db->where("menu_item_isparent", $row->menu_item_id);
                // $this->db->where("menu_item_isactive", "1");
                $query2 = $this->db->query("SELECT * FROM `menu_item`
					JOIN menu_role ON menu_role.menu_item_id=menu_item.menu_item_id
					WHERE `menu_item_isparent` = '".$row->menu_item_id."' AND `menu_item_isactive` = '1'  order by menu_item.menu_item_id");
                $data2 = array();
                foreach ($query2->result() as $row2) {
                  $data2[] = $row2;
                }
                $data[] = array(
                  'menu_item_id' => $row->menu_item_id,
                  'menu_item_name' => $row->menu_item_name,
                  'menu_item_link' => $row->menu_item_link,
                  'menu_item_icon' => $row->menu_item_icon,
                  'menu_item_isparent' => $row->menu_item_isparent,
                  'menu_item_isactive' => $row->menu_item_isactive,
                  'role_id' => $row->role_id,
                  'child' => $data2
                );
            }
        }

        return $data;
      }

      public function del_menu($id)
      {
        $id = GetSaveTextPass("GMF", $id);
        $query = "update menu_item set menu_item_isactive = '0' where menu_item_id = '".$id."'";
        return ($this->db->query($query)) ? true : false;
      }

      public function get_menu_item_where($id)
      {
        $this->db->where("menu_item_id", GetSaveTextPass("GMF", $id));
        $this->db->where("menu_item_isactive", "1");
        $query = $this->db->get("menu_item");

        // if($query->num_rows() > 0){
        //   foreach($query->result() as $menu) {
        //     $data = $menu;
        //   }
        // }
        return $query->row();

      }

      public function save_menu()
      {
        $menu_item_name = $this->input->post("menu_item_name");
        $menu_item_link = $this->input->post("menu_item_link");
        $menu_item_icon = $this->input->post("menu_item_icon");
        $menu_item_isparent = $this->input->post("menu_item_isparent");
        $sql = "
                INSERT INTO menu_item
                (menu_item_name, menu_item_link, menu_item_icon, menu_item_isparent, menu_item_isactive)
                VALUES('".$menu_item_name."', '".$menu_item_link."', '".$menu_item_icon."', '".$menu_item_isparent."', '1')
               ";
         return ($this->db->query($sql)) ? true : false;
      }

      public function update_menu()
      {
        $menu_item_id = GetSaveTextPass("GMF", $this->input->post("menu_item_id"));
        $menu_item_name = $this->input->post("menu_item_name");
        $menu_item_link = $this->input->post("menu_item_link");
        $menu_item_icon = $this->input->post("menu_item_icon");
        $menu_item_isparent = $this->input->post("menu_item_isparent");
        $sql = "update menu_item set
                menu_item_name = '".$menu_item_name."',
                menu_item_link = '".$menu_item_link."',
                menu_item_icon = '".$menu_item_icon."',
                menu_item_isparent = '".$menu_item_isparent."'
                where menu_item_id = '".$menu_item_id."'";
        return ($this->db->query($sql)) ? true : false;
      }

      public function get_menuParent()
      {
        $this->db->where("menu_item_isparent", "0");
        $this->db->where("menu_item_isactive", "1");
        $query = $this->db->get("menu_item");
        $data = array();
        if($query->num_rows() > 0){
          foreach ($query->result() as $menuParent) {
            $data[] = $menuParent;
          }
        }
        return $data;
      }

      public function get_current_page_records($limit, $start)
       {
           $this->db->limit($limit, $start);
           $this->db->where("menu_item_isparent", "0");
           $this->db->where("menu_item_isactive", "1");
           $query = $this->db->get("menu_item");
           if ($query->num_rows() > 0)
           {
             $data = array();
               foreach ($query->result() as $row)
               {
                   $this->db->where("menu_item_isparent", $row->menu_item_id);
                   $this->db->where("menu_item_isactive", "1");
                   $query2 = $this->db->get("menu_item");
                   $data2 = array();
                   foreach ($query2->result() as $row2) {
                     $data2[] = $row2;
                   }
                   $data[] = array(
                     'menu_item_id' => $row->menu_item_id,
                     'menu_item_name' => $row->menu_item_name,
                     'menu_item_link' => $row->menu_item_link,
                     'menu_item_icon' => $row->menu_item_icon,
                     'menu_item_isparent' => $row->menu_item_isparent,
                     'menu_item_isactive' => $row->menu_item_isactive,
                     'child' => $data2
                   );
               }
			   // print_r($data);
               return $data;
           }

           return false;
       }

     public function get_total()
       {
           $this->db->where("menu_item_isparent", "0");
           $this->db->from("menu_item");
           return $this->db->count_all_results();
       }


  }
