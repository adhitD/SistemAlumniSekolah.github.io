<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Alumni Sekolah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/index.css">
</head>
<body class="bg-light">
    <!-- <header class="bg-teal text-primary py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img src="./assets/img/trng3.jpeg" alt="Profile picture" class="rounded-circle mr-3" width="40" height="40">
                <span>Sistem Informasi Alumni Sekolah</span>
            </div>
            <nav class="d-flex">
                <a href="#" class="text-primary mx-2">Daftar kegiatan</a>
                <a href="#" class="text-primary mx-2">Informasi lowongan</a>
                <a href="#" class="text-primary mx-2">Tentang</a>
                <a href="#" class="text-primary mx-2"><i class="fas fa-user-circle"></i></a>
            </nav>
        </div>
    </header> -->
    <?php
    require './layouts/navbar.php';
    ?>
    <section class="header-image position-relative mb-20" id="beranda">
        <div class="header-text">
            <h1>Selamat datang</h1>
            <h2>Website Alumni Sekolah</h2>
        </div>
</section>

    <section class="py-5" id="loker">
        <div class="container text-center">
            <h2 class="text-teal navbar navbar-brand mb-3">Informasi Lowongan Kerja</h2>
            <div class="row">
                <div class="col-md-4 mb-5 ">
                    <div class="card p-4 shadow-sm">
                        <h3 class="card-title">Lowongan Kerja</h3>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-3">
                                <div class="bg-primary mr-3" style="width: 50px; height: 50px;"></div>
                                <div>
                                    <p class="mb-0">Nama perusahaan</p>
                                    <small class="text-muted">11 November 2024</small>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <div class="bg-primary mr-3" style="width: 50px; height: 50px;"></div>
                                <div>
                                    <p class="mb-0">Nama perusahaan</p>
                                    <small class="text-muted">11 November 2024</small>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <div class="bg-primary mr-3" style="width: 50px; height: 50px;"></div>
                                <div>
                                    <p class="mb-0">Nama perusahaan</p>
                                    <small class="text-muted">11 November 2024</small>
                                </div>
                            </li>
                        </ul>
                        <button class="btn btn-warning text-white">Selengkapnya</button>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-4 shadow-sm">
                        <h3 class="card-title">Lowongan Magang</h3>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-3">
                                <div class="bg-primary mr-3" style="width: 50px; height: 50px;"></div>
                                <div>
                                    <p class="mb-0">Nama perusahaan</p>
                                    <small class="text-muted">11 November 2024</small>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <div class="bg-primary mr-3" style="width: 50px; height: 50px;"></div>
                                <div>
                                    <p class="mb-0">Nama perusahaan</p>
                                    <small class="text-muted">11 November 2024</small>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <div class="bg-primary mr-3" style="width: 50px; height: 50px;"></div>
                                <div>
                                    <p class="mb-0">Nama perusahaan</p>
                                    <small class="text-muted">11 November 2024</small>
                                </div>
                            </li>
                        </ul>
                        <button class="btn btn-warning text-white">Selengkapnya</button>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-4 shadow-sm">
                        <h3 class="card-title">Lowongan Kerja</h3>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-3">
                                <div class="bg-primary mr-3" style="width: 50px; height: 50px;"></div>
                                <div>
                                    <p class="mb-0">Nama perusahaan</p>
                                    <small class="text-muted">11 November 2024</small>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <div class="bg-primary mr-3" style="width: 50px; height: 50px;"></div>
                                <div>
                                    <p class="mb-0">Nama perusahaan</p>
                                    <small class="text-muted">11 November 2024</small>
                                </div>
                            </li>
                            <li class="d-flex align-items-center mb-3">
                                <div class="bg-primary mr-3" style="width: 50px; height: 50px;"></div>
                                <div>
                                    <p class="mb-0">Nama perusahaan</p>
                                    <small class="text-muted">11 November 2024</small>
                                </div>
                            </li>
                        </ul>
                        <button class="btn btn-warning text-white">Selengkapnya</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" id="kegiatan">
        <div class="container text-center">
            <h2 class="text-warning navbar navbar-brand mb-5">Kegiatan/acara Reuni</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card p-4 shadow-sm">
                        <img src="./assets/img/iki.jpeg" alt="Job Fair 2024 poster" class="card-img-top mb-3">
                        <p class="text-muted mb-2">20 November 2024</p>
                        <h3 class="card-title">Lorem ipsum dolor sit amet.</h3>
                        <p class="card-text text-truncate">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae ea at molestias? Natus quasi nisi blanditiis perferendis aperiam eius fuga aliquam quia. Unde repellat deleniti cum ad. Enim temporibus culpa corrupti porro sed quo ratione vero quis, facere expedita eos ipsam eveniet omnis quasi? Facere dolorem laudantium repudiandae deleniti in. 
                        </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-4 shadow-sm">
                        <img src="  ./assets/img/iki.jpeg" alt="Photo session for alumni" class="card-img-top mb-3">
                        <p class="text-muted mb-2">15 Januari 2025</p>
                        <h3 class="card-title">Lorem ipsum dolor sit amet.</h3>
                        <p class="card-text text-truncate">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui temporibus modi iusto reprehenderit corporis eius autem voluptates enim cumque beatae, necessitatibus aut earum! Quisquam quia sed dolorum dolore molestias facilis dolorem, ad laboriosam assumenda! Quos pariatur fugiat odio. Natus error ea quis reiciendis, cum culpa nihil in ipsum odio et.
                        </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card p-4 shadow-sm">
                        <img src="./assets/img/iki.jpeg" alt="Job Fair 2024 poster" class="card-img-top mb-3">
                        <p class="text-muted mb-2">20 November 2024</p>
                        <h3 class="card-title">Lorem ipsum dolor sit amet.</h3>
                        <p class="card-text text-truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti temporibus sint a asperiores quia iste aliquam id? Doloremque, corrupti perspiciatis iure hic eveniet similique quis. Culpa ducimus expedita optio at quidem dolorum blanditiis dicta quia dolore doloremque cumque laborum animi voluptate illo aperiam, veritatis quod sunt illum nesciunt, quos ratione. 
                        </div>
                        
                      </div>
            </div>
        </div>
    </section>

    <section class="py-5 mt-10 bg-white" id="tentang">
        <div class="container text-center">
            <h2 class="text-danger mb-4 navbar-brand">Tentang Website Alumni</h2>
            <p class="text-muted mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            <button class="btn btn-warning text-white">Selengkapnya</button>
        </div>
    </section>
   
    <footer class="bg-teal text-white py-4">
        <div class="container text-center">
            <p>© 2024 - Sistem Informasi Alumni Sekolah</p>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>