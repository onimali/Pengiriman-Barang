<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InvoiceController extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$data['header'] = 'Invoice';
		$this->load->view('Layouts/header', $data);
		$this->load->view('Invoice/index');
		$this->load->view('Layouts/footer');
	}

	public function createOrupdate($checked = 0)
	{
		$post = $this->input->post();
		$count = $this->db->count_all_results('invoice');
		$count_ = $count + 1;
		$resi 	= str_pad($count_, 10, 0, STR_PAD_LEFT);
		if ($checked == 0) {
			$data = [
				'resi' 		=> $resi,
				'id_core' 	=> $post['paket'],
				'desc' 		=> $post['desc'],
				'aktif' 	=> 1,
			];

			$this->db->insert('invoice', $data);
			$this->db->where('id', $post['paket'])->update('core', ['status' => 1]);
			redirect(base_url('InvoiceController/index'));
		}
	}


	public function print($id)
	{
		//$id_core = $this->db->get_where('core', ['resi' => $id])->row();
		$query_1 = $this->db->query("SELECT *,a.id as resi FROM core AS a INNER JOIN jenis_paket ON a.jenis_paket = jenis_paket.id INNER JOIN daftar_paket ON a.jenis_layanan = daftar_paket.id WHERE a.id ='" . $id . "' ")->row();

		// $pengirim = $this->db->get_where('pengirim_penerima', ['id' => $query_1->id_pengirim])->row();
		// $penerima = $this->db->get_where('pengirim_penerima', ['id' => $query_1->id_penerima])->row();
		$data['data'] = $query_1;

		// $this->load->view('Layouts/header', $data);
		$this->load->view('Invoice/print', $data);
		// $this->load->view('Layouts/footer');
	}
}
