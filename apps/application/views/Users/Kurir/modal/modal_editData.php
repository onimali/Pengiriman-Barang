<div class="modal fade" id="editData" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="<?= base_url('UsersController/createOrupdateKurir/1'); ?>" method="POST">

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Nama</label>
                                <input type="hidden" name="id" value="<?= $kurir->id; ?>" />
                                <input type="text" class="form-control" name="nama" value="<?= $kurir->nama; ?>" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">No Polisi</label>
                                <input type="text" class="form-control" name="nopol" value="<?= $kurir->nopol; ?>" />
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
        $('#editData').modal('show');
    })
</script>