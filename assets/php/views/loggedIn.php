<?php include('head.php'); ?>
<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 align="center"><?php echo $site["info"]["name"]; ?></h1>
        </section>
		<section class="content">
			<div class="box box-default">
            	<div class="box-header with-border">
              		<i class="fa fa-headphones"></i>
			  		<h3 class="box-title">Howdy, <?php echo $_SESSION["username"]; ?></h3>
            	</div>
            	<div class="box-body">
            		<h3>Your Patch Server: <?php echo $site["server"]["host"]."patch/".$_SESSION["username"]."/"; ?></h3>
					<h3>You have used <?php echo $_SESSION["usedPatchInt"] . " out of " . $_SESSION["allowedPatchInt"]; ?> patches</h3>
				</div>
			</div>
		</section>
	</div>
	<?php include('foot.php'); ?>