<script type="text/javascript">
$('.datatable').DataTable();

function hapus(id) {
    swal({
        title: 'Apakah anda yakin?',
        text: "Data akan dihapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus!'
    }).then(function(result) {
        if (result.value) {
            window.location = "<?php echo base_url('peminjaman/aksi_hapus/'); ?>" + id;
        }
    });
};
</script>