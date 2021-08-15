<div class="row">
    <div class="col-md-12">
        <div class="chart-box">
            <div id="example_filter" class="dataTables_filter pull-right" style="margin-bottom: 10px;">
                <a href="javascript:void(0)" class="lable-tag tag-success" data-toggle="modal" data-target="#staticBackdrop">Tambah Data</a>
            </div>
            <table class="table table-responsive" id="pengirim_penerima" style="width:100%">
                <thead>
                    <tr>
                        <th class="sortable">No</th>
                        <th class="sortable">Nama</th>
                        <th class="sortable">No Telp</th>
                        <th class="sortable">Alamat</th>
                        <th class="sortable">Status</th>
                        <th> Aksi</th>
                    </tr>
                </thead>
                <?php $no = 0;
                foreach ($this->db->get('pengirim_penerima')->result() as $pp) :  $no++; ?>
                    <tr>
                        <td class="text-truncate"><?= $no; ?></td>
                        <td class="text-truncate"><?= $pp->nama; ?></td>
                        <td class="text-truncate"><?= $pp->telp; ?></td>
                        <td class="text-truncate"><?= $pp->alamat; ?></td>
                        <td class="text-truncate"><span class="lable-tag tag-unpaid"><?= $pp->status; ?></span></td>
                        <td> <a href="javascript:void(0)" class="lable-tag tag-success" onclick="editData('<?= $pp->id; ?>')">Edit</a>
                            <a href="<?= base_url('UsersController/remove/' . $pp->id); ?>" class="lable-tag tag-success">Hapus</a>
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
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="<?= base_url('UsersController/createOrupdate'); ?>" method="POST">

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Telp</label>
                                <input type="telp" class="form-control" name="telp" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label class="control-label">Status</label>
                                <select class="form-control" name="status" style="font-size:12px;">
                                    <option value="default"> --- Pilih Salah Satu --- </option>
                                    <option value="pengirim"> Pengirim</option>
                                    <option value="penerima"> Penerima </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label class="control-label">Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3"></textarea>
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
        $('#pengirim_penerima').DataTable();
    });

    var editData = (id) => {

        var data = (res) => {
            $('.modal_editData').html(res)
        }
        $.get('<?= base_url('UsersController/view/'); ?>' + id, data)
    }
</script>