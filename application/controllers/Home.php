<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Aanggaran');
	}

	public function index()
	{
		$useraktif = $this->session->userdata('username');
		if (!$useraktif) {
			$this->session->set_flashdata('message', '<div class="callout callout-danger">
					<h4>Sesi anda habis!</h4>
	
					<p>Silahkan Login kembali.</p>
				  </div>');
			redirect('auth');
		} else {

			$data['variabel'] = $this->Aanggaran->jumlahvariabel();
			$data['aspirasi'] = $this->Aanggaran->jumlahpengajuan();

			$data['title'] = 'Beranda';

			$this->load->view('master/header.php', $data);
			$this->load->view('home/index.php', $data);
			$this->load->view('master/footer.php');
		}
	}
}
