<?php
if($function=='authenticate'){
	authenticate();
}
if($function=='logout'){
	logout();
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
	elseif($section=='ticketing'){
		insert_ticketing();
	}
	elseif($section=='packages'){
		insert_packages();
	}
}
?>