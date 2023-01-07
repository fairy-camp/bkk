function Angkasaja(evt) {
	var charCode = (evt.which) ? evt.which : event.keyCode
	if (charCode > 31 && (charCode < 48 || charCode > 57))

	return false;
	return true;
};


$(document).ready(function() {
    $('#table_id').DataTable();
});

$('.custom-file-input').on('change', function() {

    let fileName = $(this).val().split('//').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);

});

// $(document).on('submit', 'form[data-confirm]', function(e) {
// 	if (!confirm($(this).data('confirm'))) {
// 		e.stopImmediatePropagation();
// 		e.preventDefault();
// 	}
// });

// const flashData = $('.flash-data').data('flashdata');

// if (flashData) {
// 	Swal.fire({
// 		title: 'Kirim data formulir?',
// 		text: '',
// 		icon: 'warning',
// 		showCancelButton: true
// 	});
// }

// $('.tombol-kirim').on('click', function (e) {
// 	e.preventDefault();
	

// 	Swal.fire({
// 		title: 'Kirim data formulir?',
// 		text: '',
// 		icon: 'warning',
// 		showCancelButton: true,
// 		confirmButtonColor: '#3085d6',
// 		cancelButtonColor: '#d33',
// 		confirmButtonText: 'Ya'
// 	}, function(isConfirm){
// 		if (isConfirm) Form.submit();
// 	}
	
// 	)
// })

// $('#tombol-kirim').on('click', (e) =>{
// 	e.preventDefault()

// 	Swal.fire({
// 		title: 'Kirim data formulir?',
// 		text: '',
// 		icon: 'warning',
// 		showCancelButton: true,
// 		confirmButtonColor: '#3085d6',
// 		cancelButtonColor: '#d33',
// 		confirmButtonText: 'Ya'
// 	}).then((result) =>{
// 		if (result.value) {
// 			let data = $('form').serialize();
// 		}
// 	})
// })

// $('#tombol-kirim').on('click', function(e){
// 	e.preventDefault();

// 	var form = $(this).parents('form');

// 	Swal.fire({
// 		title: 'Kirim data formulir?',
// 		text: '',
// 		icon: 'warning',
// 		showCancelButton: true,
// 		confirmButtonColor: '#3085d6',
// 		cancelButtonColor: '#d33',
// 		confirmButtonText: 'Ya'
// 	}).then(function (result){
// 		$('#tombol-kirim').submit();
// 	});
// })

// document.querySelector('#tombol-kirim').addEventListener('submit', function(e) {
// 	var form = $(this);
// 	e.preventDefault();
// 	Swal.fire({
// 		title: "Are you sure?",
// 		text: "Once a invoice is created, you will not be able to delete without the help of support",
// 		icon: "warning",
// 		showCancelButton: true,
// 		confirmButtonColor: '#DD6B55',
// 		confirmButtonText: 'Yes, I am sure!',
// 		cancelButtonText: "No, cancel it!",
// 	}).then(function() {
// 		$(this).trigger('submit');
// 		Swal.fire({
// 			title: 'Success!', 
// 			text: 'Invoice created! Go to the invoice tab to pay it.', 
// 			icon: 'success'
// 		}, function() {
// 			$(this).trigger('submit');
// 		});
// 	},function(dismiss) {
// 		if(dismiss == 'cancel') {
// 			Swal.fire("Cancelled", "Invoice not created!", "error");
// 		}
// 	});
// });

