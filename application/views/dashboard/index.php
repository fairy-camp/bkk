  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header pb-0">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-sm-6">
                      <h1 class="m-0 text-dark">Dashboard</h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item active"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <!-- Small boxes (Stat box) -->
              <form action="<?= base_url('dashboard/table') ?>" method="post">
                  <div class="row elevation-2 my-4" style="background-color: rgb(255, 255, 255); border-radius: 20px;">
                      <div class="col-sm-12 text-center">
                          <p class="text-bold mb-0 mt-3" style="font-size: 20pt">Grafik Alumni</p>
                      </div>
                      <div class="card-body col-sm-12">
                          <p class="text-bold">Berdasarkan Tahun Lulus</p>
                          <div class="chart">
                              <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                          </div>
                      </div>
                      <div class="card-body col-sm-6">
                          <p class="text-bold">Berdasarkan Jurusan</p>
                          <div class="chart">
                              <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                          </div>
                      </div>
                      <div class="card-body col-sm-3">
                          <p class="text-bold">Berdasarkan Status</p>
                          <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>
                      <div class="card-body col-sm-3">
                          <p class="text-bold">Berdasarkan Jenis Kelamin</p>
                          <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-lg-3 col-6 mt-5">
                          <!-- small box -->
                          <div class="small-box bg-primary">
                              <div class="inner">
                                  <h3 style="font-size: 36pt"><?= $alumni; ?></h3>

                                  <p class="mt-1 mb-0">Data Alumni yang sudah masuk</p>
                              </div>
                              <div class="icon">
                                  <i style="padding-left: 18px" class="circle elevation-2 fas fa-users"></i>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-6 mt-5">
                          <!-- small box -->
                          <div class="small-box bg-maroon">
                              <div class="inner">
                                  <h3 style="font-size: 36pt"><?= $bekerja ?></h3>

                                  <p class="mt-1 mb-0">Data Alumni yang bekerja</p>
                              </div>
                              <div class="icon">
                                  <i style="padding-left: 28px" class="circle elevation-2 fas fa-briefcase"></i>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-6 mt-5">
                          <!-- small box -->
                          <div class="small-box bg-teal">
                              <div class="inner">
                                  <h3 style="font-size: 36pt"><?= $kuliah ?></h3>

                                  <p class="mt-1 mb-0">Data Alumni yang kuliah</p>
                              </div>
                              <div class="icon">
                                  <i style="padding-left: 32px" class="circle elevation-2 fas fa-building"></i>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-6 mt-5">
                          <!-- small box -->
                          <div class="small-box bg-orange">
                              <div class="inner">
                                  <h3 style="font-size: 36pt"><?= $wirausaha ?></h3>

                                  <p class="mt-1 mb-0">Data Alumni yang Wirausaha</p>
                              </div>
                              <div class="icon">
                                  <i style="padding-left: 22px; font-size: 65px" class="circle elevation-2 fas fa-warehouse"></i>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-6 mt-5">
                          <!-- small box -->
                          <div class="small-box bg-secondary">
                              <div class="inner">
                                  <h3 style="font-size: 36pt"><?= $xbekerja ?></h3>

                                  <p class="mt-1 mb-0">Data Alumni yang belum bekerja</p>
                              </div>
                              <div class="icon">
                                  <i style="padding-left: 22px" class="circle elevation-2 fas fa-home"></i>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-6 mt-5">
                          <!-- small box -->
                          <div class="small-box bg-purple">
                              <div class="inner">
                                  <h3 style="font-size: 36pt"><?= $tkj ?></h3>

                                  <p class="mt-1 mb-0">Data Alumni TKJ</p>
                              </div>
                              <div class="icon">
                                  <i style="padding-left: 18px" class="circle elevation-2 fas fa-network-wired"></i>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-6 mt-5">
                          <!-- small box -->
                          <div class="small-box bg-danger">
                              <div class="inner">
                                  <h3 style="font-size: 36pt"><?= $rpl ?></h3>

                                  <p class="mt-1 mb-0">Data Alumni RPL</p>
                              </div>
                              <div class="icon">
                                  <i style="padding-left: 18px" class="circle elevation-2 fas fa-code"></i>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-6 mt-5">
                          <!-- small box -->
                          <div class="small-box bg-warning">
                              <div class="inner">
                                  <h3 style="font-size: 36pt"><?= $tb ?></h3>

                                  <p class="mt-1 mb-0">Data Alumni TB</p>
                              </div>
                              <div class="icon">
                                  <i style="padding-left: 30px" class="circle elevation-2 fas fa-cut"></i>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-6 mt-5">
                          <!-- small box -->
                          <div class="small-box bg-info">
                              <div class="inner">
                                  <h3 style="font-size: 36pt"><?= $tkro ?></h3>

                                  <p class="mt-1 mb-0">Data Alumni TKRO</p>
                              </div>
                              <div class="icon">
                                  <i style="padding-left: 28px" class="circle elevation-2 fas fa-car"></i>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-3 col-6 mt-5">
                          <!-- small box -->
                          <div class="small-box bg-success">
                              <div class="inner">
                                  <h3 style="font-size: 36pt"><?= $tbsm ?></h3>

                                  <p class="mt-1 mb-0">Data Alumni TBSM</p>
                              </div>
                              <div class="icon">
                                  <i style="padding-left: 18px" class="circle elevation-2 fas fa-motorcycle"></i>
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </section>
  </div>