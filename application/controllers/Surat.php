<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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
			$this->load->model('Asurat');
			$data['surat'] = $this->Asurat->getAllSurat();

			$data['title'] = 'Surat';

			$this->load->view('master/header.php', $data);
			$this->load->view('surat/index.php', $data);
			$this->load->view('master/footer.php');
		}
	}

	public function read($id)
	{
		$useraktif = $this->session->userdata('username');
		if (!$useraktif) {
			$this->session->set_flashdata('message', '<div class="callout callout-danger">
					<h4>Sesi anda habis!</h4>
	
					<p>Silahkan Login kembali.</p>
				  </div>');
			redirect('auth');
		} else {
			$this->load->model('Asurat');
			$data['jenis_surat'] = $this->Asurat->getJenisSurat($id);

			$data['title'] = 'Surat Masuk';

			$this->load->view('master/header.php', $data);
			$this->load->view('surat/read.php', $data);
			$this->load->view('master/footer.php');
		}
	}
}
