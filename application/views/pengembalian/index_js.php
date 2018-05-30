<script type="text/javascript">
var table = $('.datatable').DataTable( {
    "processing": true,
    "serverSide": true,
    "ajax": {
        "url": "<?php echo base_url('pengembalian/ajax_index'); ?>",
        "type": "POST"
    },
    columnDefs: [
        { targets: [5], orderable: false}
    ],
    "scrollX": true,
    "autoWidth": false,
});

function hapus(id) {
    swal({
        title: 'Apakah anda yakin?',
        text: "Data akan dihapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Hapus!'
    }).then(function(result) {
        if (result.value) {
            axios.get("<?php echo base_url('pengembalian/aksi_hapus/'); ?>" + id)
            .then(function (response) {
                table.ajax.reload();
            })
            .catch(function (error) {
                console.log(error);
            });
        }
    });
};
</script>