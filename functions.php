<?php
function redirect($location){
	header('Location: '.$location);
}
function authenticate(){
	$input = new input;
	$db = new db;
	$username = $input->post('username');
	$password = $input->post('password');
	$data = $db->get('users','`id`,`password`',"WHERE (`username` = '$username' OR `email` = '$username') AND `status` = 1");
	echo $data['error'];
	if(isset($data['result'])){
		if(sha1($password)==$data['result'][0][1])
		{
			$_SESSION['admin']=$data['result'][0][0];
			redirect('/app/');
		}
		else{
			redirect('/login/?msg=wrong-password');
		}
	}
	else{
		redirect('/login/?msg=username-not-found');
	}
}
function session_check(){
	$admin = $_SESSION['admin'];
	$db = new db;
	$data = $db->get('users','count(*)',"WHERE `id` = '$admin' AND `status`=1");
	if($data['result'][0][0]==1){
		return true;
	}
	else{
		session_destroy();
		return false;
	}
}
?>