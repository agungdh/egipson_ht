<script type="text/javascript">
<?php
foreach ($this->db->get('log')->result() as $item) {
	?>
	var json_string = '<?php echo $item->value; ?>';
	var jsonPretty = JSON.stringify(JSON.parse(json_string),null,2);  
	$('#data_<?php echo $item->id; ?>').html(jsonPretty);
	<?php
}
?>
</script>