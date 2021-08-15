<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
		$data['header'] = 'Transportasi 4848';
		$this->load->view('Layouts/header', $data);
		$this->load->view('Home/Home');
		$this->load->view('Layouts/footer');
	}
}
