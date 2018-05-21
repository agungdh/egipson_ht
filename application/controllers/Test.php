<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index() {
		for ($i=0; $i <= 4; $i++) {
			echo $this->pustaka->tanggal_indo_string_bulan_tahun(date("m-Y", strtotime("-" . $i . " months")));
			echo "\n";

			$bulan = explode('-', date("m-Y", strtotime("-" . $i . " months")))[0];
			$tahun = explode('-', date("m-Y", strtotime("-" . $i . " months")))[1];

			echo $this->db->query("
				SELECT count(*) total
				FROM peminjaman
				WHERE month(tanggal) = ?
				AND year(tanggal) = ?
			", [$bulan, $tahun])->row()->total;			
			echo "\n";
		}
	}

}