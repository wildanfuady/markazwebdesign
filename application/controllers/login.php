<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username','Username','required|alpha_numeric');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric');
		$this->form_validation->set_rules('jabatan','Password','required|alpha_numeric');
		
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('dashboard/v_login');
		} else {
			$this->load->model('m_login');
			$valid_user = $this->m_login->cekdb();
			
			if($valid_user == FALSE)
			{
				redirect('login?pesan=gagal');
			} else {
				// if the username and password is a match
				$this->session->set_userdata('username', $valid_user->username);
				$this->session->set_userdata('nama_user', $valid_user->nama_user);
				$this->session->set_userdata('jabatan', $valid_user->jabatan);
				
				switch($valid_user->jabatan){
					case "ADMIN" : //admin
								redirect('markaz_admin'); 
								break;
					case "" : //member
								redirect('login');
								break;
					default: break; 
				}
			}
		}
	}

	  function log()
	  {
	    $this->form_validation->set_rules('username','Username','required|alpha_numeric');
	    $this->form_validation->set_rules('password','Password','required|alpha_numeric');
	    $this->form_validation->set_rules('jabatan','Jabatan','required|alpha_numeric');
	    
	    if($this->form_validation->run() == FALSE)
	    {
	      $this->load->view('dashboard/v_login');
	    } else {
	      $this->load->model('m_login');
	      $valid_user = $this->m_login->cekdb();
	      
	      if($valid_user == FALSE)
	      {
	        $this->session->set_flashdata('error','Wrong Username / Password!');
	        redirect('markaz_admin/login?pesan=gagal');
	      } else {
	        // if the username and password is a match
	        $this->session->set_userdata('username', $valid_user->username);
	        $this->session->set_userdata('jabatan', $valid_user->jabatan);
	        
	        switch($valid_user->jabatan){
	          case "ADMIN" : //admin
	                redirect('markaz_admin'); 
	                break;
	          case "" : //member
	                redirect('markaz_admin/login?pesan=gagal');
	                break;
	          default: break; 
	        }
	      }
	    }
	  }

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login?pesan=logout');
	}
}