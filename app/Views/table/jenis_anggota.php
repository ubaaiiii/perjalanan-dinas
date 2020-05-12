<section id="add-row">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <button id="add-jenis-anggota" class="btn btn-primary mb-2" data-toggle="modal" data-backdrop="false" data-target="#backdrop">
                          <i class="feather icon-user-plus"></i>&nbsp; Tambah Jenis Anggota
                        </button>
                        <div class="table-responsive">
                            <table class="table" id="tabel-jenis-anggota">
                                <thead>
                                    <tr>
                                        <th>No. </th>
                                        <th>Kode Jenis Anggota</th>
                                        <th>Jenis Anggota</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel4">Jenis Anggota Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-submit">
                <div class="modal-body">
                    <label>Kode Jenis Anggota: </label>
                    <div class="form-group">
                        <input hidden type="text" id="kode-awal" name="kode-awal" class="form-control text-uppercase">
                        <input hidden type="text" id="tipe" name="tipe" value="save" class="form-control">
                        <input type="text" required id="kode-jenis-anggota" name="kode-jenis-anggota" placeholder="Kode Jenis Anggota" class="form-control text-uppercase">
                    </div>
                    <label>Jenis Anggota: </label>
                    <div class="form-group">
                        <input type="text" required id="jenis-anggota" name="jenis-anggota" placeholder="Jenis Anggota" class="form-control text-capitalize">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btn-submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" id="btn-reset" class="btn btn-warning">Reset</button>
                    <button hidden type="button" id="btn-cancel" data-dismiss="modal" class="btn btn-warning">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url(); ?>/app-assets/js/process/jenis_anggota.js"></script>
