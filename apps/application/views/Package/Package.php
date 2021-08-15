<?php error_reporting(0); ?>
<div class="chart-box">
    <div class="row">
        <div class="col-sm-6">
            <h4>Buat Paket</h4>
        </div>
    </div>
    <div class="row">
        <form target="_blank" action="<?= base_url('package/1'); ?>" method="POST">

            <div class="col-sm-6">
                <label class="control-label"><?= "({$this->session->userdata('branch_office')->code_branch}) - {$this->session->userdata('branch_office')->desc_branch_office} "; ?></label>
            </div>
            <div class="col-sm-6 "style="text-align: right">
                <font >Waktu : <b><?=date('H:i, d-m-Y')?></b></font>
                <br><br>
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Jenis Layanan</label>
                    <select required="" style="height:40px;" class="form-control" name="service" id="service">
                        <option value="">Pilih Salah Satu</option>
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
                    <select required="" style="height:40px;" class="form-control" name="package" id="package">
                        <option value="">Pilih Salah Satu</option>
                        <?php foreach ($this->db->get('jenis_paket')->result() as $jp) : ?>
                            <option value="<?= $jp->id; ?>"><?= $jp->nama_dokumen; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Asal Paket</label>
                    <select required="" style="height:40px;" class="form-control" id="sendto" name="sendto">
                        <option value="">Pilih Wilayah Asal</option>
                        <?php foreach ($this->db->get('wilayah_kabupaten')->result() as $wil) : ?>
                            <option value="<?= $wil->id; ?>"><?= str_replace(['Kab. ', 'Kota '], '', $wil->nama); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Tujuan Paket</label>
                    <select required="" style="height:40px;" class="form-control" id="shipto" name="shipto">
                        <option value="">Pilih Wilayah Tujuan</option>
                        <?php foreach ($this->db->get('wilayah_kabupaten')->result() as $wil) : ?>
                            <option value="<?= $wil->id; ?>"><?= str_replace(['Kab. ', 'Kota '], '', $wil->nama); ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Pengambilan</label>
                    <select required="" style="height:40px;" class="form-control" id="taking" name="taking">
                        <option value="">--- PILIH PENGAMBILAN ---</option>
                        <option value="1">Diantar</option>
                        <option value="2">Diambil</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Pembayaran</label>
                    <select required="" style="height:40px;" class="form-control" id="payment" name="payment">
                        <option value="">--- PILIH PEMBAYARAN ---</option>
                        <option value="1">Tunai</option>
                        <option value="2">Transfer</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Jumlah Paket</label>
                    <input required=""  type="number" class="form-control" id="totalPackage" name="totalPackage" />
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Isi Paket</label>
                    <input required="" type="text" class="form-control" id="isi_paket" name="isi_paket" />
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group has-feedback">
                    <label class="control-label">Berat (kg)</label>
                    <input required="" type="number" class="form-control" onkeyup="myFunction()" id="kg" name="kg" />

                    
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group has-feedback">

                    <label class="control-label">Harga</label>
                    <input required="" type="number" class="form-control" onkeyup="myFunction()" id="price_all" name="price_all" />

                    
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group has-feedback">

                    <label class="control-label"><font size="3">Tarif</label>
                    <input required="" type="text" class="form-control" readonly="" id="priceTotal" name="priceTotal" style="margin-bottom: 10px;" />
                    <!-- <a href="javascript:void(0)" class="btn btn-primary" onclick="myFunction()"><font size="3">Cek Tarif</a> -->
                </div>
            </div>


            <div class="col-md-6">
               
                
                <p class="alert alert-success"><font size="3">Data Pengirim</p>

                <div class="row">
                    <div class="col-sm-6">
                        <label class="control-label">Nama Pengirim</label>
                        <input required="" type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" style="margin-bottom: 10px;" />
                     
                    </div>
                    <div class="col-sm-6">
                        <label class="control-label">No Telpon</label>
                        <input required="" type="text" class="form-control" id="telp_pengirim" name="telp_pengirim" style="margin-bottom: 10px;" />
                    </div>

                    <div class="col-sm-12">
                        <label class="control-label">Alamat Pengirim</label>
                        <textarea class="form-control" id="basicTextarea" rows="3" name="alamat_pengirim"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                
                <p class="alert alert-info"><font size="3">Data Penerima</p>
                <div class="row">
                    <div class="col-sm-6">
                        <label class="control-label">Nama penerima</label>
                        <input required="" type="text" class="form-control" id="nama_penerima" name="nama_penerima" style="margin-bottom: 10px;" />
                    </div>
                    <div class="col-sm-6">
                        <label class="control-label">No Telpon</label>
                        <input required="" type="text" class="form-control" id="telp_penerima" name="telp_penerima" style="margin-bottom: 10px;" />
                    </div>

                    <div class="col-sm-12">
                        <label class="control-label">Alamat penerima</label>
                        <textarea class="form-control" id="basicTextarea" rows="3" name="alamat_penerima"></textarea>
                    </div>
                </div> 
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="col-md-12 text-center">
                <button type="reset" class="btn btn-danger"><font size="3">Reset Form</button>
                <button type="submit" id="submit" class="btn btn-primary"><font size="3">Invoice</button>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        document.getElementById('date_create').valueAsDate = new Date();
    })

    function myFunction() {
        var kg = document.getElementById('kg').value
        var price = document.getElementById('price_all').value
        document.getElementById('priceTotal').value = (Number(kg) * Number(price))
    }
</script>