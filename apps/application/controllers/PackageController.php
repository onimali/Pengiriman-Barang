<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PackageController extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 */
	function resi($id){
			$cek 	= $this->db->get_where('wilayah_kabupaten',['kd_branch'=>$id])->row();
            $q 		= $this->db->query("SELECT MAX(RIGHT(id,7)) AS kd_max FROM core where kode_cabang = '$id' ");
            $kd 	= "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%07s", $tmp);
                }
            }else{
                $kd = "00000001";
            }
            return $cek->provinsi_id.$kd;
    }
	public function index($checked = 0)
	{
		/**
		 * JIKA CHECKED BERNIAL 0 MAKA TAMPILKAN ADD PAKET JIKA BUKAN 0 MAKA LAKUKAN PROSES INSERT PAKET
		 */
		$Post = $this->input->post();
		if ($checked == 0) {
			$data['header'] = 'Paket';
			$this->load->view('Layouts/header', $data);
			$this->load->view('Package/Package', $data);
			$this->load->view('Layouts/footer');
		} else { 
 
			// dump_exit($Post);
			$data = [
				'id'				=> $this->resi($this->session->userdata('branch_office')->code_branch),
				'jenis_layanan' 	=> $Post['service'],
				'jenis_paket' 		=> $Post['package'],
				'asal_paket' 		=> $Post['sendto'],
				'tujuan_paket' 		=> $Post['shipto'],
				'pengambilan' 		=> $Post['taking'],
				'pembayaran' 		=> $Post['payment'],
				'berat' 			=> $Post['kg'],
				'harga' 			=> $Post['price_all'],
				'jumlah_paket' 		=> $Post['totalPackage'],
				'isi_paket' 		=> $Post['isi_paket'],
				'tarif_total' 		=> $Post['priceTotal'],
				'kode_cabang' 		=> $this->session->userdata('branch_office')->code_branch,
				'date'				=> date('Y-m-d'),
				'status' 			=> '1',
				'nama_pengirim' 	=> $Post['nama_pengirim'],
				'nohp_pengirim' 	=> $Post['telp_pengirim'],
				'alamat_pengirim' 	=> $Post['alamat_pengirim'],
				'nama_penerima' 	=> $Post['nama_penerima'],
				'nohp_penerima' 	=> $Post['telp_penerima'],
				'alamat_penerima'	=> $Post['alamat_penerima'],
			];
			//die(var_dump($data));
			$this->db->insert('core', $data);
			// dump_exit($this->db->last_query());
			redirect('InvoiceController/print/'.$data['id']);
		}
	}

	public function paketMasuk()
	{
		$id 	= $this->session->userdata('branch_office')->code_branch;
		$cek 	= $this->db->get_where('wilayah_kabupaten',['kd_branch'=>$id])->row();
		// echo $cek->id;
		// die();
		$data['data']	= $this->db->query("SELECT *,a.id as resi FROM core AS a 
											INNER JOIN jenis_paket ON a.jenis_paket = jenis_paket.id 
											INNER JOIN daftar_paket ON a.jenis_layanan = daftar_paket.id 
											WHERE a.tujuan_paket ='" . $cek->id . "' and a.status = '1' ")->result();
		$data['header'] = 'Paket Masuk';
		$this->load->view('Layouts/header', $data);
		$this->load->view('Package/paketmasuk');
		$this->load->view('Layouts/footer');
	}

	public function paketKeluar()
	{
		$id 	= $this->session->userdata('branch_office')->code_branch;
		$cek 	= $this->db->get_where('wilayah_kabupaten',['kd_branch'=>$id])->row();

		$data['data']	= $this->db->query("SELECT *,a.id as resi FROM core AS a 
											INNER JOIN jenis_paket ON a.jenis_paket = jenis_paket.id 
											INNER JOIN daftar_paket ON a.jenis_layanan = daftar_paket.id 
											WHERE a.asal_paket ='" . $cek->id . "' and a.status = '1' ")->result();
		$data['header'] = 'Paket Keluar';
		$this->load->view('Layouts/header', $data);
		$this->load->view('Package/paketkeluar');
		$this->load->view('Layouts/footer');
	}

	public function deactivePaketKeluar($resi)
	{
		$this->db->where('id', $resi)->update('core', ['status' => 0]);
		redirect(base_url('PackageController/paketKeluar'));
	}
}
