<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index() {
		$data['isi'] = 'profil/index';
		$data['js'] = 'profil/index_js';
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

	function aksi_ubah_password() {
		foreach ($this->input->post('data') as $key => $value) {
			$data[$key] = hash('md5', $value);
		}

		foreach ($this->input->post('where') as $key => $value) {
			$where[$key] = $value;
		}

		$this->db->update('user', $data, $where);

		redirect(base_url());
	}

}