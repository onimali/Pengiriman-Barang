

<form action="" method="post">
	<div class="row">
	
                    <label class="control-label">Nama pengirim</label>
                    
                        <input type="text" name="nama_pengirim"
						value="<?=isset($_POST['nama_pengirim']) ? $_POST['nama_pengirim'] : ''?>"/>
               
                
		</div>
	<div class="row">
		<label>telp</label>
		<input type="text" name="telp" value="<?=isset($_POST['telp']) ? $_POST['telp'] : ''?>"/>
	</div>
	<div class="row">
		<label>alamat</label>
		<input type="text" name="alamat" value="<?=isset($_POST['alamat']) ? $_POST['alamat'] : ''?>"/>
	</div>
	
	<div class="row">
		<label>Email</label>
		<input type="text" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"/>
	</div>
	<div class="row">
		<label>Lokasi</label>
		<select name="area">
			<?php $options = array('Jakarta', 'Semarang', 'Surakarta', 'Yogyakarta', 'Surabaya');
			foreach ($options as $area) {
				$selected = @$_POST['area'] == $area ? ' selected="selected"' : '';
				echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';
			}?>
		</select>
	</div>
	<div class="row">
		<label>Jenis Kelamin</label>
		<div class="options">
			<?php
			$jenis_kelamin = array('L' => 'Laki Laki', 'P' => 'Perempuan');
			foreach ($jenis_kelamin as $kode => $detail) {
				$checked = @$_POST['jenis_kelamin'] == $kode ? ' checked="checked"' : '';
				echo '<label class="radio">
						<input name="jenis_kelamin" type="radio" value="' . $kode . '"' . $checked . '>' . $detail . '</option>
					</label>';
			}
			?>
		</div>
	</div>
	<div class="row">
		<label>Skill</label>
		<div class="options">
			<?php 
			$program = array('PHP', 'MySQL', 'Javascript', 'HTML', 'CSS');
			foreach ($program as $skill) {
				$checked = isset($_POST['skill_' . $skill]) ? ' checked="checked"' : '';
				echo '<label class="checkbox">
						<input type="checkbox" name="skill_' . $skill . '"' . $checked . '>' . $skill . 
					'</label>';
			}
			?>
		</div>
	</div>
	<div class="row">
		<input type="submit" name="submit" value="Simpan"/>
	</div>
</form>
<?php
if (isset($_POST['submit'])) {
	echo '<h1>Hasil Input</h1>';
	echo '<ul>';
	echo '<li>Nama_pengirim: ' . $_POST['nama_pengirim'] . '</li>';
	echo '<li>Nama: ' . $_POST['nama'] . '</li>';
	echo '<li>Email: ' . $_POST['email'] . '</li>';
	echo '<li>telp: ' . $_POST['telp'] . '</li>';
	echo '<li>alamat: ' . $_POST['alamat'] . '</li>';
	echo '<li>Lokasi: ' . $_POST['area'] . '</li>';
	echo '<li>Jenis Kelamin: ' . (isset($_POST['jenis_kelamin']) ? $jenis_kelamin[$_POST['jenis_kelamin']] : '-') . '</li>';
	
	$list_skill = array();
	foreach ($program as $skill) {
		if ( isset($_POST['skill_' . $skill]) )
		{
			$list_skill[] = $skill;
		}
	}

	echo '<li>Skill: ' . ($list_skill ? join($list_skill, ', ') : '-') . '</li>';
	echo '</ul>';
}?>

<?php error_reporting(0); ?>
<div class="chart-box">
    <div class="row">
        <div class="col-sm-6">
            <h4>Buat Paket</h4>
        </div>
    </div>
    <div class="row">
        <form action="<?= base_url('package/1'); ?>" method="POST">

            <div class="col-sm-6">
                <label class="control-label"><?= "({$this->session->userdata('branch_office')->code_branch}) - {$this->session->userdata('branch_office')->desc_branch_office} "; ?></label>
            </div>
            <div class="col-sm-6">
                <input type="date" class="form-control" id="date_create" name="date_create" />
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Jenis Layanan</label>
                    <select class="form-control" name="service" id="service">
                        <option value="default">Pilih Salah Satu</option>
                        <?php foreach ($this->db->select('id,nama_paket')->get('daftar_paket')->result() as $dp) : ?>
                            <option value="<?= $dp->id; ?>"><?= $dp->nama_paket; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Jenis Paket</label>
                    <select class="form-control" name="package" id="package">
                        <option value="default">Pilih Salah Satu</option>
                        <?php foreach ($this->db->get('jenis_paket')->result() as $jp) : ?>
                            <option value="<?= $jp->id; ?>"><?= $jp->nama_dokumen; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Asal Paket</label>
                    <select class="form-control" id="sendto" name="sendto">
                        <option value="default">Pilih Wilayah Asal</option>
                        <?php foreach ($this->db->get('wilayah_kabupaten')->result() as $wil) : ?>
                            <option value="<?= $wil->id; ?>"><?= str_replace(['Kab. ', 'Kota '], '', $wil->nama); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Tujuan Paket</label>
                    <select class="form-control" id="shipto" name="shipto">
                        <option value="default">Pilih Wilayah Tujuan</option>
                        <?php foreach ($this->db->get('wilayah_kabupaten')->result() as $wil) : ?>
                            <option value="<?= $wil->id; ?>"><?= str_replace(['Kab. ', 'Kota '], '', $wil->nama); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Pengambilan</label>
                    <select class="form-control" id="taking" name="taking">
                        <option value="default">--- PILIH PENGAMBILAN ---</option>
                        <option value="1">Diantar</option>
                        <option value="2">Diambil</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Pembayaran</label>
                    <select class="form-control" id="payment" name="payment">
                        <option value="default">--- PILIH PEMBAYARAN ---</option>
                        <option value="1">Tunai</option>
                        <option value="2">Transfer</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group has-feedback">
                    <label class="control-label">Berat (kg)</label>
                    <input type="number" class="form-control" id="kg" name="kg" />

                    <label class="control-label">Jumlah Paket</label>
                    <input type="number" class="form-control" id="totalPackage" name="totalPackage" />
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group has-feedback">

                    <label class="control-label">Harga</label>
                    <input type="number" class="form-control" id="price_all" name="price_all" />

                    <label class="control-label">Isi Paket</label>
                    <input type="text" class="form-control" id="isi_paket" name="isi_paket" />
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group has-feedback">

                    <label class="control-label">Tarif</label>
                    <input type="text" class="form-control" id="priceTotal" name="priceTotal" style="margin-bottom: 10px;" />
                    <a href="javascript:void(0)" class="btn btn-primary" onclick="price()">Cek Tarif</a>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Data Pengirim</label>
                    <select class="form-control" id="pengirim" name="pengirim">
                        <option value="default">--- PILIH DATA PENGIRIM ---</option>
                        <?php foreach ($this->db->get_where('pengirim_penerima', ['status' => 'pengirim'])->result() as $pp) : ?>
                            <option value="<?= $pp->id; ?>"><?= $pp->nama; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- <p>Data Pengirim</p> -->

                <!-- <div class="row">
                    <div class="col-sm-4">
                        <label class="control-label">Nama Pengirim</label>
                        <input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" style="margin-bottom: 10px;" />
                    </div>
                    <div class="col-sm-4">
                        <label class="control-label">No Telfon</label>
                        <input type="text" class="form-control" id="telp_pengirim" name="telp_pengirim" style="margin-bottom: 10px;" />
                    </div>

                    <div class="col-sm-8">
                        <label class="control-label">Alamat Pengirim</label>
                        <textarea class="form-control" id="basicTextarea" rows="3" name="alamat_pengirim"></textarea>
                    </div>
                </div> -->
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Data Penerima</label>
                    <select class="form-control" id="penerima" name="penerima">
                        <option value="default">--- PILIH DATA PENERIMA ---</option>
                        <?php foreach ($this->db->get_where('pengirim_penerima', ['status' => 'penerima'])->result() as $pp) : ?>
                            <option value="<?= $pp->id; ?>"><?= $pp->nama; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- <p>Data Penerima</p> -->
                <!-- <div class="row">
                    <div class="col-sm-4">
                        <label class="control-label">Nama penerima</label>
                        <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" style="margin-bottom: 10px;" />
                    </div>
                    <div class="col-sm-4">
                        <label class="control-label">No Telfon</label>
                        <input type="text" class="form-control" id="telp_penerima" name="telp_penerima" style="margin-bottom: 10px;" />
                    </div>

                    <div class="col-sm-8">
                        <label class="control-label">Alamat penerima</label>
                        <textarea class="form-control" id="basicTextarea" rows="3" name="alamat_penerima"></textarea>
                    </div>
                </div> -->
            </div>



            <div class="col-md-12">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        document.getElementById('date_create').valueAsDate = new Date();
    })

    var price = () => {
        let kg = document.getElementById('kg').value
        let price = document.getElementById('price_all').value
        document.getElementById('priceTotal').value = (Number(kg) * Number(price))
    }
</script>


<form action="" method="post">
	<div class="row">
		<label>Nama</label>
		<input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
	</div>
	<div class="row">
		<label>Email</label>
		<input type="text" name="email" value="<?=isset($_POST['email']) ? $_POST['email'] : ''?>"/>
	</div>
	<div class="row">
		<label>Lokasi</label>
		<select name="area">
			<?php $options = array('Jakarta', 'Semarang', 'Surakarta', 'Yogyakarta', 'Surabaya');
			foreach ($options as $area) {
				$selected = @$_POST['area'] == $area ? ' selected="selected"' : '';
				echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';
			}?>
		</select>
	</div>
	<div class="row">
		<label>Jenis Kelamin</label>
		<div class="options">
			<?php
			$jenis_kelamin = array('L' => 'Laki Laki', 'P' => 'Perempuan');
			foreach ($jenis_kelamin as $kode => $detail) {
				$checked = @$_POST['jenis_kelamin'] == $kode ? ' checked="checked"' : '';
				echo '<label class="radio">
						<input name="jenis_kelamin" type="radio" value="' . $kode . '"' . $checked . '>' . $detail . '</option>
					</label>';
			}
			?>
		</div>
	</div>
	<div class="row">
		<label>Skill</label>
		<div class="options">
			<?php 
			$program = array('PHP', 'MySQL', 'Javascript', 'HTML', 'CSS');
			foreach ($program as $skill) {
				$checked = isset($_POST['skill_' . $skill]) ? ' checked="checked"' : '';
				echo '<label class="checkbox">
						<input type="checkbox" name="skill_' . $skill . '"' . $checked . '>' . $skill . 
					'</label>';
			}
			?>
		</div>
	</div>
	<div class="row">
		<input type="submit" name="submit" value="Simpan"/>
	</div>
</form>
<?php
if (isset($_POST['submit'])) {
	echo '<h1>Hasil Input</h1>';
	echo '<ul>';
	echo '<li>Nama: ' . $_POST['nama'] . '</li>';
	echo '<li>Email: ' . $_POST['email'] . '</li>';
	echo '<li>Lokasi: ' . $_POST['area'] . '</li>';
	echo '<li>Jenis Kelamin: ' . (isset($_POST['jenis_kelamin']) ? $jenis_kelamin[$_POST['jenis_kelamin']] : '-') . '</li>';
	
	$list_skill = array();
	foreach ($program as $skill) {
		if ( isset($_POST['skill_' . $skill]) )
		{
			$list_skill[] = $skill;
		}
	}

	echo '<li>Skill: ' . ($list_skill ? join($list_skill, ', ') : '-') . '</li>';
	echo '</ul>';
}?>