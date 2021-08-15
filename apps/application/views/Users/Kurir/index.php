<div class="row">
    <div class="col-md-12">
        <div class="chart-box">
            <div id="example_filter" class="dataTables_filter pull-right" style="margin-bottom: 10px;">
                <!-- <a href="javascript:void(0)" class="lable-tag tag-success" data-toggle="modal" data-target="#staticBackdrop">Tambah Data</a> -->
            </div>
            <table class="table table-responsive text-center" id="kurir" style="width:100%">
                <thead>
                    <tr>
                        <th style="text-align: center" class="sortable">No</th>
                        <th style="text-align: center" class="sortable">Nama</th>
                        <th style="text-align: center" class="sortable">No Polisi</th>
                        <th style="text-align: center" class="sortable">Status</th>
                        <th style="text-align: center"> Aksi</th> 
                    </tr>
                </thead>
                <?php $no = 0;
                foreach ($this->db->get_where('users',['level'=>'kurir'])->result() as $k) :  $no++; ?>
                    <tr>
                        <td class="text-truncate"><?= $no; ?></td>
                        <td class="text-truncate"><?= $k->first_name.' '.$k->last_name; ?></td>
                        <td class="text-truncate"><?= $k->nopol; ?></td>
                        <td class="text-truncate"><?= ucfirst($k->status); ?></td>
                        <td> 
                            <a href="#" class="lable-tag tag-success" data-toggle="modal" data-target="#edit<?=$k->id?>">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<div class="modal_editData"></div>

<!-- Modal addData-->
<?php  foreach ($this->db->get_where('users',['level'=>'kurir'])->result() as $k) :  ?>
<div class="modal fade" id="edit<?=$k->id?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Update Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <form action="<?= base_url('UsersController/createOrupdateKurir/'.$k->id); ?>" method="POST">

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Nama</label>
                                <input readonly="" type="text" class="form-control" value="<?=$k->first_name.' '.$k->last_name?>" name="nama" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">No Polisi</label>
                                <input readonly="" type="text" class="form-control" value="<?=$k->nopol?>" name="nopol" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group has-feedback">
                                <label class="control-label">Status</label>
                                <select name="status" class="form-control" required="" style="height: 40px">
                                    <option <?php if ($k->status == 'aktif') { echo "selected"; }?> value="aktif">Aktif</option>
                                    <option <?php if ($k->status == 'nonaktif') { echo "selected"; }?> value="nonaktif">Nonaktif</option>
                                </select>
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
<?php endforeach; ?>
<script>
    $(document).ready(function() {
        $('#kurir').DataTable();
    });
</script>

