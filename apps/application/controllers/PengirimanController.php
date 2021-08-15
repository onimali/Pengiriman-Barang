<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengirimanController extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$data['data']	= $this->db->query(" SELECT core.id as resi,users.first_name,users.last_name,core.nama_penerima,
											pengiriman.waktu,pengiriman.status,pengiriman.id_pengiriman FROM pengiriman 
											join core on pengiriman.id_core = core.id 
											join users on pengiriman.id_kurir = users.id 
											order by pengiriman.id_pengiriman desc")->result();
		$data['header'] = 'Data Pengiriman';
		$this->load->view('Layouts/header', $data);
		$this->load->view('Pengiriman/index');
		$this->load->view('Layouts/footer');
	}
	public function add()
	{
		if ($this->input->post('id_core')) {
			$p = $this->input->post();
			$data = array(
				'id_core'	=> $p['id_core'],
				'id_kurir'	=> $p['id_kurir'],
				'status'	=> $p['status'],
				'waktu'		=> date('Y-m-d H:i:s')
			);
			$this->db->insert('pengiriman',$data);
			$this->session->set_flashdata('message', 'swal("Berhasil", "Tambah data pengiriman", "success");');
			redirect('PengirimanController');
		}
		else
		{
			$data['core']	= $this->db->query("SELECT * FROM core where id NOT IN ( SELECT id_core FROM pengiriman )")->result();
			$data['kurir']	= $this->db->query("SELECT * FROM users where level = 'kurir' and status = 'aktif' ")->result();
			$data['header'] = 'Tambah Data Pengiriman';
			$this->load->view('Layouts/header', $data);
			$this->load->view('Pengiriman/add');
			$this->load->view('Layouts/footer');
		}
	}
	public function edit($id)
	{
		if ($this->input->post('id_core')) {
			$p = $this->input->post();
			$data = array(
				'id_core'	=> $p['id_core'],
				'id_kurir'	=> $p['id_kurir'],
				'status'	=> $p['status'],
				'waktu'		=> date('Y-m-d H:i:s')
			);
			$this->db->update('pengiriman',$data,['id_pengiriman'=>$id]);
			$this->session->set_flashdata('message', 'swal("Berhasil", "Update data pengiriman", "success");');
			redirect('PengirimanController');
		}
		else
		{
			$data['core']	= $this->db->query("SELECT * FROM core ")->result();
			$data['kurir']	= $this->db->query("SELECT * FROM users where level = 'kurir' and status = 'aktif' ")->result();
			$data['data']	= $this->db->query("SELECT * FROM pengiriman where id_pengiriman = '$id' ")->row();
			$data['header'] = 'Update Data Pengiriman';
			$this->load->view('Layouts/header', $data);
			$this->load->view('Pengiriman/edit');
			$this->load->view('Layouts/footer');
		}
	}
	public function delete($id)
	{
		$this->db->delete('pengiriman',['id_pengiriman'=>$id]);
		$this->session->set_flashdata('message', 'swal("Berhasil", "Delete data pengiriman", "success");');
		redirect('PengirimanController');
	}

	public function view($id)
	{
		$data['pengirim_penerima'] = $this->db->get_where('pengirim_penerima', ['id' => intval($id)])->row();
		$this->load->view('Users/Pengirim_Penerima/modal/modal_editData', $data);
	}
}
