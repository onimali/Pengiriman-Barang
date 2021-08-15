<div class="row">
    <div class="col-md-12">
        <div class="chart-box">
            <div id="example_filter" class="dataTables_filter pull-right">
                <a href="javascript:void(0)" class="lable-tag tag-success" data-toggle="modal" data-target="#staticBackdrop">Tambah Data</a>
            </div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th class="sortable">No</th>
                        <th class="sortable">Resi</th>
                        <th> Aksi</th>
                    </tr>
                </thead>
                <?php $no = 0;
                foreach ($this->db->get('invoice')->result() as $in) :  $no++; ?>
                    <tr>
                        <td class="text-truncate"><?= $no; ?></td>
                        <td class="text-truncate"><?= $in->resi; ?></td>
                        <td class="text-truncate"><?= $in->desc; ?></td>
                        <td>
                            <!-- <a href="javascript:void(0)" class="lable-tag tag-success" onclick="editData('<?= $in->resi; ?>')">Edit</a> -->
                            <a href="<?= base_url('InvoiceController/print/' . $in->resi); ?>" target="_blank" class="lable-tag tag-success"">Print</a>
                            <!-- <a href=" <?= base_url('PaketController/removeDokumen/' . $in->resi); ?>" class="lable-tag tag-success">Hapus</a> -->
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
                    <form action="<?= base_url('InvoiceController/createOrupdate'); ?>" method="POST">

                        <div class="col-md-12">
                            <select class="form-control" id="paket" name="paket">
                                <option value="default">--- PILIH DATA PAKET ---</option>
                                <?php foreach ($this->db->select('id')->get('core')->result() as $pp) : ?>
                                    <option value="<?= $pp->id; ?>"><?= "Kode Paket - {$pp->id}"; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="col-sm-12" style="margin-top: 5px;">
                            <label class="control-label">Tambahkan Catatan</label>
                            <textarea class="form-control" id="basicTextarea" rows="3" name="desc" required></textarea>
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