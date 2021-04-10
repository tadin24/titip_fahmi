<?php
if (!defined('BASEPATH')) exit(header('Location:../'));
class Krisis extends CI_controller
{
    private $filename = "import_data"; // Kita tentukan nama filenya
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('is_login') != 1) {
            redirect(base_url(''));
            exit;
        };
        $this->load->model('m_krisis');
    }

    public function index()
    {
        $x = array(
            'judul' => 'Data krisis',
            'data' => $this->db->get('krisis')->result_array()
        );
        tpl('admin/krisis', $x);
    }
}
