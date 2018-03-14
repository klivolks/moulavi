<?php
	if($plugin==''){
		$load->view('public/meta');
		$load->view('public/login');
		$load->view('public/footer');
	}
	elseif($plugin=='login'){
		$load->view('public/meta');
		$load->view('public/login');
		$load->view('public/footer');
	}
	elseif($plugin=='app'){
		if(session_check()){
			$subpage=$param[2];
			if($subpage==''){
				$load->view('public/meta');
				$load->view('public/header');
				$load->view('public/sidebar');
				$load->view('public/dashboard');
				$load->view('public/sub-footer');
				$load->view('public/footer');
			}
			elseif($subpage=='admins'){
				if($param[3]==''){
					$load->view('public/meta');
					$load->view('public/header');
					$load->view('public/sidebar');
					$load->view('public/all-admin');
					$load->view('public/sub-footer');
					$load->view('public/footer');
				}
				elseif($param[3]=='add'){
					$load->view('public/meta');
					$load->view('public/header');
					$load->view('public/sidebar');
					$load->view('public/add-admin');
					$load->view('public/sub-footer');
					$load->view('public/footer');
				}
			}
		}
		
		
		
		
		else{
			redirect('/');
		}
	}
?>