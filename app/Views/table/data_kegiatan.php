<section id="statistics-card">
    <div class="row">
        <div class="col-xl-3 col-md-3 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-warning p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <i class="feather icon-check text-warning font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700">12k</h2>
                        <p class="mb-0 line-ellipsis">Disetujui Staf Deputi</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-3 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <i class="feather icon-check-circle text-info font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700">97.8k</h2>
                        <p class="mb-0 line-ellipsis">Disetujui Deputi</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-3 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-success p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <i class="feather icon-check-square text-success font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700">26.8</h2>
                        <p class="mb-0 line-ellipsis">Disetujui Gubernur</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-3 col-sm-6">
            <div class="card text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                            <div class="avatar-content">
                                <i class="feather icon-alert-triangle text-danger font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700">689</h2>
                        <p class="mb-0 line-ellipsis">Kegiatan Ditolak</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                                        <th>Dibuat Oleh</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <th>STDY/HELL/2020-05/001</th>
                                        <th>Study tour</th>
                                        <th>Going to Hell</th>
                                        <th>
                                          <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                            <li class="avatar pull-up avatar-lg">
                                                <img class="media-object rounded-circle" src="<?= base_url(); ?>/app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar" height="30" width="30">
                                            </li>
                                            &nbsp;Vinnie Mostowy
                                          </ul>
                                        </th>
                                        <th>
                                          <div class="badge badge-pill badge-light-primary mr-1 mb-1 text-uppercase block">Direktorat</div>
                                          <div class="progress progress-bar-primary progress-lg">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="20" aria-valuemax="100" style="width:25%"></div>
                                          </div>
                                        </th>
                                        <th>
                                          <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1 waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" data-original-title="Lihat Detail"><i class="feather icon-search"></i></button>
                                          <button type="button" class="btn btn-icon rounded-circle btn-outline-warning mr-1 mb-1 waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" data-original-title="Ubah"><i class="feather icon-edit"></i></button>
                                          <button type="button" class="btn btn-icon rounded-circle btn-outline-success mr-1 mb-1 waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" data-original-title="Setujui"><i class="feather icon-check"></i></button>
                                          <button type="button" class="btn btn-icon rounded-circle btn-outline-danger mr-1 mb-1 waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" data-original-title="Revisi"><i class="feather icon-rotate-ccw"></i></button>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <th>RAKERNAS/BDG/2020-04/010</th>
                                        <th>Rapat Kerja Nasional</th>
                                        <th>Bandung</th>
                                        <th>
                                          <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                            <li class="avatar pull-up avatar-lg">
                                                <img class="media-object rounded-circle" src="<?= base_url(); ?>/app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar" height="30" width="30">
                                            </li>
                                            &nbsp;Elicia Rieske
                                          </ul>
                                        </th>
                                        <th>
                                          <div class="badge badge-pill badge-light-primary mr-1 mb-1 text-uppercase block">Deputi</div>
                                          <div class="progress progress-bar-primary progress-lg">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="10" aria-valuemax="100" style="width:75%"></div>
                                          </div>
                                        </th>
                                        <th>
                                          <button type="button" class="btn btn-icon rounded-circle btn-outline-primary mr-1 mb-1 waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" data-original-title="Lihat Detail"><i class="feather icon-search"></i></button>
                                          <button type="button" class="btn btn-icon rounded-circle btn-outline-warning mr-1 mb-1 waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" data-original-title="Ubah"><i class="feather icon-edit"></i></button>
                                          <button type="button" class="btn btn-icon rounded-circle btn-outline-success mr-1 mb-1 waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" data-original-title="Setujui"><i class="feather icon-check"></i></button>
                                          <button type="button" class="btn btn-icon rounded-circle btn-outline-danger mr-1 mb-1 waves-effect waves-light" data-toggle="tooltip" data-placement="bottom" data-original-title="Revisi"><i class="feather icon-rotate-ccw"></i></button>
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
              <form class="steps-validation wizard-circle">
                  <!-- Step 1 -->
                  <h6><i class="step-icon feather icon-upload"></i> Upload SPT</h6>
                  <fieldset>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="firstName3">
                                      First Name
                                  </label>
                                  <input type="text" class="form-control required" id="firstName3" name="firstName">
                              </div>
                          </div>

                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="lastName3">
                                      Last Name
                                  </label>
                                  <input type="text" class="form-control required" id="lastName3" name="lastName">
                              </div>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="emailAddress5">
                                      Email
                                  </label>
                                  <input type="email" class="form-control required" id="emailAddress5" name="emailAddress">
                              </div>
                          </div>

                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="location">
                                      City
                                  </label>
                                  <select class="custom-select form-control" id="location" name="location">
                                      <option value="">New York</option>
                                      <option value="Amsterdam">Chicago</option>
                                      <option value="Berlin">San Francisco</option>
                                      <option value="Frankfurt">Boston</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                  </fieldset>

                  <!-- Step 2 -->
                  <h6><i class="step-icon feather icon-briefcase"></i> Step 2</h6>
                  <fieldset>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="proposalTitle3">
                                      Proposal Title
                                  </label>
                                  <input type="text" class="form-control required" id="proposalTitle3" name="proposalTitle">
                              </div>
                              <div class="form-group">
                                  <label for="jobTitle5">
                                      Job Title
                                  </label>
                                  <input type="text" class="form-control required" id="jobTitle5" name="jobTitle">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="shortDescription3">Short Description</label>
                                  <textarea name="shortDescription" id="shortDescription3" rows="4" class="form-control"></textarea>
                              </div>
                          </div>
                      </div>
                  </fieldset>

                  <!-- Step 3 -->
                  <h6><i class="step-icon feather icon-image"></i> Step 3</h6>
                  <fieldset>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="eventName3">
                                      Event Name
                                  </label>
                                  <input type="text" class="form-control required" id="eventName3" name="eventName">
                              </div>
                              <div class="form-group">
                                  <label for="eventStatus3">
                                      Event Status
                                  </label>
                                  <select class="custom-select form-control required" id="eventStatus3" name="eventStatus">
                                      <option value="Planning">Planning</option>
                                      <option value="In Progress">In Progress</option>
                                      <option value="Finished">Finished</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="eventLocation3">
                                      Event Location
                                  </label>
                                  <select class="custom-select form-control required" id="eventLocation3" name="eventStatus">
                                      <option value="Planning">New York</option>
                                      <option value="In Progress">Chicago</option>
                                      <option value="Finished">San Francisco</option>
                                      <option value="Finished">Boston</option>
                                  </select>
                              </div>
                              <div class="form-group d-flex align-items-center pt-md-2">
                                  <label class="mr-2">Requirements :</label>
                                  <div class="c-inputs-stacked">
                                      <div class="d-inline-block mr-2">
                                          <div class="vs-checkbox-con vs-checkbox-primary">
                                              <input type="checkbox" value="false">
                                              <span class="vs-checkbox">
                                                  <span class="vs-checkbox--check">
                                                      <i class="vs-icon feather icon-check"></i>
                                                  </span>
                                              </span>
                                              <span class="">Staffing</span>
                                          </div>
                                      </div>
                                      <div class="d-inline-block">
                                          <div class="vs-checkbox-con vs-checkbox-primary">
                                              <input type="checkbox" value="false">
                                              <span class="vs-checkbox">
                                                  <span class="vs-checkbox--check">
                                                      <i class="vs-icon feather icon-check"></i>
                                                  </span>
                                              </span>
                                              <span class="">Catering</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </fieldset>
                  <button type="reset" class="btn btn-default" id="btn-reset" hidden></button>
              </form>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-warning" data-dismiss="modal">Reset</button>
            </div>
        </div>
    </div>
</div>

<script>
  $('#judul-halaman').text('Tabel Data Kegiatan');

  $(document).ready(function(){

  })
</script>
