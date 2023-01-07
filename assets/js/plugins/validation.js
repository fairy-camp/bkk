// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("#myform").validate({
      // Specify validation rules
      rules: {
        nama: {
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
        kegiatan: {
          required: true
        },
        namatempat: {
          required: true
        },
        rating: {
          required: true
        },
      },
      // Specify validation error messages
      messages: {
        nama: "Nama Harus Diisi",
        alamat: "Alamat Harus Diisi",
        jenkel: "Jenis Kelamin Harus Diisi",
        jurusan: "Jurusan Harus Diisi",
        tahunlulus: "Tahun Lulus Harus Diisi",
        notelp: "No. Telp./WA Harus Diisi",
        kegiatan: "Kegiatan setelah lulus Harus Diisi",
        namatempat: "Nama Tempat Harus Diisi",
        rating: "Rating Harus Diisi"
        
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        $('.overlay').css('display', 'block');
        form.submit();
      }
    });
  });