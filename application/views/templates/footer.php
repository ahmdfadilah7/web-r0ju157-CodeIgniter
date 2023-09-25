  <?php
    if($this->session->flashdata('message')){
  ?>
    <div class="flashdata" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
  <?php
    }
  ?>

  <?php
    if ($this->session->flashdata('message-success')) {
  ?>
	  <div class="flashdata-success" data-flashdata="<?= $this->session->flashdata('message-success'); ?>"></div>
  <?php
    }
  ?>

  <?php
    if ($this->session->flashdata('message-failed')) {
  ?>
  	<div class="flashdata-failed" data-flashdata="<?= $this->session->flashdata('message-failed'); ?>"></div>
  <?php
    }
  ?>
	<!-- ./Sweet Alert 2 -->

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/vendor/jquery/jquery-3.5.1.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/jquery/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/sweetalert2/sweetalert2.all.min.js'); ?>"></script>
    <!-- Plugins -->
    <script src="<?= base_url('assets/vendor/datatables/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/datatables/js/dataTables.bootstrap4.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/fontawesome/js/all.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/sweatalert2/sweetalert2.all.min.js'); ?>"></script>
    <script src="<?= base_url('assets/vendor/jquery-mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js'); ?>"></script>
    <!-- Configuration Plugins -->
    <script src="<?= base_url('assets/js/config-datatables.js'); ?>"></script>
    <script src="<?= base_url('assets/js/config-popper.js'); ?>"></script>
    <script src="<?= base_url('assets/js/config-sweatalert2.js'); ?>"></script>
    <!-- MyJS -->
    <script src="<?= base_url('assets/js/at_warlap.js'); ?>"></script>
    <script>
        function menu() {
          var id = document.getElementById("id_menu").value;
          var url = "<?=base_url('pemasukkan/menu/')?>"+id
          $.ajax({
              url: url,
              type: 'GET',
              dataType: 'json',
              success: function(data) {
                  $('#harga_jual').val(data.harga_menu)
              }
          });
        }
    </script>
  </body>
</html>