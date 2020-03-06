<?php

class Users extends CI_Controller{
		//Register user
		public function register(){
			$data['title'] = 'Register Here';

			$this->form_validation->set_rules('name','Name','trim|required');
			$this->form_validation->set_rules('username','Username',
			'trim|required|is_unique[users.username]',array(
				'required' => 'You have not provided %s.',
				'is_unique' => 'This %s already exists, Please try to register with another.'
			));
			$this->form_validation->set_rules('email','Email','trim|required|is_unique[users.email]',array(
				'required' => 'You have not provided %s.',
				'is_unique' => 'This %s already exists, Please try to register with another'
			));
			$this->form_validation->set_rules('gender','Gender','required');
			$this->form_validation->set_rules('password','Password',
			'trim|required|min_length[6]');
			$this->form_validation->set_rules('password2','Confirm Password',
			'trim|required|min_length[6]|matches[password]');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('users/register',$data);
				$this->load->view('templates/footer');
			}else {
				//Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				//set message
				$this->session->
				set_flashdata('user_registered','Done! You can login now');
				redirect('users/login');
			}
		}

		//Login user
		public function login(){
			$data['title'] = 'Login Here';

			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required|min_length[6]');

			if ($this->form_validation->run() === FALSE) {
				$this->load->view('templates/header');
				$this->load->view('users/login',$data);
				$this->load->view('templates/footer');
			}else {
				//Get username
				$username = $this->input->post('username');

				//Get and Encrypt password
				$password = md5($this->input->post('password'));

				//Login user
				$user_id = $this->user_model->login($username,$password);

				if ($user_id) {
					//Create session
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					//set message
					$this->session->set_flashdata('user_loggedin','You are now logged in!');
					redirect('posts');
				}else {
					//set message
					$this->session->set_flashdata('login_failed','Oops! Please check login credentials or Register right now!');
					redirect('users/login');
				}

			}
		}

		//User Logout
		public function logout(){
			//Unset userdata
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			$this->session->set_flashdata('user_loggedout','You are now logged out!');
			redirect('users/login');
		}



		//check if username exists
		// function check_username_exists($username){
		// 	$this->form_validation->set_message('check_username_exists','That username is taken. Please choose a diffrent one!');
		// 	if ($this->auth_model->check_username_exists($username)) {
		// 		return true;
		// 	} else {
		// 		return false;
		// 	}
		// }

		//check if email exists
		// function check_email_exists($email){
		// 	$this->form_validation->set_message('check_email_exists','That email is taken. Please choose a diffrent one!');
		// 	if ($this->auth_model->check_email_exists($email)) {
		// 		return true;
		// 	} else {
		// 		return false;
		// 	}
		// }
}
