<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tabel Data Alumni</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="<?= base_url('dashboard/table') ?>">Table Data Alumni</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>" data-data="Alumni"></div>
        <div class="row">
            <div class="col-sm-12">
                <div class="row mb-2">
                    <div class="col-sm-12 justify-content-end">
                        <label>Filter Berdasarkan :</label>
                    </div>
                    <div class="col-sm-12 col-md-4 my-1">
                        <select class="custom-select" name="jurusanfilter" id="jurusanfilter">
                            <option value="">Pilih Jurusan</option>
                            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Tata Busana">Tata Busana</option>
                            <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                            <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-4 my-1">
                        <select class="custom-select" name="statusfilter" id="statusfilter">
                            <option value="">Pilih Status</option>
                            <option value="Bekerja">Bekerja</option>
                            <option value="Wirausaha">Wirausaha</option>
                            <option value="Kuliah">Kuliah</option>
                            <option value="Belum Kerja">Belum Kerja</option>
                        </select>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-hover text-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Tahun Lulus</th>
                                    <th>Status</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($alumni as $alm) : ?>
                                    <tr>
                                        <td><?= ++$start; ?></td>
                                        <td><?= $alm['nama_alumni'] ?></td>
                                        <td><?= $alm['jurusan'] ?></td>
                                        <td><?= $alm['tahun_lulus'] ?></td>
                                        <td><?= $alm['keg_set_lulus'] ?></td>
                                        <td>
                                            <a href="<?= base_url('dashboard/detail/') . $alm['id'] ?>" class="btn btn-info detail"><i class="fas fa-eye"></i></a>
                                            <a href="<?= base_url('dashboard/edit/') . $alm['id'] ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>
                                            <a href="<?= base_url('dashboard/hapus/') . $alm['id'] ?>" class="btn btn-danger hapus"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                     <!--/.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>