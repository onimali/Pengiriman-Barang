<?php error_reporting(0); ?>
<div class="chart-box">
    <div class="row">
        <form action="<?= base_url('ManifestController/update/'.$data->id); ?>" method="POST">

            <div class="col-sm-6">
                <label class="control-label"><?= "({$this->session->userdata('branch_office')->code_branch}) - {$this->session->userdata('branch_office')->desc_branch_office} "; ?></label>
            </div>
            <div class="col-sm-6 "style="text-align: right">
                <font >Waktu : <b><?=date('H:i, d-m-Y')?></b></font>
                <br><br>
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Pilih Resi Pengiriman</label>
                    <select id="select2" required="" style="height:40px;" class="form-control" name="id_core">
                        <option value="" disabled="" selected>Pilih Salah Satu</option>
                        <?php
                         foreach ($core as $dp) : ?>
                            <option <?php if ($dp->id == $data->id_core) { echo "selected"; }?> value="<?= $dp->id; ?>"><?= $dp->id; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group has-feedback">
                    <label class="control-label">Pilih Kurir Pengiriman</label>
                    <select id="select3" required="" style="height:40px;" class="form-control" name="id_kurir" >
                        <option value="" disabled="" selected>Pilih Salah Satu</option>
                        <?php
                         foreach ($kurir as $dp) : ?>
                            <option <?php if ($dp->id == $data->id_kurir) { echo "selected"; }?> value="<?= $dp->id; ?>"><?= ucwords($dp->first_name.' '.$dp->last_name); ?> [<?=strtoupper($dp->nopol)?>]</option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="col-md-12">
                <a href="<?=base_url('ManifestController')?>" type="reset" class="btn btn-danger btn-sm">Kembali</a>
                <button type="submit" id="submit" class="btn btn-primary btn-sm">Simpan</button>
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