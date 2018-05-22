<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function index() {
		$data['isi'] = 'log/index';
		$data['js'] = 'log/index_js';

		$this->load->view('template/template', $data);
	}

}