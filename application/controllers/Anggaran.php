<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggaran extends CI_Controller
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

			$data['variabel'] = $this->Aanggaran->getAllVariabel();

			$data['aspirasi'] = $this->Aanggaran->getPoin();

			$data['tPoin'] = $this->Aanggaran->getTotalPoin();

			$data['vote'] = $this->Aanggaran->totalVoting();

			$data['menu'] = $this->Aanggaran->menu();

			$data['title'] = 'Hasil Aspirasi';

			$this->load->view('master/header.php', $data);
			$this->load->view('anggaran/index.php', $data);
			$this->load->view('master/footer.php');
		}
	}


	public function tambah()
	{
		$this->load->view('master/header.php');
		$this->load->view('anggaran/tambah.php');
		$this->load->view('master/footer.php');
	}

	public function vote()
	{
		$useraktif = $this->session->userdata('username');
		if (!$useraktif) {
			$this->session->set_flashdata('message', '<div class="callout callout-danger">
					<h4>Sesi anda habis!</h4>
	
					<p>Silahkan Login kembali.</p>
				  </div>');
			redirect('auth');
		} else {
			$data['variabel'] = $this->Aanggaran->getAllVariabel();

			$data['aspirasi'] = $this->Aanggaran->getPoin();

			$data['tPoin'] = $this->Aanggaran->getTotalPoin();

			$data['vote'] = $this->Aanggaran->totalVoting();

			$data['tKeterangan'] = $this->Aanggaran->totalketerangan();

			$data['sTabel'] = $this->Aanggaran->sstabel();

			$data['menu'] = $this->Aanggaran->menu();

			$data['title'] = 'Hasil Voting';

			$this->load->view('master/header.php', $data);
			$this->load->view('anggaran/vote.php', $data);
			$this->load->view('master/footer.php');
		}
	}

	public function view()
	{
		$this->load->view('master/header.php');
		$this->load->view('anggaran/view.php');
		$this->load->view('master/footer.php');
	}

	public function addvote($id)
	{
		$useraktif = $this->session->userdata('username');
		if (!$useraktif) {
			$this->session->set_flashdata('message', '<div class="callout callout-danger">
					<h4>Sesi anda habis!</h4>
	
					<p>Silahkan Login kembali.</p>
				  </div>');
			redirect('auth');
		} else {
			$this->_ss($id);
		}
	}

	private function _ss($id)
	{
		$tvUser = $this->Aanggaran->getAllVariabel();
		foreach ($tvUser as $tV) { // cek qty bar
			if ($tV['id_variabel'] == $id) {
				$this->db->set('keterangan', 1);
				$this->db->where('id_variabel', $id);
				$this->db->update('a_variabel');
			}
		}
		redirect('anggaran/vote');
	}

	public function removevote($id)
	{
		$useraktif = $this->session->userdata('username');
		if (!$useraktif) {
			$this->session->set_flashdata('message', '<div class="callout callout-danger">
					<h4>Sesi anda habis!</h4>
	
					<p>Silahkan Login kembali.</p>
				  </div>');
			redirect('auth');
		} else {
			$this->_rss($id);
		}
	}

	private function _rss($id)
	{
		$tvUser = $this->Aanggaran->getAllVariabel();
		foreach ($tvUser as $tV) { // cek qty bar
			if ($tV['id_variabel'] == $id) {
				$this->db->set('keterangan', 0);
				$this->db->where('id_variabel', $id);
				$this->db->update('a_variabel');
			}
		}
		redirect('anggaran/vote');
	}

	public function menuaktif($name)
	{
		$useraktif = $this->session->userdata('username');
		if (!$useraktif) {
			$this->session->set_flashdata('message', '<div class="callout callout-danger">
					<h4>Sesi anda habis!</h4>
	
					<p>Silahkan Login kembali.</p>
				  </div>');
			redirect('auth');
		} else {
			$this->_maktif($name);
		}
	}

	private function _maktif($name)
	{
		$this->db->set('aktif', 1);
		$this->db->where('nama', $name);
		$this->db->update('menu');

		$this->session->set_flashdata('berhasil', '
		<script>
		toastr.success("Menu voting berhasil di aktifkan", "Berhasil", {
			timeOut: 5000,
			closeButton: true,
			progressBar: true,
			positionClass: "toast-bottom-right"
		  })
		</script>');
		redirect('anggaran/vote');
	}

	public function menutaktif($name)
	{
		$useraktif = $this->session->userdata('username');
		if (!$useraktif) {
			$this->session->set_flashdata('message', '<div class="callout callout-danger">
					<h4>Sesi anda habis!</h4>
	
					<p>Silahkan Login kembali.</p>
				  </div>');
			redirect('auth');
		} else {
			$this->_mtaktif($name);
		}
	}

	private function _mtaktif($name)
	{
		$this->db->set('aktif', 0);
		$this->db->where('nama', $name);
		$this->db->update('menu');

		$this->session->set_flashdata('berhasil', '
		<script>
		toastr.success("Menu voting berhasil di matikan", "Berhasil", {
			timeOut: 5000,
			closeButton: true,
			progressBar: true,
			positionClass: "toast-bottom-right"
		  })
		</script>');
		redirect('anggaran/vote');
	}

	public function ulangi()
	{
		$useraktif = $this->session->userdata('username');
		if (!$useraktif) {
			$this->session->set_flashdata('message', '<div class="callout callout-danger">
					<h4>Sesi anda habis!</h4>
	
					<p>Silahkan Login kembali.</p>
				  </div>');
			redirect('auth');
		} else {
			$id = htmlspecialchars($this->input->post('id', true));
			$this->_ul($id);
		}
	}

	private function _ul($id)
	{

		$this->db->where_in('id_variabel', $id);
		$this->db->delete('a_voting');

		$this->session->set_flashdata('berhasil', '
		<script>
		toastr.success("Voting berhasil di setting ulang", "Berhasil", {
			timeOut: 5000,
			closeButton: true,
			progressBar: true,
			positionClass: "toast-bottom-right"
		  })
		</script>');
		redirect('anggaran/vote');
	}

	public function ulangiall()
	{
		$useraktif = $this->session->userdata('username');
		if (!$useraktif) {
			$this->session->set_flashdata('message', '<div class="callout callout-danger">
					<h4>Sesi anda habis!</h4>
	
					<p>Silahkan Login kembali.</p>
				  </div>');
			redirect('auth');
		} else {
			$this->_uall();
		}
	}

	private function _uall()
	{
		$this->db->where_not_in('id', 1);
		$this->db->empty_table('a_voting');

		$this->session->set_flashdata('berhasil', '
		<script>
		toastr.success("Semua voting berhasil di setting ulang", "Berhasil", {
			timeOut: 5000,
			closeButton: true,
			progressBar: true,
			positionClass: "toast-bottom-right"
		  })
		</script>');
		redirect('anggaran/vote');
	}

	public function ssvoting()
	{
		$useraktif = $this->session->userdata('username');
		if (!$useraktif) {
			$this->session->set_flashdata('message', '<div class="callout callout-danger">
					<h4>Sesi anda habis!</h4>
	
					<p>Silahkan Login kembali.</p>
				  </div>');
			redirect('auth');
		} else {
			$this->_ssvt();
		}
	}

	private function _ssvt()
	{

		$id = $_POST['id'];
		$total = $_POST['jumlah'];
		$data = array();

		$index = 0;
		foreach ($id as $ids) {
			$data = [
				'id' => $total + 1,
				'user' => 'sampel',
				'id_variabel' => $ids,
				'setuju' => 0,
				'tidak' => 0,
				'keterangan' => null
			];

			$index++;
			$this->db->insert('a_voting', $data);
		}

		$this->session->set_flashdata('berhasil', '
		<script>
		toastr.success("Semua voting berhasil di setting ulang", "Berhasil", {
			timeOut: 5000,
			closeButton: true,
			progressBar: true,
			positionClass: "toast-bottom-right"
		  })
		</script>');
		redirect('anggaran/vote');
	}
}
