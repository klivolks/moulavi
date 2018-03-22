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
function insert_admin(){
	$db = new db;
	$input = new input;
	if($input->post('password')==$input->post('retype_password')){
		$data = array('username'=>$input->post('username'), 'password'=>sha1($input->post('password')), 'email'=>$input->post('email'), 'status'=>1);
		$id=$db->insert('users',$data);
		redirect('/app/admins/');
	}
	else{
		redirect('/app/admin/add/?msg=passwords-doesnot-match');
	}
}
function insert_client(){
	$db = new db;
	$input = new input;
	$data = array('client_type'=>$input->post('client_type'), 'client_name'=>$input->post('client_name'), 'client_address'=>$input->post('client_address'), 'client_phone'=>$input->post('client_phone'), 'client_email'=>$input->post('client_email'));
	$db->insert('clients',$data);
	redirect('/app/clients/');
}
function insert_visa(){
	$db = new db;
	$input = new input;
}
?>