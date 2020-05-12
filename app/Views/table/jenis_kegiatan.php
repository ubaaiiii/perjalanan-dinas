<!-- Add rows table -->
<section id="add-row">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <button id="addRow" class="btn btn-primary mb-2" data-toggle="modal" data-backdrop="false" data-target="#backdrop">
                          <i class="feather icon-plus-circle"></i>&nbsp; Tambah Jenis Kegiatan
                        </button>
                        <div class="table-responsive">
                            <table class="table" id="tabel-jenis-anggota">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Kegiatan</th>
                                        <th>Jenis Kegiatan</th>
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

<div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel4">Jenis Kegiatan Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#">
                <div class="modal-body"><br>
                  <fieldset class="form-label-group">
                      <input type="text" class="form-control text-uppercase" name="kode-kegiatan" id="kode-kegiatan" maxlength="10" placeholder="Kode Kegiatan">
                      <label for="kode-kegiatan">Kode Kegiatan :</label>
                  </fieldset>
                  <fieldset class="form-label-group">
                      <input type="text" class="form-control text-capitalize" name="jenis-kegiatan" id="jenis-kegiatan" maxlength="25" placeholder="Jenis Kegiatan">
                      <label for="jenis-kegiatan">Jenis Kegiatan :</label>
                  </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button hidden type="button" id="btn-update" class="btn btn-success">Update</button>
                    <button type="reset" id="btn-update" class="btn btn-warning">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
  $('#judul-halaman').text('Tabel Jenis Kegiatan');

  $(document).ready(function(){
    $('#kode-kegiatan').on('keypress',function(e) {
      if(e.which == 32) {
          e.preventDefault();
      }
    });

    $('#tabel-jenis-anggota').DataTable();
  })
</script>
