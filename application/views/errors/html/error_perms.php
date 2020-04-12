<?php $this->load->view('templates/header'); ?>

<div class="container">
	<div class="vertical-center-85">
		<div class="col-sm-12 text-center border border-danger bg-light py-3">
			<h3><?php echo $title; ?></h3>
			<p><?php echo $descr; ?></p>
			<a href="javascript:history.back()" class="text-decoration-none">&larr; Go Back</a> 
		</div>
	</div>
</div>

<?php $this->load->view('templates/footer.php'); ?>