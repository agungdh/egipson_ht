<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index() {
		$jumlah = 0;
		$phone = [];
		foreach ($this->db->get_where('peminjaman', ['status' => 1])->result() as $item) {
                $deadline=date_create($item->tanggal);
                date_add($deadline,date_interval_create_from_date_string($item->durasi . " days"));
                $date1 = date("Y-m-d");
                $date2 = date_format($deadline,"Y-m-d");
                $days = (strtotime($date2) - strtotime($date1)) / (60 * 60 * 24);
                if ($days <= 1) {
                	$jumlah++;
                	$phone[] = $item->nohp;
                }
		}

		echo $jumlah;
		var_dump($phone);
	}
}