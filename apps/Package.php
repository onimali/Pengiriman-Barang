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
                        <?php
                         foreach ($this->db->select('id,nama_paket')->get('daftar_paket')->result() as $dp) :
                          ?>
                            <option value="<?= $dp->id; ?>"><?= $dp->nama_paket; ?></option>
                        <?php
                         endforeach; 
                         ?>
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
               
                
                <p class="btn btn-primary">Data Pengirim</p>

                <div class="row">
                    <div class="col-sm-8">
                        <label class="control-label">Nama Pengirim</label>
                        <input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" style="margin-bottom: 10px;" 
                        value="<?=isset($_POST['nama_pengirim']) ? $_POST['nama_pengirim'] : ''?>"/>
               
                    </div>
                    <div class="col-sm-8">
                        <label class="control-label">No Telpon</label>
                        <input type="text" class="form-control" id="telp_pengirim" name="telp_pengirim" style="margin-bottom: 10px;" />
                    </div>

                    <div class="col-sm-8">
                        <label class="control-label">Alamat Pengirim</label>
                        <textarea class="form-control" id="basicTextarea" rows="3" name="alamat_pengirim"></textarea>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                
                <p class="btn btn-primary">Data Penerima</p>
                <div class="row">
                    <div class="col-sm-8">
                        <label class="control-label">Nama penerima</label>
                        <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" style="margin-bottom: 10px;" />
                    </div>
                    <div class="col-sm-4">
                        <label class="control-label">No Telpon</label>
                        <input type="text" class="form-control" id="telp_penerima" name="telp_penerima" style="margin-bottom: 10px;" />
                    </div>

                    <div class="col-sm-4">
                        <label class="control-label">Alamat penerima</label>
                        <textarea class="form-control" id="basicTextarea" rows="3" name="alamat_penerima"></textarea>
                    </div>
                </div> 
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