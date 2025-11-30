<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function index()
	{

		$isi['punya_legistimasi'] = $this->Model_siswa->punya();
		$isi['belum_punya_legistimasi'] = $this->Model_siswa->belum_punya();


		$this->load->view('welcome_message', $isi);
	}
}
