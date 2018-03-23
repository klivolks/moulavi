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
	$data = array('client'=>$input->post('client'), 'visa_type'=>$input->post('visa_type'), 'sales_amount'=>$input->post('sales_amount'), 'service_charge'=>$input->post('service_charge'), 'passport_name'=>$input->post('passport_name'), 'passport_no'=>$input->post('passport_no'), 'dob'=>$input->post('dob'), 'passport_expiry'=>$input->post('passport_expiry'), 'visa_no'=>$input->post('visa_no'), 'visa_date'=>$input->post('visa_date'), 'id_no'=>$input->post('id_no'), 'profession'=>$input->post('profession'));
	$db->insert('visa',$data);
	redirect('/app/visa/');
}
function insert_ticketing(){
	$db = new db;
	$input = new input;
	$data = array('name'=>$input->post('name'), 'sector'=>$input->post('sector'), 'sales_amount'=>$input->post('sales_amount'), 'flight_no'=>$input->post('flight_no'), 'date_of_travel'=>$input->post('date_of_travel'), 'purchase_amt'=>$input->post('purchase_amt'), 'purchase_agent'=>$input->post('purchase_agent'));
	$db->insert('ticketing',$data);
	redirect('/app/ticketing/');
}
function insert_packages(){
	$db = new db;
	$input = new input;
	$data = array('tour_name'=>$input->post('tour_name'), 'no_of_seats'=>$input->post('no_of_seats'), 'date_of_travel'=>$input->post('date_of_travel'), 'package_selling_price'=>$input->post('package_selling_price'), 'flight_details'=>$input->post('flight_details'), 'name'=>$input->post('name'), 'passport_no'=>$input->post('passport_no'), 'gender'=>$input->post('gender'), 'dob'=>$input->post('dob'), 'passport_expiry'=>$input->post('passport_expiry'), 'tour_code'=>$input->post('tour_code'), 'purchase_cost'=>$input->post('purchase_cost'), 'ticket'=>$input->post('ticket'), 'stay'=>$input->post('stay'));
	$db->insert('packages',$data);
	redirect('/app/tour-packages/');
}
?>