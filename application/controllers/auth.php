<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login(){
		$data['title'] = 'Login';
		$this->form_validation->set_rules('username','Username', 'required');
		$this->form_validation->set_rules('password','Password ', 'required');

		if ($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('form_login');
			$this->load->view('templates/footer');
		}else{
			$auth = $this->model_auth->cek_login();

			if ($auth == FALSE){
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username atau Password Salah</div>');
				redirect('auth/login');
			}else{
				$this->session->set_userdata('username', $auth->username);
				$this->session->set_userdata('role_id', $auth->role_id);

				switch ($auth->role_id) {
					case 1:
						redirect('admin/dashboard_admin');
						break;
					case 2:
						redirect('welcome');
					break;
					case 3:
						redirect('ceo/dashboard_ceo');
						break;
					default:break;
				}
			}
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}

	public function register()
    {
        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[tb_user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
			$data['title'] = 'User Registration';
			
			$this->load->view('templates/header', $data);
            $this->load->view('form_register');
			$this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => htmlspecialchars($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2
			];
			
            $this->db->insert('tb_user', $data);
            $this->session->set_flashdata('message', '<h4 style="color:green;">Registration Success!</h4');
            redirect('auth/login');
        }
    }
}
