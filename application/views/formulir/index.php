<div class="preloader">
    <div class="loading">
        <i class="spinner-border text-primary text-center">
        <!-- <span class="sr-only">Loading...</span> -->
        </i>
    </div>
</div>

<div class="">
    <!--   Big container   -->
    <div class="container mt-4">
        
        <div class="row justify-content-center">
            <!-- berhasil -->
            
            
            <div class="col-md-8 col-lg-offset-2 mt-3 rounded">
                
            <!-- berhasil sweetAlert-->
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
            <?php if ($this->session->flashdata('flash')) : ?>
            <?php endif; ?>      
                
                <!--      Wizard container        -->
                
                
                <div class="col-sm my-3">
                    <div class="my-2">
                    <?= $this->session->flashdata('message'); ?>
                    </div>
                    <form action="<?= base_url('formulir/simpan') ?>" method="POST" id="myform" enctype="multipart/form-data">
                    <div class="card shadow">
                        <div class="card-header text-white font-weight-bold text-center section-dark h5 mt-0">
                            Formulir Pendataan Alumni
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label class="font-weight-bold">Nama <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Lengkap" autocomplete="off" value="<?= set_value('nama'); ?>">
                                <!--<?= form_error('nama', '<small class="text-danger">', '</small>') ?>-->
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">NIK <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="nik" id="nik" maxlength="16" placeholder="Nomor Induk Kependudukan" autocomplete="off" value="<?= set_value('nik'); ?>" onkeypress="return Angkasaja(event)">
                                <!--<?= form_error('nik', '<small class="text-danger">', '</small>') ?>-->
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Alamat <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat Lengkap" rows="3"><?= set_value('alamat'); ?></textarea>
                                <!--<?= form_error('alamat', '<small class="text-danger">', '</small>') ?>-->
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Jenis Kelamin <span class="text-danger">*</span></label><br>
                                <select name="jenkel" id="jenkel" class="form-control">
                                    <option disabled="" selected="" value="">- Pilih jenis kelamin -</option>
                                    <option value="Laki-laki"> Laki-laki </option>
                                    <option value="Perempuan"> Perempuan </option>
                                </select>
                                <!--<?= form_error('jenkel', '<small class="text-danger">', '</small>') ?>-->
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Jurusan <span class="text-danger">*</span></label><br>
                                <select name="jurusan" id="jurusan" class="form-control">
                                    <option disabled="" selected="" value="">- Pilih jurusan -</option>
                                    <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                    <option value="Tata Busana">Tata Busana</option>
                                    <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                                    <option value="Teknik Bisnis Sepeda Motor">Teknik Bisnis Sepeda Motor</option>
                                </select>
                                <!--<?= form_error('jurusan', '<small class="text-danger">', '</small>') ?>-->
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Tahun Lulus <span class="text-danger">*</span></label>
                                <select name="tahunlulus" id="tahunlulus" class="form-control">
                                    <option disabled="" selected="" value="">- Pilih Tahun lulus -</option>
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
                            <div class="form-group">
                                <label class="font-weight-bold">No. Telp <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="notelp" id="notelp" placeholder="Masukkan No. Telp/WA" autocomplete="off" maxlength="20" value="<?= set_value('notelp'); ?>" onkeypress="return Angkasaja(event)">
                                <!--<?= form_error('notelp', '<small class="text-danger">', '</small>') ?>-->
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Social Media <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Isikan dengan facebook/instagram anda" autocomplete="off" maxlength="50" value="<?= set_value('email'); ?>">
                                <!--<?= form_error('email', '<small class="text-danger">', '</small>') ?>-->
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Kegiatan Setelah Lulus <span class="text-danger">*</span></label><br>
                                <select name="kegiatan" id="kegiatan" class="form-control">
                                    <option disabled="" selected="" value="">- Kegiatan Setelah Lulus -</option>
                                    <option value="Bekerja">Bekerja</option>
                                    <option value="Wirausaha">Wirausaha</option>
                                    <option value="Kuliah">Kuliah</option>
                                    <option value="Belum Kerja">Belum Kerja</option>
                                </select>
                                <!--<?= form_error('kegiatan', '<small class="text-danger">', '</small>') ?>-->
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Tempat Kerja/Kuliah <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="namatempat" id="namatempat" placeholder="Nama Tempat Kerja/Kuliah, Apabila Wirausaha isi dengan bidang pekerjaannya" autocomplete="off" maxlength="50" value="<?= set_value('namatempat'); ?>">
                                <!--<?= form_error('namatempat', '<small class="text-danger">', '</small>') ?>-->
                            </div>    
                            <!--<div class="form-group">-->
                            <!--    <label class="font-weight-bold">Upload Foto Terbaru</label>-->
                            <!--    <div class="custom-file">-->
                            <!--        <input type="file" class="custom-file-input" id="image" name="image">-->
                            <!--        <label for="image" class="custom-file-label">Pilih File</label>-->
                                    <!--<?= form_error('image', '<small class="text-danger">', '</small>') ?>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <div class="form-group">
                                <label class="font-weight-bold">Rating SMK SA <span class="text-danger">*</span></label>
                                <select name="rating" id="rating" class="form-control">
                                    <option value="" disabled="" selected="">- Pilih rating untuk SMK SA -</option>
                                    <option value="Sangat Baik"> Sangat Baik </option>
                                    <option value="Baik"> Baik </option>
                                    <option value="Kurang Baik"> Kurang Baik </option>
                                    <option value="Sangat Tidak Baik"> Sangat Tidak Baik </option>
                                </select>
                                <!--<?= form_error('rating', '<small class="text-danger">', '</small>') ?>-->


                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Saran untuk SMK SA</span></label>
                                <textarea class="form-control" name="saran" id="saran" placeholder="Tuliskan apabila ada saran untuk SMK Syafi'i Akrom" rows="3" value="<?= set_value('saran'); ?>"></textarea>
                                <!--<?= form_error('saran', '<small class="text-danger">', '</small>') ?>-->

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col align-center">
                                <input type='submit' class='btn btn-primary btn-lg btn-block mb-3' name='kirim' id="tombol-kirim" value='Kirim'  />
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>



        </div>
    </div> <!-- row -->
</div> <!--  big container -->
<div class="overlay" style="display: none">
    <div class="container modal-dialog-centered justify-content-center">
        <p style="background-color: white; padding: 15px;">Mohon Tunggu ...</p>
    </div>
</div>