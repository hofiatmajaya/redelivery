<?php


  function buildMenu($array, $ischild = false)
  {
    echo '<ul>';
    foreach ($array as $item)
    {
      echo '<li>';
      echo $item->ki_name;
      if (!empty($item->children))
      {
        buildMenu($item->children, true);
      }
      echo '</li>';
    }
    echo '</ul>';
  }

  function generatePageTree($datas, $depth = 1, $parent = 0){
  	if($depth > 1000) return '';
  	$tree = '';
  	for($i=0, $ni=count($datas); $i < $ni; $i++){
  		if($datas[$i]->ki_parent_id == $parent){
  			$tree .= "<option class='item' value='".$datas[$i]->ki_id."'> <span>L".$depth."</span>&nbsp;".str_repeat('&nbsp;&nbsp;', $depth);
  			$tree .= $datas[$i]->ki_name."</option>";
  			$tree .= generatePageTree($datas, $depth+1, $datas[$i]->ki_id);
  		}
  	}
  	return $tree;
  }

  function getDeepChild($id)
  {
    $ci = & get_instance();
    $ci->dev_gmf = $ci->load->database("dev_gmf", true);
    $sql = "select count(ki_parent_id) as total from kpi_item where ki_parent_id = '".$id."'";
    $exec = $ci->dev_gmf->query($sql);
    $arr = $exec->row();
    return $arr->total;
  }

  function generatePageTreeTable($datas, $depth = 1, $parent = 0){
  	if($depth > 1000) return '';
    $deepChild = 1;
  	$tree = '';
  	for($i=0, $ni=count($datas); $i < $ni; $i++){
  		if($datas[$i]->ki_parent_id == $parent){
        $target = explode("|", $datas[$i]->kid_target);
  			$tree .= "<tr data-id='".$datas[$i]->ki_id."' data-parent='".$datas[$i]->ki_parent_id."' data-level='".$depth."'> <td data-column='name'> L".$depth."&nbsp;&nbsp;-".str_repeat('&nbsp;&nbsp;&nbsp;', $depth);
  			$tree .= $datas[$i]->ki_name."</td>";
        $tree .= "<td>".$datas[$i]->ki_uom."</td>";
        $tree .= "<td>".$datas[$i]->kf_name."</td>";
        if(getDeepChild($datas[$i]->ki_id) == 0){
          $tree .= "<td>".(!empty($datas[$i]->kid_target && count($target) == 1) ? $datas[$i]->kid_target : "<span class='text-danger'>-</span>")."</td>";
          $tree .= "<td>".(!empty($datas[$i]->kid_target && count($target) > 1) ? $target[0] : "<span class='text-danger'>-</span>")."</td>";
          $tree .= "<td>".(!empty($datas[$i]->kid_target && count($target) > 1) ? $target[1] : "<span class='text-danger'>-</span>")."</td>";
          $tree .= "<td>".(!empty($datas[$i]->kid_weight) ? $datas[$i]->kid_weight : "<span class='text-danger'>-</span>")."</td>";
          $tree .= "<td>".(!empty($datas[$i]->kid_limit) ? $datas[$i]->kid_limit : "<span class='text-danger'>-</span>")."</td>";
          $tree .= "<td>";
          $tree .= "<button type='button' id='detail' data-toggle='modal' data-target='#detailItem' data-formula='".$datas[$i]->fa_function_name."' data-uom='".$datas[$i]->ki_uom."' data-ki_name='".$datas[$i]->ki_name."' data-id='".$datas[$i]->ki_id."' class='btn btn-flat bg-navy'><i class='fa fa-wrench'></i></button>";
          $tree .= "<button type='button' id='delete' data-id='".$datas[$i]->ki_id."' class='btn btn-flat btn-danger'><i class='fa fa-trash'></i></button>";
          $tree .= "</td>";
        } else{
          $tree .= "<td>"."<span class='text-danger'>-</span>"."</td>";
          $tree .= "<td>"."<span class='text-danger'>-</span>"."</td>";
          $tree .= "<td>"."<span class='text-danger'>-</span>"."</td>";
          $tree .= "<td>"."<span class='text-danger'>-</span>"."</td>";
          $tree .= "<td>"."<span class='text-danger'>-</span>"."</td>";
          $tree .= "<td>";
          $tree .= "<button type='button' id='delete' data-id='".$datas[$i]->ki_id."' class='btn btn-flat btn-danger'><i class='fa fa-trash'></i></button>";
          $tree .= "</td>";
        }
        $tree .= "</tr>";
  			$tree .= generatePageTreeTable($datas, $depth+1, $datas[$i]->ki_id);
  		}
  	}
  	return $tree;
  }

  function generatePageTreeTwo($datas, $depth = 0, $parent = 0){
  	if($depth > 1000) return ''; // Make sure not to have an endless recursion
  	$tree = '';
  	for($i=0, $ni=count($datas); $i < $ni; $i++){
  		if($datas[$i]['parent'] == $parent){
  			$tree .= str_repeat('-', $depth);
  			$tree .= $datas[$i]['name'] . '<br/>';
  			$tree .= generatePageTree($datas, $depth+1, $datas[$i]['id']);
  		}
  	}
  	return $tree;
  }


 ?>
