<div class="row">
    <div class="col-md-12">
        <div class="chart-box">
            <div id="example_filter" class="dataTables_filter " style="margin-bottom: 10px;">
                <a href="<?=base_url('ManifestController/add')?>" class="btn btn-primary btn-sm">Tambah Manifest</a>
            </div>
            <hr>
            <table class="table table-responsive" id="pengirim_penerima" style="width:100%">
                <thead>
                    <tr>
                        <th class="sortable">No</th>
                        <th class="sortable">No. Resi</th>
                        <th class="sortable">Pengirim</th>
                        <th class="sortable">Penerima</th>
                        <th class="sortable">Tanggal</th>
                        <th class="sortable">Total</th>
                        <th> Aksi</th>
                    </tr>
                </thead>
                <?php $no = 0;
                foreach ($data as $core) :  $no++; ?>
                    <tr>
                        <td class="text-truncate"><?= $no; ?></td>
                        <td class="text-truncate"><?= $core->resi; ?></td>
                        <td class="text-truncate"><?=ucfirst($core->nama_pengirim)?></td>
                        <td class="text-truncate"><?=ucfirst($core->nama_penerima)?></td>
                        <td class="text-truncate"><?= $core->date; ?></td>
                        <td class="text-truncate">Rp. <?= number_format($core->tarif_total); ?></td>
                        <td>
                            <a href="<?= base_url('ManifestController/detail/' .$core->idm); ?>" class="lable-tag tag-success">Detail</a>
                            <!-- <a target="_blank" href="<?= base_url('ManifestController/print/' .$core->idm); ?>" class="lable-tag tag-success">Print</a> -->
                            <a href="<?= base_url('ManifestController/update/' .$core->idm); ?>" class="lable-tag tag-success">Update</a>
                            <a onclick="return confirm('apakah anda yakin?')" href=" <?= base_url('ManifestController/delete/' .$core->idm); ?>" class="lable-tag tag-success">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#pengirim_penerima').DataTable();
    });
</script>