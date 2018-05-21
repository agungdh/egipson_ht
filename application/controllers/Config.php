<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index() {
		$data['isi'] = 'config/index';
		// $data['js'] = 'config/index_js';
		$data['data']['user'] = $this->db->get_where('user', ['id' => $this->session->id])->row();

		$this->load->view('template/template', $data);
	}

	function aksi_ubah() {
		foreach ($this->input->post('data') as $key => $value) {
			$data[$key] = $value;
		}

		foreach ($this->input->post('where') as $key => $value) {
			$where[$key] = $value;
		}

		$this->db->update('user', $data, $where);

		$this->session->set_userdata('nama', $data['nama']);

		redirect(base_url());
	}

}