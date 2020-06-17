<section id="page-account-settings">
    <div class="row">
        <!-- left menu section -->
        <div class="col-md-3 mb-2 mb-md-0">
            <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                <li class="nav-item">
                    <a class="nav-link d-flex py-75 active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                        <i class="feather icon-globe mr-50 font-medium-3"></i>
                        Biodata
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex py-75" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                        <i class="feather icon-lock mr-50 font-medium-3"></i>
                        Ubah Password
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex py-75" id="account-pill-info" data-toggle="pill" href="#account-vertical-info" aria-expanded="false">
                        <i class="feather icon-info mr-50 font-medium-3"></i>
                        Pertanyaan Keamanan
                    </a>
                </li>
            </ul>
        </div>
        <!-- right content section -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                <div class="media">
                                    <a href="javascript: void(0);">
                                        <img src="<?= base_url(); ?>/app-assets/images/portrait/small/avatar-s-12.jpg" class="rounded mr-75" alt="profile image" height="64" width="64">
                                    </a>
                                    <div class="media-body mt-75">
                                        <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                            <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="account-upload">Ubah Foto Profile</label>
                                            <input type="file" id="account-upload" hidden>
                                            <button class="btn btn-sm btn-outline-warning ml-50">Reset</button>
                                        </div>
                                        <p class="text-muted ml-75 mt-50"><small>Menjadi anggota terhitung mulai tanggal: 23 Agustus 1997</small></p>
                                    </div>
                                </div>
                                <hr>
                                <form>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-username">Username</label>
                                                    <input type="text" class="form-control" id="account-username" placeholder="Username" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-name">Nama</label>
                                                    <input type="text" class="form-control" id="account-name" placeholder="Nama Lengkap" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-e-mail">E-mail</label>
                                                    <input type="email" class="form-control" id="account-e-mail" placeholder="Email" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-e-mail">No. Telepon</label>
                                                    <input type="tel" class="form-control" id="account-tel" placeholder="Nomor Telepon / Handphone" value="" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="account-company">Company</label>
                                                <input type="text" class="form-control" id="account-company" placeholder="Company name">
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                changes</button>
                                            <button type="reset" class="btn btn-outline-warning">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade " id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                <form>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-old-password">Password Lama</label>
                                                    <input type="password" name="old-password" class="form-control" id="account-old-password" required placeholder="Password Lama">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-new-password">Password Baru</label>
                                                    <input type="password" name="password" id="account-new-password" class="form-control" placeholder="Password Baru" required minlength="6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-retype-new-password">Konfirmasi Password Baru</label>
                                                    <input type="password" name="con-password" class="form-control" required id="account-retype-new-password" placeholder="Password Baru" minlength="6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Update</button>
                                            <button type="reset" class="btn btn-outline-warning">Batal</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="account-vertical-info" role="tabpanel" aria-labelledby="account-pill-info" aria-expanded="false">
                              <form>
                                  <div class="row">
                                      <div class="col-12">
                                        <div class="form-group">
                                            <label for="password-icon">Masukkan Password Untuk Melihat</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="password" id="question-password" class="form-control" name="question-password" placeholder="Password">
                                                <div class="form-control-position">
                                                    <a class=""><i class="feather icon-lock"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
                                      <fieldset id="field-pertanyaan-keamanan" style="display:none;">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-new-password">Pertanyaan Keamanan</label>
                                                    <select required class="select2 form-control" id="select-pertanyaan" name="pertanyaan-keamanan">
                                                        <option value="square">Square</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <div class="controls">
                                                    <label for="account-retype-new-password">Jawaban Anda</label>
                                                    <input type="text" name="con-password" class="form-control" required id="account-retype-new-password" placeholder="Jawaban Anda">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                          <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Update</button>
                                          <button type="reset" class="btn btn-outline-warning">Batal</button>
                                        </div>
                                      </fieldset>
                                  </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
  $('#judul-halaman').text('Pengaturan Akun');

  $(document).ready(function(){

  })
</script>
