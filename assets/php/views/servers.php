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
			  		<h3 class="box-title">Patch control</h3>
            	</div>
            	<div class="box-body">
		<?php
			$serverCheck = createServer($_SESSION["username"]);
			if ($serverCheck == 0) {
				if (readPatchFolder("patch/".$_SESSION["username"]."/") == False) {
					echo '<br /><br /><div class="callout callout-danger"><h3>No patches found</h3></div>';
				} else {
					echo readPatchFolder("patch/".$_SESSION["username"]."/");
				}
			} elseif ($serverCheck == 1) {
				echo '<br /><br /><div class="callout callout-success"><h3>Patch server now ready for use!</h3></div>';
			} else {
				echo '<br /><br /><div class="callout callout-danger"><h3>Couldn\'t create your server, contact support</h3></div>';
			}
			if (!empty($_GET["msg"])) {
				if (is_numeric($_GET["msg"])) {
					$msg = trim($_GET["msg"]);
					switch ($msg){
						case 1:
							echo "<div class=\"callout callout-success\"><h3>Patch deletion successful";
							break;
						case 2:
							echo "<div class=\"callout callout-danger\"><h3>Patch couldn't be deleted";
							break;
						case 3:
							echo "<div class=\"callout callout-warning\"><h3>You can't delete what isn't there";
							break;
						case 4:
							echo "<div class=\"callout callout-danger\"><h3>Please <a href='assets/php/scripts/update.php'>reload your account</a> and try again, if that doesn't work contact support";
							break;
						case 5:
							echo "<div class=\"callout callout-danger\"><h3>Nothing valid was sent";
							break;
						default:
							echo "<div class=\"callout callout-danger\"><h3>Something happened";
							break;
					}
					echo "</h3></div><br><br><br>";
				}
			}
			echo '<br><br><button class="btn btn-block btn-success" onclick="window.location.href=\'?p=upl\';">Upload a Patch</button>';
		?>
		</div>
	</div>
</section>
</div>
<?php include('foot.php'); ?>