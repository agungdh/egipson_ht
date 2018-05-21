<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index() {
		$data['isi'] = 'user/index';
		$data['js'] = 'user/index_js';

		$this->load->view('template/template', $data);
	}

	function tambah() {
		$data['isi'] = 'user/tambah';
		$data['js'] = 'user/tambah_js';

		$this->load->view('template/template', $data);
	}

	function aksi_tambah() {
		var_dump($this->input->post('data'));
	}

}