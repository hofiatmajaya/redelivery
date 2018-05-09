<?php
function SaveTextPass($key, $s){
	$result = CryptRet($key, $s);

	$lr = strlen($result);
	$lh = "";
	for($li=0;$li<$lr;$li++){
		$lj = dechex(ord(substr($result, $li, 1)));
		if(strlen($lj) == 1){
			$lj = "0".$lj;
		}
		$lh = $lh.$lj;
	}

	if(strlen($lh)<=9){
		$lx="0".strlen($lh);
	}else{
		$lx=strlen($lh);
	}
	$lh = strtoupper($lx.$lh);

	return $lh;
}

function GetSaveTextPass($key, $s){
	$ls = strlen($s);
	if($ls <= 101){
		$x = 2;
	}elseif($ls <= 1002){
		$x = 3;
	}elseif($ls <= 10003){
		$x = 4;
	}elseif($ls <= 100004){
		$x = 5;
	}
	$left = intval(substr($s, 0, $x));
	$lh = substr($s, $x, $left);
	$lstrg = "";
	for($li=0;$li<strlen($lh);$li += 2){
		$lj = substr($lh, $li, 2);
		$lstrg = $lstrg.chr(hexdec($lj));
	}
	$lstrg = CryptRet($key, $lstrg);

	return $lstrg;
}

function CryptRet($pass, $str){
	$la = 1;
	$p = strlen($pass);

	$leng = strlen($str);

	for($li=1;$li<=$leng;$li++){
		$lb = ord(substr($pass, $la-1, 1));

		$la++;
		if($la>$p){
			$la = 1;
		}

		$tmp = chr(ord(substr($str, $li-1, 1)) ^ $lb);
		$str = substr_replace($str, $tmp, $li-1, 1);
	}

	return $str;
}

?>
