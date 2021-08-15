<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PaketController extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$data['header'] = 'Daftar Paket';
		$this->load->view('Layouts/header', $data);
		$this->load->view('Paket/index', $data);
		$this->load->view('Layouts/footer');
	}


	public function view($id)
	{
		$data['paketEdit'] = $this->db->get_where('daftar_paket', ['id' => intval($id)])->row();
		$this->load->view('Paket/modal/modal_editData', $data);
	}

	public function createOrupdate($checked = 0)
	{
		$post = $this->input->post();
		if ($checked == 0) {
			$data = [
				'nama_paket' => $post['nama_paket'],
				'berat' => $post['berat'],
				'pkt_pertama' => $post['pkt_pertama'],
				'pkt_selanjutnya' => $post['pkt_selanjutnya'],
			];
			$this->db->insert('daftar_paket', $data);
			redirect(base_url('PaketController/index'));
		} else {
			$data = [
				'nama_paket' => $post['nama_paket'],
				'berat' => $post['berat'],
				'pkt_pertama' => $post['pkt_pertama'],
				'pkt_selanjutnya' => $post['pkt_selanjutnya'],
			];
			$this->db->where('id', intval($post['id']))->update('daftar_paket', $data);
			redirect(base_url('PaketController/index'));
		}
	}

	public function remove($id)
	{
		$this->db->where('id', intval($id))->delete('daftar_paket');
		redirect(base_url('PaketController/index'));
	}

	public function indexDokumen()
	{
		$data['header'] = 'Daftar Dokumen';
		$this->load->view('Layouts/header', $data);
		$this->load->view('Dokumen/index', $data);
		$this->load->view('Layouts/footer');
	}

	public function createOrupdateDokumen($checked = 0)
	{
		$post = $this->input->post();
		if ($checked == 0) {
			$data = ['nama_dokumen' => $post['nama_dokumen']];
			$this->db->insert('jenis_paket', $data);
			redirect(base_url('PaketCOntroller/indexDokumen'));
		} else {
			$data = ['nama_dokumen' => $post['nama_dokumen']];
			$this->db->where('id', $post['id'])->update('jenis_paket', $data);
			redirect(base_url('PaketCOntroller/indexDokumen'));
		}
	}

	public function viewDokumen($id)
	{
		$data['dokumenEdit'] = $this->db->get_where('jenis_paket', ['id' => intval($id)])->row();
		$this->load->view('Dokumen/modal/modal_editData', $data);
	}


	public function removeDokumen($id)
	{
	}
}
