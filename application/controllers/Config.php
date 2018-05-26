<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->pustaka->auth($this->session->id, [1]);
	}

	function index() {
		$data['isi'] = 'config/index';
		$data['js'] = 'config/index_js';
		$data['data']['config'] = $this->db->get('config')->row();

		$this->load->view('template/template', $data);
	}

	function aksi_ubah() {
		foreach ($this->input->post('data') as $key => $value) {
			$data[$key] = $value;
		}

		$this->db->update('config', $data);

		redirect(base_url());
	}

}