<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class KrisisModel extends CI_Model {
	public function view(){
		return $this->db->get('krisis')->result(); // Tampilkan semua data yang ada di tabel siswa
	}
}
