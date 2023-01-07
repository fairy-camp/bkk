<div class="preloader">
    <div class="loading">
        <i class="spinner-border text-primary text-center">
        <!-- <span class="sr-only">Loading...</span> -->
        </i>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg">
            <div class="card shadow mb-4">
                <div class="card-header text-white section-dark font-weight-bold text-center h4 mt-0">
                    Data Alumni
                </div>
                <div class="card-body">
                    <h4>Filter :</h4>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <select name="jurusan" class="form-control">
                                    <option disabled="" selected="">- Pilih Jurusan -</option>
                                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                    <option value="Tata Busana">Tata Busana</option>
                                    <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                                    <option value="Teknik Sepeda Motor">Teknik Sepeda Motor</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-2">
                                <select name="tahun_lulus" class="form-control">
                                    <option disabled="" selected="">- Pilih Tahun Lulus -</option>
                                    <option value="2006">2006</option>
                                    <option value="2007">2007</option>
                                    <option value="2008">2008</option>
                                    <option value="2009">2009</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                    <option value="2013">2013</option>
                                    <option value="2014">2014</option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>

                            <div class="col-md-2 mb-2 text-center">
                                <!-- <button class="form-control btn-success" type="submit" name="submit" id="submit"><i class="fas fa-search"></i>aktifkan filter</button> -->
                                <input class="form-control bg-success text-white" type="submit" name="submit" id="submit" value="AKTIFKAN FILTER">
                            </div>
                            <div class="col-md-2 mb-2">
                                <a class="btn btn-danger mb-1 w-100" href="<?= base_url('alumni') ?>"> Clear filter</a>
                            </div>
                        </div>

                    </form>
                    <div class="table-responsive">

                        <table class="table table-bordered" id="table_id">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Alumni</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jurusan</th>
                                    <th>Tahun Lulus</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($alumni as $a) : ?>
                                    <tr>
                                        <th><?= $i; ?></th>
                                        <td><?= $a['nama_alumni']; ?></td>
                                        <td><?= $a['jenis_kelamin']; ?></td>
                                        <td><?= $a['jurusan']; ?></td>
                                        <td><?= $a['tahun_lulus']; ?></td>
                                        <td><?= $a['keg_set_lulus']; ?></td>
                                    </tr>

                                <?php
                                    $i++;
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>