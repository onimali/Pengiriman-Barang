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
                    <form action="<?= base_url('UsersController/createOrupdate/1'); ?>" method="POST">

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Nama</label>
                                <input type="hidden" name="id" value="<?= $pengirim_penerima->id; ?>">
                                <input type="text" class="form-control" name="nama" value="<?= $pengirim_penerima->nama; ?>" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Telp</label>
                                <input type="telp" class="form-control" name="telp" value="<?= $pengirim_penerima->telp; ?>" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label class="control-label">Status</label>
                                <select class="form-control" name="status" style="font-size:12px;">
                                    <?php if ($pengirim_penerima->status == 'pengirim') : ?>
                                        <option value="pengirim" selected> Pengirim</option>
                                        <option value="penerima"> Penerima </option>
                                    <?php else : ?>
                                        <option value="pengirim"> Pengirim</option>
                                        <option value="penerima" selected> Penerima </option>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label class="control-label">Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3"><?= $pengirim_penerima->alamat; ?></textarea>
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