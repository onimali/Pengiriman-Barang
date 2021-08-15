<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 */
	public function index($checked = 0)
	{
		/**
		 * JIKA VALUE $checked BERNILAI 0 MAKA MENAMPILKAN VIEW
		 * JIKA VALUE $checked BERNILAI BUKAN 0 MAKA MASUK KE DASHBOARD 
		 */

		$post = $this->input->post();
		if ($checked == 0) {
			$this->session->sess_destroy();
			$data['title'] = 'Login';
			$this->load->view('Auth/Login', $data);
		} else {
			/**
			 * PROSES PENGECEKAN UNTUK LOGIN KE KANTOR CABANG
			 */
			$user = $this->db->get_where('users', ['mail' => $post['email']])->row();
			if ($post['email'] == $user->mail) {
				if (md5($post['password'])  == $user->password) {

					if ($user->status == 'aktif') {

						$dataUserSess = [
						'name' => $user->first_name . ' ' . $user->last_name,
						'email' => $user->mail,
						'status' => 'Login'
						];
					$this->session->set_userdata($dataUserSess);
					redirect('branch/0');
					}
					else
					{
						$this->session->set_flashdata('msg', 'Akun anda belum diaktifkan oleh admin!');
						redirect(base_url());
					}

					
				} else {

					$this->session->set_flashdata('msg', 'Password Salah!');
					redirect(base_url());
				}
			} else {

				$this->session->set_flashdata('msg', 'Email Tidak Terdaftar! Silakan Registrasi.');
				redirect(base_url());
			}
		}
	}

	public function ForgotPassword($checked = 0)
	{
		/**
		 * JIKA $checked BERNILAI 0 AKAN MENAMPILKAN VIEW FORGOT PASSWORD
		 * JIKA $checked TIDAK BERNILAI 0 AKAN MELAKUKAN PROSES RESET PASSWORD
		 */
		$post = $this->input->post();
		if ($checked == 0) {
			$data['title'] = 'Forgot Password';
			$this->load->view('Auth/Forgot', $data);
		} else {
			$checkMail = $this->db->get_where('users', ['mail' => $post['email']])->row()->mail;
			if ($checkMail) {
				$this->db->where('mail', $checkMail)->update('users', ['password' => md5('12345678')]);
				$this->session->set_flashdata('msg', 'Reset Password Berhasil! Silakan Login.');
				redirect(base_url());
			} else {
				$this->session->set_flashdata('msg', 'Reset Password Gagal! Email Tidak Terdaftar.');
				redirect(base_url());
			}
		}
	}

	public function Logout()
	{

		$this->session->set_flashdata('msg', 'Berhasil Logout.');
		redirect(base_url());
	}

	public function Register($checked = 0)
	{
		/**
		 * JIKA VALUE $checked BERNILAI 0 MAKA MENAMPILKAN VIEW
		 * JIKA VALUE $checked BERNILAI BUKAN 0 MAKAN INSERT DATA 
		 */

		$post  = $this->input->post();
		if ($checked == 0) {
			$data['title'] = 'Register';
			$this->load->view('Auth/Register', $data);
		} else {
			$checkMail = $this->db->get_where('users', ['mail' => $post['email']])->row()->mail;

			if ($checkMail == null) {
				$data = [
					'first_name' 	=> $post['first_name'],
					'last_name' 	=>  $post['last_name'],
					'mail' 			=>  $post['email'],
					'gender' 		=> $post['gender'],
					'password' 		=> md5($post['password']),
				];
				$this->db->insert('users', $data);
				$this->session->set_flashdata('msg', 'Akun Berhasil DiDaftarkan! Silakan Login.');
				redirect(base_url());
			} else {
				$this->session->set_flashdata('msg', 'Email Telah Ter-Daftar.');
				redirect('register');
			}
		}
	}
}
