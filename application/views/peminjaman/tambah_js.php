<script type="text/javascript">
$('.datepicker').datepicker({
  format: "dd-mm-yyyy",
  autoclose: true,
  todayHighlight: true
});

$('#simpan').click(function(){
  $("form").submit();
});
</script>