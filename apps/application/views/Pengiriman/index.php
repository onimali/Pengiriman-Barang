<div class="row">
    <div class="col-md-12">
        <div class="chart-box">
            <a href="<?= base_url('PengirimanController/add'); ?>" class="btn btn-primary btn-sm">Tambah Data</a>
            <br><br>
            <table class="table table-responsive" id="pengirim_penerima" style="width:100%">
                <thead>
                    <tr>
                        <th class="sortable">No</th>
                        <th class="sortable">Resi</th>
                        <th class="sortable">Kurir</th>
                        <th class="sortable">Penerima</th>
                        <th class="sortable">Tanggal</th>
                        <th class="sortable">Status</th>
                        <th> Aksi</th>
                    </tr>
                </thead>
                <?php $no = 0;
                foreach ($data as $m) :  $no++; ?>
                    <tr>
                        <td class="text-truncate"><?= $no; ?></td>
                        <td><?=$m->resi?></td>
                        <td><?=$m->first_name?> <?=$m->last_name?></td>
                        <td><?=$m->nama_penerima?></td>
                        <td><?=$m->waktu?></td>
                        <td><?=$m->status?></td>
                        <td>
                            <a href="<?= base_url('PengirimanController/edit/'.$m->id_pengiriman); ?>" class="lable-tag tag-success">Edit</a>
                            <a href=" <?= base_url('PengirimanController/delete/'.$m->id_pengiriman); ?>" class="lable-tag tag-success">Hapus</a>
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