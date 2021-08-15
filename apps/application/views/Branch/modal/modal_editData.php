<!-- Modal addData-->
<div class="modal fade" id="editData" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Kantor Cabang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="<?= base_url('BranchController/createOrupdate/1'); ?>" method="POST">
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Kode Cabang</label>
                                <input type="text" class="form-control" placeholder="Kode Cabang" name="kode_cabang" value="<?= $edit->code_branch; ?>" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Nama Kantor Cabang</label>
                                <input type="text" class="form-control" placeholder="Nama kantor Cabang" name="nama_cabang" value="<?= $edit->desc_branch_office; ?>" />
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
        $('#editData').modal('show')
    })
</script>