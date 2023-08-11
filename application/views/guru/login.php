
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Login ustadz</title>

    <!-- General CSS Files -->
    <link rel="icon" href="<?= base_url('assets/') ?>img/logom.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/node_modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>stisla-assets/css/components.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>

</head>

<body>
    <div id="app">
        <section class="section">
		<div class="d-flex flex-wrap align-items-stretch justify-content-center">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <a href="<?= base_url('welcome') ?>"> <img src="<?= base_url('assets/') ?>/img/kiki.png" alt="logo" width="150" class=" mb-5 mt-2"></a>
                        <h4 class="text-dark font-weight-normal">Selamat datang di <span class="font-weight-bold">TPQ Muslimat Al-Quthubi</span>
                        </h4>
                        <p class="text-muted">Sebelum masuk ke halaman ustadz, anda harus login terlebih dahulu sebagai
                            ustadz. silahkan isi data dibawah untuk melanjutkan.</p>
                        <form method="post" action="<?= base_url('welcome/guru') ?>" class="needs-validation" novalidate="">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                <div class="invalid-feedback">
                                    Harap isi bidang email
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="d-block">
                                    <label for="password" class="control-label">Password</label>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                <div class="invalid-feedback">
                                    Harap isi bidang password
                                </div>
                            </div>
                            <br>
							<div class="form-group text-right">
							<button type="submit" class="btn btn-block btn-warning btn-lg btn-icon icon-right" tabindex="4" style="background-color: orange; color: white;">
								Masuk
							</button>
							<a class="navbar-brand logo_h" style=" color: orange;" href="<?= base_url('account/lupa_password') ?>">lupa password </a>
						</div>
                        </form>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Start Sweetalert Flashdata -->

    <!-- End Sweetalert -->

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url('assets/') ?>stisla-assets/js/stisla.js"></script>
    <!-- Template JS File -->
    <script src="<?= base_url('assets/') ?>stisla-assets/js/scripts.js"></script>
    <script src="<?= base_url('assets/') ?>stisla-assets/js/custom.js"></script>
    <!-- Page Specific JS File -->
</body>

</html>
