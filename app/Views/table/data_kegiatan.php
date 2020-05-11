<section id="add-row">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <button id="add-data-kegiatan" class="btn btn-primary mb-2" data-toggle="modal" data-backdrop="false" data-target="#backdrop">
                          <i class="feather icon-check-square"></i>&nbsp; Tambah Kegiatan
                        </button>
                        <div class="table-responsive">
                            <table class="table add-rows" id="tabel-jenis-anggota">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Kegiatan</th>
                                        <th>Jenis Kegiatan</th>
                                        <th>Lokasi Tujuan</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <th>KGT/JKT/2020-05/001</th>
                                        <th>Study tour</th>
                                        <th>Going to Hell</th>
                                        <th>
                                          <div class="badge badge-pill badge-light-primary mr-1 mb-1 text-uppercase block">Direktorat</div>
                                          <div class="progress progress-bar-primary progress-lg">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="20" aria-valuemax="100" style="width:20%"></div>
                                          </div>
                                        </th>
                                        <th>
                                          <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1 waves-effect waves-light"><i class="feather icon-search"></i></button>
                                          <button type="button" class="btn btn-icon rounded-circle btn-outline-warning mr-1 mb-1 waves-effect waves-light"><i class="feather icon-edit"></i></button>
                                          <button type="button" class="btn btn-icon rounded-circle btn-outline-success mr-1 mb-1 waves-effect waves-light"><i class="feather icon-check"></i></button>
                                        </th>
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

<div class="modal fade text-left" id="backdrop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-primary white">
                <h4 class="modal-title" id="myModalLabel4">Data Kegiatan Baru</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Candy oat cake topping topping chocolate cake. Icing pudding jelly beans I love chocolate carrot
                    cake wafer candy canes. Biscuit croissant fruitcake bonbon soufflé.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Accept</button>
            </div>
        </div>
    </div>
</div>

<script>
  $('#judul-halaman').text('Tabel Data Kegiatan');

  $(document).ready(function(){

  })
</script>
