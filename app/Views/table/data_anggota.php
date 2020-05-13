<!-- Add rows table -->
<section id="add-row">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <button id="add-jenis-kegiatan" class="btn btn-primary mb-2" data-toggle="modal" data-backdrop="false" data-target="#backdrop">
                          <i class="feather icon-user-plus"></i>&nbsp; Tambah Anggota
                        </button>
                        <div class="table-responsive">
                            <table class="table" id="tabel-jenis-kegiatan">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Kegiatan</th>
                                        <th>Jenis Kegiatan</th>
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
<!--/ Add rows table -->

<div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="label-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="label-modal">Data Anggota Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-submit">
                <div class="modal-body"><br>
                  <input hidden type="text" class="form-control" name="kode-awal" id="kode-awal">
                  <input hidden type="text" class="form-control" name="tipe" value="save" id="tipe">
                  <fieldset class="form-label-group">
                      <input type="text" required class="form-control text-uppercase" name="id-anggota" id="id-anggota" maxlength="10" placeholder="ID Anggota">
                      <label for="kode-kegiatan">ID Anggota :</label>
                  </fieldset>
                  <fieldset class="form-label-group">
                      <input type="text" required class="form-control text-capitalize" name="jenis-kegiatan" id="jenis-kegiatan" maxlength="25" placeholder="Jenis Kegiatan">
                      <label for="jenis-kegiatan">Jenis Kegiatan :</label>
                  </fieldset>
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

<script src="<?= base_url(); ?>/app-assets/js/process/data_anggota.js"></script>
