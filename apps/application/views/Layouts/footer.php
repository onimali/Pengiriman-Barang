</section>
<!-- content -->
</div>
<!-- content-wrapper -->
<!-- Main Footer -->
<footer class="main-footer dark-bg">
    <div class="pull-right hidden-xs"> Version 1.0</div>
    Copyright &copy; 2017 Yourdomian. All rights reserved.
</footer>
</div>
<!-- wrapper -->
<script src="<?= base_url('public/template/'); ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('public/template/'); ?>dist/js/ovio.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <?php echo "<script>".$this->session->flashdata('message')."</script>"?>
<script>
	$(document).ready(function() {
		$('#select2').select2({
		closeOnSelect: true
		});
	});

	$(document).ready(function() {
		$('#select3').select2({
		closeOnSelect: true
		});
	});
</script>
</body>

</html>