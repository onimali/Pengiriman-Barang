<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PengantaranController extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$data['header'] = 'Pengantaran';
		$this->load->view('Layouts/header', $data);
		$this->load->view('Pengantaran/index');
		$this->load->view('Layouts/footer');
	}

	public function kurir()
	{
		$data['header'] = 'Kurir';
		$this->load->view('Layouts/header', $data);
		$this->load->view('Pengantaran/kurir');
		$this->load->view('Layouts/footer');
	}
}
