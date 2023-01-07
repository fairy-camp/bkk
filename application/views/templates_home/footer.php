
<footer class="footer footer-white ">
    <div class="container">
      <div class="row">
        <nav class="footer-nav py-0 my-0">
          <ul>
            <li>
    			<a href="https://www.facebook.com/SmkSyafiiAkromKotaPekalongan" target="_blank" class="text-dark mr-1"> <i class="fab fa-facebook fa-fw fa-2x"></i>BKK SMKSA</a>
            </li>
            <li>
    			<a href="https://www.instagram.com/smksyafiiakromkotapekalongan" target="_blank" class="text-dark mr-1 ml-1"><i class="fab fa-instagram fa-fw fa-2x"></i>BKK SMKSA</a>
            </li>
          </ul>
        </nav>
        <div class="credits ml-auto py-0 my-0">
          <span class="copyright">
    	  	&copy Developer SMK SA
          </span>
        </div>
      </div>
    </div>
</footer>
</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>

<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url(); ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="<?php echo base_url(); ?>assets/js/plugins/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>

<!--jquery validation-->
<script src="<?php echo base_url(); ?>assets/js/plugins/jquery.validate.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.min.js"></script>
<!--<script src="<?php echo base_url(); ?>assets/js/plugins/validation.js" type="text/javascript"></script>-->

<!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url(); ?>assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>

<script src="<?php echo base_url(); ?>assets/js/datatables.min.js" type="text/javascript"></script>

<!--fontawesome-->
<script src="<?php echo base_url(); ?>assets/js/all.min.js" type="text/javascript"></script>

<!-- sweetralert -->
<script src="<?= base_url(); ?>assets/js/sweetalert2.all.js"></script>
<script src="<?= base_url(); ?>assets/js/myscript.js"></script>

<script src="<?php echo base_url(); ?>assets/js/custom.js" type="text/javascript"></script>

<script>
    $(document).ready(function(){
      $(".preloader").fadeOut();
    });
    // $.validator.addMethod('filesize', function (value, element, param) {
    // return this.optional(element) || (element.files[0].size <= param)
    // }, 'Ukuran File harus kurang dari {0}');
    $("#myform").validate({
      // Specify validation rules
      rules: {
        nama: {
          required: true
        },
        nik: {
          required: true
        },
        alamat: {
          required: true
        },
        jenkel: {
          required: true
        },
        jurusan: {
            required: true
        },
        tahunlulus: {
          required: true
        },
        notelp: {
          required: true
        },
        email: {
          required: true
        },
        kegiatan: {
          required: true
        },
        namatempat: {
          required: true
        },
        // image: {
        //     required: true,
        //     extension: "jpg|jpeg|png",
        //     maxsize: 4000000
        // },
        rating: {
          required: true
        },
      },
      // Specify validation error messages
      messages: {
        nama: "Nama Harus Diisi",
        nik: "NIK Harus Diisi",
        alamat: "Alamat Harus Diisi",
        jenkel: "Jenis Kelamin Harus Diisi",
        jurusan: "Jurusan Harus Diisi",
        tahunlulus: "Tahun Lulus Harus Diisi",
        notelp: "No. Telp./WA Harus Diisi",
        email: "Sosial Media Harus Diisi",
        kegiatan: "Kegiatan setelah lulus Harus Diisi",
        namatempat: "Nama Tempat Harus Diisi",
        image: {
            required: "Foto harus di upload",
            extension: "File harus berekstensi jpg, jpeg atau png",
            maxsize: "File harus kurang dari 4 MB"
        },
        rating: "Rating Harus Diisi"
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        $('.overlay').css('display', 'block');
        form.submit();
      }
    });
</script>

<script>
	function foo() {
		alert("cek");
		return true;
	}
</script>



</html>