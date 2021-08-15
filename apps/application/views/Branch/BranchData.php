<div class="row">
    <div class="col-md-12">
        <div class="chart-box">
            <div id="example_filter" class="dataTables_filter pull-right">
                <a href="javascript:void(0)" class="lable-tag tag-success" data-toggle="modal" data-target="#staticBackdrop">Tambah Data</a>
            </div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th class="sortable">Kode Cabang</th>
                        <th class="sortable">Nama Kantor Cabang</th>
                        <th> Aksi</th>
                    </tr>
                </thead>
                <?php $no = 0;
                foreach ($branch as $b) :  $no++; ?>
                    <tr>
                        <td class="text-truncate"><?= $b->code_branch; ?></td>
                        <td class="text-truncate"><?= $b->desc_branch_office; ?></td>
                        <td> <a href="javascript:void(0)" class="lable-tag tag-success" onclick="editData('<?= $b->code_branch; ?>')">Edit</a>
                            <a href="<?= base_url('BranchController/remove/' . $b->code_branch); ?>" class="lable-tag tag-success">Hapus</a>
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
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Kantor Cabang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="<?= base_url('BranchController/createOrupdate'); ?>" method="POST">
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Kode Cabang</label>
                                <input type="text" class="form-control" placeholder="Kode Cabang" name="kode_cabang" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Nama Kantor Cabang</label>
                                <input type="text" class="form-control" placeholder="Nama kantor Cabang" name="nama_cabang" />
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
    var editData = (codebranch) => {

        var data = (respon) => {
            $('.modal_editData').html(respon)
        }
        $.get('<?= base_url('BranchController/view/1/'); ?>' + codebranch, data)
    }
</script>