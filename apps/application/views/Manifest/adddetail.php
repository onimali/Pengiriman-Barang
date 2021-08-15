<?php error_reporting(0); ?>
<div class="chart-box">
    <div class="row">
        <form action="<?= base_url('ManifestController/adddetail/'.$id); ?>" method="POST">

            <div class="col-sm-6">
                <label class="control-label"><?= "({$this->session->userdata('branch_office')->code_branch}) - {$this->session->userdata('branch_office')->desc_branch_office} "; ?></label>
            </div>
            <div class="col-sm-6 "style="text-align: right">
                <font >Waktu : <b><?=date('H:i, d-m-Y')?></b></font>
                <br><br>
            </div>

            <div class="col-md-12">
                <div class="form-group has-feedback">
                    <label class="control-label">Progres Pengiriman</label>
                    <textarea class="form-control" required="" name="status"></textarea>
                </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="col-md-12">
                <a href="<?=base_url('ManifestController/detail/'.$id)?>" type="reset" class="btn btn-danger btn-sm">Kembali</a>
                <button type="submit" id="submit" class="btn btn-primary btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>