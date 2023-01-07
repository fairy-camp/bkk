<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container">
        <section class="content-header">
            <h1>Export Laporan</h1>
            <hr>
        </section>

        <form action="<?= base_url('report/export') ?>" method="post">
            <section class="filter">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header row">
                                    <div class="col-sm-12">
                                    <label>Filter Berdasarkan :</label>
                                    </div>
                                    <div class="col-sm-12 col-md-6 my-1">
                                    <select class="custom-select mx-1 float-right" name="jurusan" id="jurusan">
                                        <option value="" selected>Pilih Jurusan</option>
                                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                        <option value="Tata Busana">Tata Busana</option>
                                        <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                                        <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                                    </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 my-1">
                                    <select class="custom-select mx-1 float-right" name="status" id="status">
                                        <option value="" selected>Pilih Status</option>
                                        <option value="Bekerja">Bekerja</option>
                                        <option value="Wirausaha">Wirausaha</option>
                                        <option value="Kuliah">Kuliah</option>
                                        <option value="Belum Kerja">Belum Kerja</option>
                                    </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="col-12 d-flex mb-3">
                            <div class="col-sm-8 col-md-4">
                                <input class="btn btn-success w-100" type="submit" name="excel" value="Export Excel">
                            </div>
                            <div class="col-sm-8 col-md-4">
                                <input class="btn btn-warning w-100" type="submit" name="pdf" value="Export PDF">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->