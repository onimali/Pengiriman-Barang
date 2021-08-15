<div class="row">
    <div class="col-md-12">
        <div class="chart-box">
            <div id="example_filter" class="dataTables_filter pull-right">
                <a href="javascript:void(0)" class="lable-tag tag-success" data-toggle="modal" data-target="#staticBackdrop">Tambah Data</a>
            </div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th class="sortable">Nama Paket</th>
                        <th class="sortable">Berat Paket</th>
                        <th class="sortable">Harga Pertama</th>
                        <th class="sortable">Harga Selanjut</th>
                        <th> Aksi</th>
                    </tr>
                </thead>
                <?php $no = 0;
                foreach ($this->db->get('daftar_paket')->result() as $dp) :  $no++; ?>
                    <tr>
                        <td class="text-truncate"><?= $dp->nama_paket; ?></td>
                        <td class="text-truncate"><?= $dp->berat; ?></td>
                        <td class="text-truncate"><?= number_format($dp->pkt_pertama); ?></td>
                        <td class="text-truncate"><?= number_format($dp->pkt_selanjutnya); ?></td>
                        <td> <a href="javascript:void(0)" class="lable-tag tag-success" onclick="editData('<?= $dp->id; ?>')">Edit</a>
                            <a href="<?= base_url('PaketController/remove/' . $dp->id); ?>" class="lable-tag tag-success">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<div class="modal_editData"></div>

<!-- Modal addData-->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Paket</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="<?= base_url('PaketController/createOrupdate'); ?>" method="POST">

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Nama Paket</label>
                                <input type="text" class="form-control" placeholder="Nama Paket" name="nama_paket" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Berat Paket</label>
                                <input type="number" class="form-control" placeholder="Berat Paket" name="berat" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Harga Paket Pertama</label>
                                <input type="number" class="form-control" placeholder="Harga Paket" name="pkt_pertama" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Harga Paket Selanjutnya</label>
                                <input type="number" class="form-control" placeholder="Harga Paket" name="pkt_selanjutnya" />
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var editData = (id) => {

        var data = (res) => {
            $('.modal_editData').html(res)
        }
        $.get('<?= base_url('paketController/view/'); ?>' + id, data)
    }
</script>