<div class="row">
    <div class="col-md-12">
        <div class="chart-box">
            <div id="example_filter" class="dataTables_filter " style="margin-bottom: 10px;">
                <a href="<?=base_url('ManifestController/adddetail/'.$data->id)?>" class="btn btn-primary btn-sm">Tambah Detail Manifest</a>
            </div>
            <hr>
            <table class="table table-responsive" id="pengirim_penerima" style="width:100%">
                <thead>
                    <tr>
                        <th class="sortable">No</th>
                        <th class="sortable">Waktu</th>
                        <th class="sortable">Status</th>
                        <th> Aksi</th>
                    </tr>
                </thead>
                <?php $no = 0;
                foreach ($detail as $core) :  $no++; ?>
                    <tr>
                        <td class="text-truncate"><?= $no; ?></td>
                        <td class="text-truncate"><?= $core->waktu; ?></td>
                        <td class="text-truncate"><?= $core->status; ?></td>
                        <td>
                            <a href="<?= base_url('ManifestController/updatedetail/' .$core->id.'/'.$core->id_manifest); ?>" class="lable-tag tag-success">Update</a>
                            <a onclick="return confirm('apakah anda yakin?')" href=" <?= base_url('ManifestController/deletedetail/' .$core->id.'/'.$core->id_manifest); ?>" class="lable-tag tag-success">Hapus</a>
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