<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index() {
		$data['isi'] = 'peminjaman/index';
		$data['js'] = 'peminjaman/index_js';

		$this->load->view('template/template', $data);
	}

	function tambah() {
		$data['isi'] = 'peminjaman/tambah';
		$data['js'] = 'peminjaman/tambah_js';

		$this->load->view('template/template', $data);
	}

	function aksi_tambah() {
		var_dump($this->input->post('data'));
	}

}