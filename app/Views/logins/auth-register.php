<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-xl-8 col-10 d-flex justify-content-center">
                    <div class="card bg-authentication rounded-0 mb-0">
                        <div class="row m-0">
                            <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                <img src="<?= base_url(); ?>/app-assets/images/pages/register.jpg" alt="branding logo">
                            </div>
                            <div class="col-lg-6 col-12 p-0">
                                <div class="card rounded-0 mb-0 p-2">
                                    <div class="card-header pt-50 pb-1">
                                        <div class="card-title">
                                            <h4 class="mb-0">Daftar Akun</h4>
                                        </div>
                                    </div>
                                    <p class="px-2">Isi formulir berikut untuk mendaftarkan akun.</p>
                                    <div class="card-content">
                                        <div class="card-body pt-0">
                                            <form action="index.html">
                                                <div class="form-label-group">
                                                    <input type="text" id="inputName" name="nama" class="form-control" placeholder="Nama" required>
                                                    <label for="inputName">Nama</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required>
                                                    <label for="inputEmail">Email</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                                                    <label for="inputPassword">Password</label>
                                                </div>
                                                <div class="form-label-group">
                                                    <input type="password" id="inputConfPassword" name="password2" class="form-control" placeholder="Konfirmasi Password" required>
                                                    <label for="inputConfPassword">Konfirmasi Password</label>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <fieldset class="checkbox">
                                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                                                <input type="checkbox" checked>
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                                <span class=""> Saya menerima syarat dan ketentuannya.</span>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <a href="<?= base_url('auth/login'); ?>" class="btn btn-outline-primary float-left btn-inline mb-50">Kembali ke Login</a>
                                                <button type="submit" class="btn btn-primary float-right btn-inline mb-50">Daftar</a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->
