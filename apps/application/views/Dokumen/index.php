<div class="row">
    <div class="col-md-12">
        <div class="chart-box">
            <div id="example_filter" class="dataTables_filter pull-right">
                <a href="javascript:void(0)" class="lable-tag tag-success" data-toggle="modal" data-target="#staticBackdrop">Tambah Data</a>
            </div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th class="sortable">Nama Dokumen</th>
                        <th> Aksi</th>
                    </tr>
                </thead>
                <?php $no = 0;
                foreach ($this->db->get('jenis_paket')->result() as $jp) :  $no++; ?>
                    <tr>
                        <td class="text-truncate"><?= $jp->nama_dokumen; ?></td>
                        <td> <a href="javascript:void(0)" class="lable-tag tag-success" onclick="editData('<?= $jp->id; ?>')">Edit</a>
                            <a href="<?= base_url('PaketController/removeDokumen/' . $jp->id); ?>" class="lable-tag tag-success">Hapus</a>
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
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Dokumen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="<?= base_url('PaketController/createOrupdateDokumen'); ?>" method="POST">

                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label class="control-label">Nama Dokumen</label>
                                <input type="text" class="form-control" placeholder="Nama Paket" name="nama_dokumen" />
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
        $.get('<?= base_url('paketController/viewDokumen/'); ?>' + id, data)
    }
</script>