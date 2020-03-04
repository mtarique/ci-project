<?php $this->load->view('templates/header'); ?>

<div class="container">
	<div class="vertical-center-85">
		<div class="col-sm-12 text-center border border-danger py-3">
			<h3>Access denied!</h3>
			<p>You do not have enough privileges to access this page or function.<br>
            Kindly contact system administrator.</p>
			<a href="javascript:history.back()" class="text-decoration-none">&larr; Go Back</a> 
		</div>
	</div>
</div>

<?php $this->load->view('templates/footer.php'); ?>