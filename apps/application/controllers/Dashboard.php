<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard/index');
	}
	public function cek_tarif()
	{
	    $asal 	= $this->input->post('asal');
	    $tujuan = $this->input->post('tujuan');
	    $berat 	= $this->input->post('berat');
	    $data 	= $this->db->get_where('daftar_harga',['berat'=>$berat])->row();
	    if ($data) {
		    $html 	= '
		    <h3>'.$asal.' > '.$tujuan.' ( '.$berat.' Kg )</h3>
		    <table class="table table-bordered">
		    	<thead>
		    		<th>Paket Diambil</th>
		    		<th>Paket Diambil Khusus</th>
		    		<th>Paket Kilat</th>
		    	</thead>
		    	<tbody>
		    		<tr>
		    			<td> Rp. '.number_format($data->diambil).'</td>
		    			<td> Rp. '.number_format($data->diambil_khusus).'</td>
		    			<td> Rp. '.number_format($data->kilat).'</td>
		    		</tr>
		    	</tbody>
		    </table>
		    ';
		}
		else
		{
			$html 	= '
		    <h3>'.$asal.' > '.$tujuan.' ( '.$berat.' Kg )</h3>
		    <table class="table table-bordered">
		    	<thead>
		    		<th>Paket Diambil</th>
		    		<th>Paket Diambil Khusus</th>
		    		<th>Paket Kilat</th>
		    	</thead>
		    	<tbody>
		    		<tr>
		    			<td colspan="3"> Data tidak ditemukan, silahkan hubungi admin </td>
		    		</tr>
		    	</tbody>
		    </table>
		    ';
		}
		echo $html;
	}
	public function cek_resi()
	{
	    $resi 	= $this->input->post('resi');
	    $data 	= $this->db->get_where('core',['id'=>$resi])->row();
	    
	    if ($data) {
	    	$man 	= $this->db->get_where('manifest',['id_core'=>$resi])->row();
	   		$kurir 	= $this->db->get_where('users',['id'=>$man->id_kurir])->row();
		    $html 	= '
		    <h3>1. Informasi Pengiriman</h3>
		    <table class="table table-bordered">
		    	<thead>
		    		<th>Tanggal Pengiriman</th>
		    		<th>Pengirim</th>
		    		<th>Penerima</th>
		    	</thead>
		    	<tbody>
		    		<tr>
		    			<td>'.date('d-m-Y H:i:s A',strtotime($man->waktu)).'<br> Kurir : '.ucfirst($kurir->first_name).' '.ucfirst($kurir->last_name).'</td>
		    			<td>'.ucfirst($data->nama_pengirim).'<br>'.ucfirst($data->alamat_pengirim).' ('.ucfirst($data->nohp_pengirim).') </td>
		    			<td>'.ucfirst($data->nama_penerima).'<br>'.ucfirst($data->alamat_penerima).' ('.ucfirst($data->nohp_penerima).') </td>
		    		</tr>
		    	</tbody>
		    </table>
		    <br>
		    <h3>2. Status Pengiriman</h3>
		    <table class="table table-bordered">
		    	<thead>
		    		<th>Tanggal</th>
		    		<th>Keterangan</th>
		    	</thead>
		    	<tbody>';
		    	$cek = $this->db->query(" SELECT *, detailmanifest.waktu as wpengiriman FROM manifest join detailmanifest on manifest.id = detailmanifest.id_manifest where manifest.id_core = '$resi' ")->result();
		    	foreach ($cek as $c) {
		    		$html .='
		    		<tr>
		    			<td>'.date('d-m-Y H:i:s A',strtotime($c->wpengiriman)).'</td>
		    			<td>'.ucfirst($c->status).'</td>
		    		</tr>';
		    	}

		  	$html .='
		    	</tbody>
		    </table>
		    ';
		}
		else
		{
			$html 	= '
		    
		    <table class="table table-bordered">
		    	<thead>
		    		<th>Tanggal Pengiriman</th>
		    		<th>Pengiriman</th>
		    		<th>Penerima</th>
		    	</thead>
		    	<tbody>
		    		<tr>
		    			<td colspan="3"> Nomor resi tidak ditemukan </td>
		    		</tr>
		    	</tbody>
		    </table>
		    ';
		}
		echo $html;
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */