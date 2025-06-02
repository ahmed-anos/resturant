<!-- plugins:js -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="{{ asset('admin/vendors/js/vendor.bundle.base.js') }}"></script>
	<!-- endinject -->
	<!-- Plugin js for this page -->
	{{-- <script src="admin/vendors/chart.js/Chart.min.js"></script> --}}
	{{-- <script src="admin/vendors/moment/moment.min.js"></script> --}}
	<script src="{{ asset('admin/vendors/daterangepicker/daterangepicker.js') }}"></script>
	{{-- <script src="admin/vendors/chartist/chartist.min.js"></script> --}}
	<!-- End plugin js for this page -->
	<!-- inject:js -->
	<script src="{{ asset('admin/js/off-canvas.js') }}"></script>
	<script src="{{ asset('admin/js/misc.js') }}"></script>
	<!-- endinject -->
	<!-- Custom js for this page -->
	<script src="{{ asset('admin/js/dashboard.js') }}"></script>
	<script type="text/javascript">
		$(".alert").delay(4000).slideUp(200, function() {
	    $(this).alert('close');
	});
	</script>
	 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
	function confirmDeleteFood(id, name) {
    event.preventDefault(); 

    Swal.fire({
        title: `هل أنت متأكد من حذف ${name}؟`,
        text: "لن تتمكن من التراجع عن هذا الإجراء!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'نعم، احذفه!',
        cancelButtonText: 'لا، إلغاء'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + id).submit();
        }
    });
}

</script>
<!-- End custom js for this page -->