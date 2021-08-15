<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsersController extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 */
	public function index() 
	{
		$data['header'] = 'Data Karyawan';
		$data['data'] 	= $this->db->get('users')->result();
		$this->load->view('Layouts/header', $data);
		$this->load->view('karyawan/index', $data);
		$this->load->view('Layouts/footer');

		
	}

	public function view($id)
	{
		$data['pengirim_penerima'] = $this->db->get_where('pengirim_penerima', ['id' => intval($id)])->row();
		$this->load->view('Users/Pengirim_Penerima/modal/modal_editData', $data);
	}

	public function createOrupdate($checked = null)
	{
		$post = $this->input->post();
		if ($checked==null) {
			$data = [
				'first_name' 	=>  $post['namadepan'],
				'last_name' 	=>  $post['namabelakang'],
				'mail' 			=>  $post['mail'],
				'status' 		=>  $post['status'],
				'gender' 		=>  $post['gender'],
				'birthday' 		=>  $post['tanggal'],
				'nopol' 		=>  $post['nopol'],
				'level' 		=>  $post['level'],
				'password' 		=>  md5(date('dmY',strtotime($post['tanggal']))),
			];
			$this->db->insert('users', $data);
			redirect(base_url('UsersController/index'));
		} else {
			$data = [
				'first_name' 	=>  $post['namadepan'],
				'last_name' 	=>  $post['namabelakang'],
				'mail' 			=>  $post['mail'],
				'status' 		=>  $post['status'],
				'gender' 		=>  $post['gender'],
				'birthday' 		=>  $post['tanggal'],
				'nopol' 		=>  $post['nopol'],
				'level' 		=>  $post['level'],
				'password' 		=>  md5(date('dmY',strtotime($post['tanggal']))),
			];

			$this->db->update('users', $data,['id'=>$checked]);
			redirect(base_url('UsersController/index'));
		}
	}

	public function remove($id)
	{
		$this->db->delete('users',['id'=>$id]);
		redirect(base_url('UsersController/index'));
	}

}
