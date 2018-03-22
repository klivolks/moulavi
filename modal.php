<?php
if($function=='authenticate'){
	authenticate();
}
elseif($function=='insert'){
	$section = $param[3];
	if($section=='admin'){
		insert_admin();
	}
	elseif($section=='client'){
		insert_client();
	}
	elseif($section=='visa'){
		insert_visa();
	}
}
?>