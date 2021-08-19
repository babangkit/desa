<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Variabel extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('kode', 'Kode', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);

		if ($this->form_validation->run() == false) {


			$this->load->model('Aanggaran');
			$data['variabel'] = $this->Aanggaran->getAllVariabel();

			$data['title'] = 'Variabel Anggaran';

			$this->load->view('master/header.php', $data);
			$this->load->view('anggaran/variabel.php', $data);
			$this->load->view('master/footer.php');
		} else {

			$this->delItems();
		}
	}

	public function delItems()
	{
		$id = htmlspecialchars($this->input->post('kode', true));

		$this->db->where('id_variabel', $id);
		$this->db->delete('a_variabel');

		$this->session->set_flashdata('berhasil', '
		<script>
		toastr.success("Data berhasil dihapus", "Berhasil", {
			timeOut: 5000,
			closeButton: true,
			progressBar: true,
			positionClass: "toast-top-right"
		  })
		</script>');

		redirect('variabel');
	}

	public function add()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
			'required' => '*Nama wajib diisi!',
		]);
		$this->form_validation->set_rules('v1', 'V1', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('v2', 'V2', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('v3', 'V3', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('v4', 'V4', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('v5', 'V5', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('p1', 'P1', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('p2', 'P2', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('p3', 'P3', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('p4', 'P4', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('p5', 'P5', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);

		if ($this->form_validation->run() == false) {

			$data['title'] = 'Tambah';

			$this->load->view('master/header.php', $data);
			$this->load->view('anggaran/tambah.php');
			$this->load->view('master/footer.php');
		} else {

			$this->_add();
		}
	}

	private function _add()
	{
		$p1 = htmlspecialchars($this->input->post('p1', true));
		$p2 = htmlspecialchars($this->input->post('p2', true));
		$p3 = htmlspecialchars($this->input->post('p3', true));
		$p4 = htmlspecialchars($this->input->post('p4', true));
		$p5 = htmlspecialchars($this->input->post('p5', true));

		$total = array($p1, $p2, $p3, $p4, $p5);
		$jumlah = array_sum($total);

		$data = [


			'nama' => htmlspecialchars($this->input->post('nama', true)),
			'variabel1' => htmlspecialchars($this->input->post('v1', true)),
			'variabel2' => htmlspecialchars($this->input->post('v2', true)),
			'variabel3' => htmlspecialchars($this->input->post('v3', true)),
			'variabel4' => htmlspecialchars($this->input->post('v4', true)),
			'variabel5' => htmlspecialchars($this->input->post('v5', true)),
			'point1' => htmlspecialchars($this->input->post('p1', true)),
			'point2' => htmlspecialchars($this->input->post('p2', true)),
			'point3' => htmlspecialchars($this->input->post('p3', true)),
			'point4' => htmlspecialchars($this->input->post('p4', true)),
			'point5' => htmlspecialchars($this->input->post('p5', true)),
			'jumlah' => $jumlah,
			'keterangan' => 0,


		];

		$this->db->insert('a_variabel', $data);
		$this->session->set_flashdata('berhasil', '
		<script>
		toastr.success("Data berhasil ditambahkan", "Berhasil", {
			timeOut: 5000,
			closeButton: true,
			progressBar: true,
			positionClass: "toast-top-right"
		  })
		</script>');
		redirect('variabel');
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('id', 'ID', 'required|trim', [
			'required' => '*Nama wajib diisi!',
		]);
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
			'required' => '*Nama wajib diisi!',
		]);
		$this->form_validation->set_rules('v1', 'V1', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('v2', 'V2', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('v3', 'V3', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('v4', 'V4', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('v5', 'V5', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('p1', 'P1', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('p2', 'P2', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('p3', 'P3', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('p4', 'P4', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);
		$this->form_validation->set_rules('p5', 'P5', 'required|trim', [
			'required' => '*Variabel wajib diisi!',
		]);

		if ($this->form_validation->run() == false) {

			$this->load->model('Aanggaran');
			$data['anggaran'] = $this->Aanggaran->getAnggaran($id);

			$data['title'] = 'Edit Kategori';

			$this->load->view('master/header.php', $data);
			$this->load->view('anggaran/edit.php', $data);
			$this->load->view('master/footer.php');
		} else {

			$this->_edit();
		}
	}
	private function _edit()
	{

		$id = htmlspecialchars($this->input->post('id', true));

		$p1 = htmlspecialchars($this->input->post('p1', true));
		$p2 = htmlspecialchars($this->input->post('p2', true));
		$p3 = htmlspecialchars($this->input->post('p3', true));
		$p4 = htmlspecialchars($this->input->post('p4', true));
		$p5 = htmlspecialchars($this->input->post('p5', true));

		$total = array($p1, $p2, $p3, $p4, $p5);
		$jumlah = array_sum($total);
		date_default_timezone_set('Asia/Jakarta');

		$data = [

			'id_variabel' => $id,
			'nama' => htmlspecialchars($this->input->post('nama', true)),
			'variabel1' => htmlspecialchars($this->input->post('v1', true)),
			'variabel2' => htmlspecialchars($this->input->post('v2', true)),
			'variabel3' => htmlspecialchars($this->input->post('v3', true)),
			'variabel4' => htmlspecialchars($this->input->post('v4', true)),
			'variabel5' => htmlspecialchars($this->input->post('v5', true)),
			'point1' => htmlspecialchars($this->input->post('p1', true)),
			'point2' => htmlspecialchars($this->input->post('p2', true)),
			'point3' => htmlspecialchars($this->input->post('p3', true)),
			'point4' => htmlspecialchars($this->input->post('p4', true)),
			'point5' => htmlspecialchars($this->input->post('p5', true)),
			'jumlah' => $jumlah,
			'keterangan' => 0,
			'date_created' => date('Y-m-d H:i:s'),


		];

		$this->db->where('id_variabel', $id);
		$this->db->update('a_variabel', $data);
		$this->session->set_flashdata('berhasil', '
		<script>
		toastr.success("Data berhasil diperbarui", "Berhasil", {
			timeOut: 5000,
			closeButton: true,
			progressBar: true,
			positionClass: "toast-top-right"
		  })
		</script>');
		redirect('variabel');
	}
}
