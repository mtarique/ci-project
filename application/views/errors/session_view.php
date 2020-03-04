<?php $this->load->view('templates/header'); ?>

<div class="container">
	<div class="vertical-center-85">
		<div class="col-sm-12 text-center border border-danger py-3">
			<h3>Session expired!</h3>
            <p>Your session has expired.
            Please click <a href="<?php echo base_url('users/login'); ?>">here</a> to login again.</p>
		</div>
	</div>
</div>

<?php $this->load->view('templates/footer.php'); ?>