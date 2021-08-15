<div class="row">
    <div class="col-md-12">
        <div class="chart-box">
            <div id="example_filter" class="dataTables_filter pull-right" style="margin-bottom: 10px;">
                <a href="#" class="lable-tag tag-success" data-toggle="modal" data-target="#staticBackdrop">Tambah Data</a>
            </div>
            <table class="table table-responsive text-center" id="kurir" style="width:100%">
                <thead>
                    <tr>
                        <th width="1%" style="text-align: center" class="sortable">No</th>
                        <th style="text-align: center" class="sortable">Nama</th>
                        <th style="text-align: center" class="sortable">Email</th>
                        <th style="text-align: center" class="sortable">No Polisi</th>
                        <th style="text-align: center" class="sortable">Level</th>
                        <th style="text-align: center" class="sortable">Status</th>
                        <th style="text-align: center"> Aksi</th> 
                    </tr>
                </thead>
                <?php $no = 0;
                foreach ($data as $k) :  $no++; ?>
                    <tr>
                        <td class="text-truncate"><?= $no; ?></td>
                        <td class="text-truncate"><?= $k->first_name.' '.$k->last_name; ?></td>
                        <td class="text-truncate"><?= $k->mail ?></td>
                        <td class="text-truncate"><?= isset($k->nopol) ? strtoupper($k->nopol) : '-' ?></td>
                        <td class="text-truncate"><?= ucfirst($k->level); ?></td>
                        <td class="text-truncate"><?= ucfirst($k->status); ?></td>
                        <td> 
                            <a href="#" class="lable-tag tag-success" data-toggle="modal" data-target="#edit<?=$k->id?>">Edit</a>
                            <a onclick="return confirm('apakah anda yakin ? ')" href="<?=base_url('UsersController/remove/'.$k->id)?>" class="lable-tag tag-success" >Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<div class="modal_editData"></div>
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
                                <label class="control-label">Nama Depan</label>
                                <input  required type="text" class="form-control"  name="namadepan" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Nama Belakang</label>
                                <input   type="text" class="form-control"  name="namabelakang" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Email</label>
                                <input   type="email" required="" class="form-control"  name="mail" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Jenis Kelamin</label>
                                <select name="gender" required class="form-control" required="" style="height: 40px">
                                    <option value="1">Laki - Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">No Polisi</label>
                                <input  required type="text" class="form-control" name="nopol" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Status</label>
                                <select name="status" required class="form-control" required="" style="height: 40px">
                                    <option value="aktif">Aktif</option>
                                    <option value="nonaktif">Nonaktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Tanggal Lahir</label>
                                <input   type="date" required="" class="form-control"  name="tanggal" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Level</label>
                                <select name="level" required class="form-control" required="" style="height: 40px">
                                    <option value="admin">Admin</option>
                                    <option value="kurir">Kurir</option>
                                </select>
                            </div>
                        </div>

                        
                        <div class="col-md-12">
                            <p style="font-weight: bold;" class="small">Note : Password login berasal dari tanggal lahir dengan format 'dmY'. Contoh : 01012021</p>
                        </div>
                        <div class="col-md-12">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal addData-->
<?php  foreach ($data as $k) :  ?>
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
                    <form action="<?= base_url('UsersController/createOrupdate/'.$k->id); ?>" method="POST">

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Nama Depan</label>
                                <input  required type="text" class="form-control" value="<?=$k->first_name?>" name="namadepan" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Nama Belakang</label>
                                <input   type="text" class="form-control" value="<?=$k->last_name?>" name="namabelakang" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Email</label>
                                <input   type="email" required="" class="form-control" value="<?=$k->mail?>"  name="mail" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Jenis Kelamin</label>
                                <select name="gender" required class="form-control" required="" style="height: 40px">
                                    <option <?php if($k->gender == 1) {echo 'selected';}?> value="1">Laki - Laki</option>
                                    <option <?php if($k->gender == 2) {echo 'selected';}?> value="2">Perempuan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">No Polisi</label>
                                <input  required type="text"  value="<?=$k->nopol?>" class="form-control" name="nopol" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Status</label>
                                <select name="status" required class="form-control" required="" style="height: 40px">
                                    <option <?php if($k->status == 'aktif') {echo 'selected';}?> value="aktif">Aktif</option>
                                    <option <?php if($k->status == 'nonaktif') {echo 'selected';}?> value="nonaktif">Nonaktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Tanggal Lahir</label>
                                <input   type="date" value="<?=$k->birthday?>" required="" class="form-control"  name="tanggal" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group has-feedback">
                                <label class="control-label">Level</label>
                                <select name="level" required class="form-control" required="" style="height: 40px">
                                    <option <?php if($k->level == 'admin') {echo 'selected';}?> value="admin">Admin</option>
                                    <option <?php if($k->level == 'kurir') {echo 'selected';}?> value="kurir">Kurir</option>
                                </select>
                            </div>
                        </div>

                        
                        <div class="col-md-12">
                            <p style="font-weight: bold;" class="small">Note : Password login berasal dari tanggal lahir dengan format 'dmY'. Contoh : 01012021</p>
                        </div>
                        <div class="col-md-12">
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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

