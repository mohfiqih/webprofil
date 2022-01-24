<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Profil extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_profil');
    }
 
	public function menuprofil()
	{
		$this->load->view('profil');
	}

	
	public function fungsiTambah()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $pesan = $this->input->post('pesan');

        $ArrInsert = array(
            'id' => $id,
            'nama' => $nama,
            'email' => $email,
            'pesan' => $pesan,
        );
        $this->Model_profil->insertDataPesan($ArrInsert);
        redirect(base_url('Profil/menuprofil'));
    }
 
}
