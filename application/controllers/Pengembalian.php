<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->pustaka->auth($this->session->level, [1, 2]);
	}

	function index() {
		$data['isi'] = 'pengembalian/index';
		$data['js'] = 'pengembalian/index_js';

		$this->load->view('template/template', $data);
	}

	function tambah() {
		$data['isi'] = 'pengembalian/tambah';
		$data['js'] = 'pengembalian/tambah_js';

		$this->load->view('template/template', $data);
	}

	function ubah($id) {
		$data['isi'] = 'pengembalian/ubah';
		$data['js'] = 'pengembalian/ubah_js';
		$data['data']['pengembalian'] = $this->db->get_where('pengembalian', ['id' => $id])->row();

		$this->load->view('template/template', $data);
	}

	function aksi_tambah() {
		foreach ($this->input->post('data') as $key => $value) {
			switch ($key) {
				case 'tanggal':
					$date=date_create($value);
					$data[$key] = date_format($date,"Y-m-d");
					break;
				
				default:
					$data[$key] = $value;
					break;
			}
		}

		$this->db->insert('pengembalian', $data);

		$this->db->update('peminjaman', ['status' => 0], ['noseri' => $data['noseri']]);

		redirect(base_url('pengembalian'));
	}

	function aksi_ubah() {
		foreach ($this->input->post('data') as $key => $value) {
			switch ($key) {
				case 'tanggal':
					$date=date_create($value);
					$data[$key] = date_format($date,"Y-m-d");
					break;
				
				default:
					$data[$key] = $value;
					break;
			}
		}

		foreach ($this->input->post('where') as $key => $value) {
			$where[$key] = $value;
		}

		$this->db->update('pengembalian', $data, $where);

		redirect(base_url('pengembalian'));
	}

	function aksi_hapus($id) {
		$this->db->delete('pengembalian', ['id' => $id]);

		redirect(base_url('pengembalian'));
	}

}