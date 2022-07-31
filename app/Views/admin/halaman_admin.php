<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Dashboard Administrator</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('/public/Assets/css/style.css');?>">
    <link rel="stylesheet" href="<?=base_url('/css/style.css');?>">

    <!-- Iconsax -->
    <script src="//glenthemes.github.io/iconsax/geticons.js"></script>
    <link href="//glenthemes.github.io/iconsax/style.css" rel="stylesheet">

    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha"></script> -->
</head>

  <body>
    <!-- header -->
    <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0">
      <div class="navbar-brand col-md-3 col-lg-2 bg-light me-0">
        <img src="<?=base_url('/public/Assets/img/icon-web.png');?>" alt="">  
        <h1>TASKUY</h1>
      </div>
      <div class="navbar-brand col-md-3 bg-white col-lg-7 me-0 justify-content-between">
        <div class="d-block">
          <h2>Selamat pagi, Andi <img src="<?=base_url('/public/Assets/img/icon-hai.png');?>" alt="" class="icon-hai">  </h2>
          <h4>Semangat bekerja dan selalu jaga kesehatan ya !</h4>
        </div>
        <div class="d-flex align-items-center icon-header">
          <i class="iconsax" icon-name="search-normal-2"></i>
          <img src="<?=base_url('/public/Assets/img/icon-notif.svg');?>" alt="">  
        </div>
      </div>
      <div class="navbar-brand profile col-md-3 col-lg-3 bg-light me-0">
        <div class="d-flex align-items-center">
          <img src="<?=base_url('/public/Assets/img/avatar-man-1.png');?>" alt="" class="icon">
          <div class="d-block">
            <h5>Andi Saputra</h5>
            <p>Administrator</p>
          </div>
        </div>
        <i class="iconsax" icon-name="chevron-down"></i>
      </div>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </header>
    
    <!-- main content -->
    <main class="container-fluid">
      <div class="row justify-content-center">
        <!-- left -->
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky">
            <ul class="nav flex-column ps-3">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <img src="<?=base_url('/public/Assets/img/icon-grid-active.svg');?>" alt="" class="icon">
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="iconsax" icon-name="document-copy"></i>Presensi
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="iconsax" icon-name="folder-2"></i>Monitoring proyek
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="iconsax" icon-name="group"></i>Data Karyawan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="iconsax" icon-name="messages-1"></i>Chat
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="iconsax" icon-name="setting-1"></i>Setting
                </a>
              </li>
            </ul>

            <ul class="nav flex-column ps-3 nav-end">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <i class="iconsax" icon-name="document-copy"></i>Bantuan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/');?>">
                  <i class="iconsax" icon-name="document-copy"></i>Logout
                </a>
              </li>
            </ul>
          </div>
        </nav>
    
        <!-- center -->
        <div class="main-content col-md-6 col-lg-7">
          <div class="mb-4">
            <h3 class="title">Status Hadir</h3>
            <div class="row">
              <div class="col-lg-4">
                <div class="card status primary">
                  <div class="group-text">
                    <div class="icon-rounded">
                      <i class="iconsax" icon-name="clipboard-text-1"></i>
                    </div>
                    <div class="d-block">
                      <h4>Staff WFO</h4>
                      <p>90 Karyawan</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card status">
                  <div class="group-text">
                    <div class="icon-rounded">
                      <i class="iconsax" icon-name="clipboard-text-1"></i>
                    </div>
                    <div class="d-block">
                      <h4>Staff WFO</h4>
                      <p>90 Karyawan</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card status">
                  <div class="group-text">
                    <div class="icon-rounded">
                      <i class="iconsax" icon-name="clipboard-text-1"></i>
                    </div>
                    <div class="d-block">
                      <h4>Staff WFO</h4>
                      <p>90 Karyawan</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-4">
            <h3 class="title">Proyek Team</h3>
            <div class="row">
              <div class="col-lg-4">
                <div class="card progress-task">
                  <div class="group-text">
                    <div class="icon-ellipse">
                      <i class="iconsax" icon-name="globe"></i>
                    </div>
                    <div class="d-block">
                      <h4>Setting Network</h4>
                      <p>Team Network</p>
                    </div>
                  </div>
                  <div class="group-progress">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 20%" aria-valuenow="20%" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>20%</span>
                  </div>
                  <div class="end-card">
                    <img src="<?=base_url('/public/Assets/img/team-group.png');?>" alt="">  
                    <div class="badge green">
                      <img src="<?=base_url('/public/Assets/img/icon-flag-g.svg');?>" alt="">  
                      2 Hari Lagi
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card progress-task">
                  <div class="group-text">
                    <div class="icon-ellipse">
                      <i class="iconsax" icon-name="nut"></i>
                    </div>
                    <div class="d-block">
                      <h4>Error Present Data</h4>
                      <p>Fixing Bug</p>
                    </div>
                  </div>
                  <div class="group-progress">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 50%" aria-valuenow="50%" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>50%</span>
                  </div>
                  <div class="end-card">
                    <img src="<?=base_url('/public/Assets/img/team-group.png');?>" alt="">  
                    <div class="badge green">
                      <img src="<?=base_url('/public/Assets/img/icon-flag-g.svg');?>" alt="">  
                      4 Hari Lagi
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card progress-task">
                  <div class="group-text">
                    <div class="icon-ellipse">
                      <i class="iconsax" icon-name="lock-1"></i>
                    </div>
                    <div class="d-block">
                      <h4>Security Login</h4>
                      <p>Maintenance</p>
                    </div>
                  </div>
                  <div class="group-progress">
                    <div class="progress">
                      <div class="progress-bar" role="progressbar" aria-label="Basic example" style="width: 70%" aria-valuenow="70%" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>70%</span>
                  </div>
                  <div class="end-card">
                    <img src="<?=base_url('/public/Assets/img/team-group.png');?>" alt="">  
                    <div class="badge red">
                      <img src="<?=base_url('/public/Assets/img/icon-flag.svg');?>" alt="">  
                      2 Hari Lagi
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="">
            <h3 class="title">Task Hari ini</h3>
              <div class="col-lg-12">
                <div class="card today-task">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                      <div class="num">1.</div>
                      <h1>Monitoring presensi karyawan harian.</h1>
                    </div>
                    <div class="badge">
                      Estimasi 2 jam
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                 <div class="card today-task">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                      <div class="num">2.</div>
                      <h1>Membuat rekap keterlambatan  dan denda untuk karyawan yang terlambat absensi.</h1>
                    </div>
                    <div class="badge">
                      Estimasi 4 jam
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                 <div class="card today-task">
                  <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                      <div class="num">3.</div>
                      <h1>Manajemen data karyawan terbaru.</h1>
                    </div>
                    <div class="badge">
                      Estimasi 2 jam
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

        <!-- right -->
        <div id="sidebarMenu" class="col-md-4 col-lg-3 d-md-block bg-light sidebar-right collapse">
          <div class="position-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <div class="text-center">
                  <h3 class="title">Statistik</h3>
                  <img src="<?=base_url('/public/Assets/img/chart-hr.png');?>" alt="">  
                </div>
              </li>
              <li class="nav-item mt-2 mb-4">
               <div class="calendar">
                  <div class="title">
                    <h2>Agustus 2022</h2>
                    <div class="group">
                      <button type="button">
                        <i class="iconsax" icon-name="chevron-left"></i>
                      </button>
                      <button type="button">
                        <i class="iconsax" icon-name="chevron-right"></i>
                      </button>
                    </div>
                  </div>
                  <div class="box">
                    <div class="row">
                      <div class="item-title">SUN</div>
                      <div class="item-title">MON</div>
                      <div class="item-title">TUE</div>
                      <div class="item-title">WED</div>
                      <div class="item-title">THU</div>
                      <div class="item-title">FRI</div>
                      <div class="item-title">SAT</div>
                    </div>
                    <div class="row">
                      <div class="item-box grey">31</div>
                      <div class="item-box now">1</div>
                      <div class="item-box">2</div>
                      <div class="item-box">3</div>
                      <div class="item-box">4</div>
                      <div class="item-box">5</div>
                      <div class="item-box">6</div>
                    </div>
                    <div class="row">
                      <div class="item-box">7</div>
                      <div class="item-box">8</div>
                      <div class="item-box">9</div>
                      <div class="item-box">10</div>
                      <div class="item-box">11</div>
                      <div class="item-box">12</div>
                      <div class="item-box">13</div>
                    </div>
                  </div>
               </div>
              </li>
              <li class="nav-item">
                <div class="agenda">
                  <div class="d-flex">
                    <i class="iconsax" icon-name="video-1"></i>
                    <div class="d-block ms-3">
                      <h3>Daily Scrum</h3>
                      <p>Offline Meeting</p>
                    </div>
                  </div>
                  <h3>09.00 WIB</h3>
                </div>
                <div class="agenda">
                  <div class="d-flex">
                    <i class="iconsax" icon-name="video-1"></i>
                    <div class="d-block ms-3">
                      <h3>Daily Scrum</h3>
                      <p>Offline Meeting</p>
                    </div>
                  </div>
                  <h3>09.00 WIB</h3>
                </div>
                <div class="agenda">
                  <div class="d-flex">
                    <i class="iconsax" icon-name="video-1"></i>
                    <div class="d-block ms-3">
                      <h3>Daily Scrum</h3>
                      <p>Offline Meeting</p>
                    </div>
                  </div>
                  <h3>09.00 WIB</h3>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </main>
    
  </body>
</html>
