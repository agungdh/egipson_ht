<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->pustaka->auth($this->session->id, [1, 2]);
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

	function ubah($id) {
		$data['isi'] = 'peminjaman/ubah';
		$data['js'] = 'peminjaman/ubah_js';
		$data['data']['peminjaman'] = $this->db->get_where('peminjaman', ['id' => $id])->row();

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

		$this->db->insert('peminjaman', $data);

		redirect(base_url('peminjaman'));
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

		$this->db->update('peminjaman', $data, $where);

		redirect(base_url('peminjaman'));
	}

	function aksi_hapus($id) {
		$this->db->delete('peminjaman', ['id' => $id]);

		redirect(base_url('peminjaman'));
	}

}