<?php

	class Admins extends CI_Controller{

		// Register user
		// public function register(){

		// 	// Check if the user is already logged in.
		// 	if($this->session->userdata('logged_in')){
		// 		redirect('home');
		// 	}

        //     $data['title'] = 'Sign Up Admin';
            
		// 	$this->form_validation->set_rules('firstName', 'FirstName', 'required');
		// 	$this->form_validation->set_rules('lastName', 'LastName', 'required');
		// 	$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
		// 	$this->form_validation->set_rules('password', 'Password', 'required');
        //     $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
            
		// 	if($this->form_validation->run() === FALSE){
		// 		$this->load->view('templates/header', $data);
		// 		$this->load->view('admins/register', $data);
		// 		$this->load->view('templates/footer');
		// 	} else {
		// 		// Encrypt password
		// 		$enc_password = md5($this->input->post('password'));
		// 		$this->admin_model->register($enc_password);
		// 		// Set message
		// 		$this->session->set_flashdata('user_registered', 'You are now registered and can log in');
		// 		redirect('home');
		// 	}
		// }

		// Log in user
		// public function login(){
			
		// 	// Check if the user is already logged in.
		// 	if($this->session->userdata('logged_in')){
		// 		redirect('home');
		// 	}

		// 	$data['title'] = 'Login admin';
		// 	$this->form_validation->set_rules('username', 'Username', 'required');
		// 	$this->form_validation->set_rules('password', 'Password', 'required');
		// 	if($this->form_validation->run() === FALSE){
		// 		$this->load->view('templates/header', $data);
		// 		$this->load->view('admins/login', $data);
		// 		$this->load->view('templates/footer');
		// 	} else {
		// 		// Get username
		// 		$username = $this->input->post('username');
		// 		// Get and encrypt the password
		// 		$password = md5($this->input->post('password'));
		// 		// Login user
		// 		$getres = $this->admin_model->login($username, $password);
		// 		if($getres){
		// 			// Create session
		// 			$user_data = array(
		// 				'user_id' => $getres[0],
		// 				'first_name' => $getres[1],
		// 				'last_name' => $getres[2],
		// 				'username' => $username,
		// 				'logged_in' => true
		// 			);
		// 			$this->session->set_userdata($user_data);
		// 			// Set message
		// 			$this->session->set_flashdata('user_loggedin', 'You are now logged in');
		// 			redirect('home');
		// 		} else {
		// 			// Set message
		// 			$this->session->set_flashdata('login_failed', 'Login is invalid');
		// 			redirect('admins/login');
		// 		}		
		// 	}
		// }

		// Log user out
		// public function logout(){
		// 	// Unset user data
		// 	$this->session->unset_userdata('logged_in');
		// 	$this->session->unset_userdata('user_id');
        //     $this->session->unset_userdata('username');
        //     $this->session->unset_userdata('first_name');
        //     $this->session->unset_userdata('last_name');
		// 	// Set message
		// 	$this->session->set_flashdata('user_loggedout', 'You are now logged out');
		// 	redirect('home');
		// }

		// Check if username exists
		// public function check_username_exists($username){
		// 	$this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
		// 	if($this->admin_model->check_username_exists($username)){
		// 		return true;
		// 	} else {
		// 		return false;
		// 	}
		// }

	}