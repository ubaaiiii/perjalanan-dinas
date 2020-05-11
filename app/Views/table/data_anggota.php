<!-- Add rows table -->
<section id="add-row">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <button id="addRow" class="btn btn-primary mb-2" data-toggle="modal" data-backdrop="false" data-target="#backdrop">
                          <i class="feather icon-user-plus"></i>&nbsp; Tambah Anggota
                        </button>
                        <div class="table-responsive">
                            <table class="table add-rows" id="tabel-jenis-anggota">
                                <thead>
                                    <tr>
                                        <th>Column 1</th>
                                        <th>Column 2</th>
                                        <th>Column 3</th>
                                        <th>Column 4</th>
                                        <th>Column 5</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1.1</th>
                                        <th>1.2</th>
                                        <th>1.3</th>
                                        <th>1.4</th>
                                        <th>1.5</th>
                                    </tr>
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
                <h4 class="modal-title" id="myModalLabel4">Data Anggota Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Nama: </label>
                    <div class="form-group">
                        <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control text-capitalize">
                    </div>
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
  $('#judul-halaman').text('Tabel Data Anggota');

  $(document).ready(function(){

  })
</script>
