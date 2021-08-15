<div class="row">
    <div class="col-md-12">
        <div class="chart-box">
            <div id="example_filter" class="dataTables_filter pull-right" style="margin-bottom: 10px;">
            </div>
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
                            <a href="<?= base_url('InvoiceController/print/' .$core->resi); ?>" target="_blank" class="lable-tag tag-success">Print</a>
                            <a onclick="return confirm('apakah anda yakin?')" href=" <?= base_url('PackageController/deactivePaketMasuk/' . $core->resi); ?>" class="lable-tag tag-success">Hapus</a>
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