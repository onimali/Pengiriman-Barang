<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BranchController extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 */
	public function index($checked = 0)
	{
		/**
		 * JIKA VALUE $checked BERNILAI 0 MAKA MENAMPILKAN VIEW
		 * JIKA VALUE $checked BERNILAI BUKAN 0 MAKA MASUK KE DASHBOARD KANTOR CABANG
		 */

		$post = $this->input->post();
		if ($checked == 0) {
			$data = [
				'title' 	=> 'Kantor Cabang',
				'branch' 	=> $this->db->get('branch_office')->result(),
			];
			$this->load->view('Branch/BranchOffice', $data);
		} else {
			/**
			 * PROSES KE DASHBOARD
			 */

			$dataBranchSess = [
				'branch_office' => $this->db->get_where('branch_office', ['code_branch' => $post['branch_office_select']])->row(),
			];
			$this->session->set_userdata($dataBranchSess);
			redirect(base_url('home'));
		}
	}

	public function view($checked = 0, $edit = 0)
	{
		// dump_exit($checked);
		if ($checked == 0) {
			$data = [
				'header' 	=> 'Data Cabang',
				'branch' 	=> $this->db->get('branch_office')->result(),
			];
			$this->load->view('Layouts/header', $data);
			$this->load->view('Branch/BranchData', $data);
			$this->load->view('Layouts/footer');
		} else {
			$data['edit'] = $this->db->get_where('branch_office', ['code_branch' => $edit])->row();
			$this->load->view('Branch/modal/modal_editData',$data);
		}
	}

	public function createOrupdate($checked = 0)
	{
		$post = $this->input->post();
		if ($checked == 0) {
			$data = ['code_branch' => $post['kode_cabang'], 'desc_branch_office' => $post['nama_cabang']];
			$this->db->insert('branch_office', $data);
			redirect(base_url('BranchController/view'));
		} else {
			$this->db->where('code_branch', $post['kode_cabang'])->update('branch_office', ['desc_branch_office' => $post['nama_cabang']]);
			redirect(base_url('branchData'));
		}
	}

	public function remove($code_branch)
	{
		$this->db->where('code_branch', $code_branch)->delete('branch_office');
		redirect(base_url('branchData'));
	}
}