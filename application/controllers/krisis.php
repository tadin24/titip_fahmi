<?php

/**
 * 
 */
class krisis extends CI_controller
{

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('is_login') != TRUE) {
			redirect(base_url(''));
			exit;
		};
	}

	public function index()
	{
		$x = array('judul' => 'Halaman Administrator');
		tpl('admin/home', $x);
	}
}
