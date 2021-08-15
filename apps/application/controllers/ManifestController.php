<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ManifestController extends CI_Controller
{

	/**
	 * Index Page for this controller.  
	 */
	public function index()
	{
		$data['data']	= $this->db->query(" SELECT *,core.id as resi,manifest.id as idm FROM manifest 
											join core on manifest.id_core = core.id 
											join users on manifest.id_kurir = users.id order by manifest.id desc")->result();
		$data['header'] = 'Manifest';
		$this->load->view('Layouts/header', $data);
		$this->load->view('Manifest/index', $data);
		$this->load->view('Layouts/footer');
	}
	public function add()
	{
		if ($this->input->post('id_core')) {
			$p = $this->input->post();
			$this->db->trans_start();
			$data = array(
				'id_core'	=> $p['id_core'],
				'id_kurir'	=> $p['id_kurir'],
				'waktu'		=> date('Y-m-d H:i:s')
			);
			$this->db->insert('manifest',$data);
			$cek = $this->db->query(" SELECT max(id) as id from manifest ")->row();
			echo $cek->id;
			$detail = array(
				'id_manifest'	=> $cek->id,
				'waktu'			=> date('Y-m-d H:i:s'),
				'status'		=> 'Pengiriman dari kota asal',
			);
			
			$this->db->insert('detailmanifest',$detail);
			$this->db->trans_complete();
			$this->session->set_flashdata('message', 'swal("Berhasil", "Tambah Manifest", "success");');
			redirect('ManifestController');
		}
		else
		{
			$data['core']	= $this->db->query(" SELECT * FROM core where status = '1' AND id NOT IN ( SELECT id_core from manifest ) ")->result();
			$data['kurir']	= $this->db->query(" SELECT * FROM users where status = 'aktif' and level = 'kurir' ")->result();
			$data['header'] = 'Update Manifest';
			$this->load->view('Layouts/header', $data);
			$this->load->view('Manifest/add', $data);
			$this->load->view('Layouts/footer');
		}
	}
	public function update($id)
	{
		if ($this->input->post('id_core')) {
			$p = $this->input->post();
			$data = array(
				'id_core'	=> $p['id_core'],
				'id_kurir'	=> $p['id_kurir'],
			);
			$this->db->update('manifest',$data,['id'=>$id]);
			$this->session->set_flashdata('message', 'swal("Berhasil", "Update Manifest", "success");');
			redirect('ManifestController');
		}
		else
		{
			$data['data']	= $this->db->query(" SELECT * FROM manifest where id = '$id' ")->row();
			$data['core']	= $this->db->query(" SELECT * FROM core where status = '1' ")->result();
			$data['kurir']	= $this->db->query(" SELECT * FROM users where status = 'aktif' and level = 'kurir' ")->result();
			$data['header'] = 'Update Manifest';
			$this->load->view('Layouts/header', $data);
			$this->load->view('Manifest/update', $data);
			$this->load->view('Layouts/footer');
		}
	}
	public function delete($id)
	{
		$this->db->delete('manifest',['id'=>$id]);
		$this->db->delete('manifestdetail',['id_manifest'=>$id]);
		$this->session->set_flashdata('message', 'swal("Berhasil", "Delete Manifest", "success");');
		redirect('ManifestController');
	}
	public function detail($id)
	{
		$data['data']	= $this->db->query(" SELECT * FROM manifest where id = '$id' ")->row();
		$data['detail']	= $this->db->query(" SELECT * FROM detailmanifest where id_manifest = '$id' ")->result();
		$data['header'] = 'Detail Manifest';
		$this->load->view('Layouts/header', $data);
		$this->load->view('Manifest/detail', $data);
		$this->load->view('Layouts/footer');
	}
	public function adddetail($id)
	{
		if ($this->input->post('status')) {
			
			$p = $this->input->post();
			$data = array(
				'id_manifest'	=> $id,
				'waktu'			=> date('Y-m-d H:i:s'),
				'status'		=> $p['status']
			);
			$this->db->insert('detailmanifest',$data);
			$this->session->set_flashdata('message', 'swal("Berhasil", "Tambah Detail Manifest", "success");');
			redirect('ManifestController/detail/'.$id);
		}
		else
		{
			$data['id']		= $id;
			$data['header'] = 'Tambah Detail Manifest';
			$this->load->view('Layouts/header', $data);
			$this->load->view('Manifest/adddetail', $data);
			$this->load->view('Layouts/footer');
		}
		
	}
	public function updatedetail($id,$manifest)
	{
		if ($this->input->post('status')) {
			
			$p = $this->input->post();
			$data = array(
				'waktu'			=> date('Y-m-d H:i:s'),
				'status'		=> $p['status']
			);
			$this->db->update('detailmanifest',$data,['id'=>$id]);
			$this->session->set_flashdata('message', 'swal("Berhasil", "Update Detail Manifest", "success");');
			redirect('ManifestController/detail/'.$manifest);
		}
		else
		{
			$data['id']		= $id;
			$data['data']	= $this->db->get_where('detailmanifest',['id'=>$id])->row();
			$data['header'] = 'Update Detail Manifest';
			$this->load->view('Layouts/header', $data);
			$this->load->view('Manifest/updatedetail', $data);
			$this->load->view('Layouts/footer');
		}
		
	}
	public function deletedetail($id,$manifest)
	{
		$this->db->delete('detailmanifest',['id'=>$id]);
		$this->session->set_flashdata('message', 'swal("Berhasil", "Delete Detail Manifest", "success");');
		redirect('ManifestController/detail/'.$manifest);
	}


	public function print($id)
	{
		$data['data']	= $this->db->query(" SELECT *,core.id as resi,manifest.id as idm FROM manifest 
											join core on manifest.id_core = core.id 
											join users on manifest.id_kurir = users.id
											INNER JOIN jenis_paket ON core.jenis_paket = jenis_paket.id 
											INNER JOIN daftar_paket ON core.jenis_layanan = daftar_paket.id
											where manifest.id = '$id' ")->row();
		$data['detail']	= $this->db->query(" SELECT * FROM detailmanifest where id_manifest = '$id' ")->result();
		$this->load->view('Manifest/print', $data);
	}
}
