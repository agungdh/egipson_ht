<script type="text/javascript">
$('.datatable').DataTable( {
    "processing": true,
    "serverSide": true,
    "ajax": {
        "url": "<?php echo base_url('log/ajax'); ?>",
        "type": "POST"
    },
});
</script>