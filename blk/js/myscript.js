const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        title: 'Selamat ' + flashData + ', Data Alumni Anda Berhasil Disimpan',
        text: 'Cek data pada menu Data Alumni' ,
        icon: 'success'
    } );
}