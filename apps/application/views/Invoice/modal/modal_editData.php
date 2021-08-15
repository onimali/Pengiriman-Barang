<!-- Modal addData-->
<div class="modal fade" id="editData" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Kantor Cabang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="<?= base_url('PaketController/createOrupdateDokumen/1'); ?>" method="POST">

                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label class="control-label">Nama Dokumen</label>
                                <input type="hidden" name="id" value="<?= $dokumenEdit->id; ?>">
                                <input type="text" class="form-control" placeholder="Nama Paket" name="nama_dokumen" value="<?= $dokumenEdit->nama_dokumen; ?>" />
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
    $(document).ready(function() {
        $('editData').modal('show')
    })
</script>