<div class="row">
    <div class="col-md-12">
        <div class="chart-box">
            <table class="table table-responsive" id="pengirim_penerima" style="width:100%">
                <thead>
                    <tr>
                        <th class="sortable">No</th>
                        <th class="sortable">No. Resi</th>
                        <th class="sortable">Pengirim</th>
                        <th class="sortable">Penerima</th>
                        <th class="sortable">Tanggal</th>
                        <th class="sortable">Total</th>
                        <th class="sortable">Berat Paket</th>
                        <th class="sortable">Jumlah Paket</th>
                        <th class="sortable">Layanan</th>
                        <th class="sortable">Kurir</th>
                        <th> Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0;
                    foreach ($this->db->query("SELECT manifest.id, kurir.nama, kurir.nopol, manifest.cabang_asal, manifest.cabang_tujuan, invoice.resi, core.id_pengirim, core.id_penerima, core.jumlah_paket, core.berat, core.tarif_total, core.date, core.pengambilan, daftar_paket.nama_paket FROM manifest INNER JOIN manifest2 ON manifest.id = manifest2.id INNER JOIN kurir ON manifest.id_kurir = kurir.id INNER JOIN core ON manifest2.id_core = core.id INNER JOIN invoice ON core.id = invoice.id_core INNER JOIN daftar_paket ON core.jenis_layanan = daftar_paket.id")->result() as $core) :  $no++; ?>
                        <tr>
                            <td class="text-truncate"><?= $no; ?></td>
                            <td class="text-truncate"><?= $core->resi; ?></td>
                            <td class="text-truncate"><?php
                                                        $this->db->where('status', 'pengirim');
                                                        $this->db->where('id', $core->id_pengirim);
                                                        echo $this->db->get('pengirim_penerima')->row()->nama; ?></td>
                            <td class="text-truncate"><?php
                                                        $this->db->where('status', 'penerima');
                                                        $this->db->where('id', $core->id_penerima);
                                                        echo $this->db->get('pengirim_penerima')->row()->nama; ?></td>

                            <td class="text-truncate"><?= $core->date; ?></td>
                            <td class="text-truncate"><?= $core->tarif_total; ?></td>
                            <td class="text-truncate"><?= $core->berat; ?></td>
                            <td class="text-truncate"><?= $core->jumlah_paket; ?></td>
                            <td class="text-truncate"><?= $core->nama_paket; ?></td>
                            <td class="text-truncate"><?= $core->nama; ?></td>
                            <td>
                                <a href="<?= base_url('PengantaranController/index'); ?>" target="_blank" class="lable-tag tag-success"">Received</a>
                                <a href=" <?= base_url('PengantaranController/index'); ?>" target="_blank" class="lable-tag tag-success"">Return</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>