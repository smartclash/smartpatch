<?php include("head.php"); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Patch Control Panel</h1>
	</section>
		
		<?php
			if (!empty($_GET["msg"])) {
				if (is_numeric($_GET["msg"])) {
					$msg = trim($_GET["msg"]);
					switch ($msg){
						case 1:
							echo "<p class=\"lead\">Patch deletion successful";
							break;
						case 2:
							echo "<p class=\"lead\">Patch couldn't be deleted";
							break;
						case 3:
							echo "<p class=\"lead\">You can't delete what isn't there";
							break;
						case 4:
							echo "<p class=\"lead\">Please <a href='assets/php/scripts/update.php'>reload your account</a> and try again, if that doesn't work contact support";
							break;
						case 5:
							echo "<p class=\"lead\">Nothing valid was sent";
							break;
						default:
							echo "<p class=\"lead\">Something happened";
							break;
					}
					echo "</p><br /><br />";
				}
			}
			
			$serverCheck = createServer($_SESSION["username"]);
			if ($serverCheck == 0) {
				if (readPatchFolder("patch/".$_SESSION["username"]."/") == False) {
					echo '<br /><br /><p class="lead">No patches found</span>';
				} else {
					echo readPatchFolder("patch/".$_SESSION["username"]."/");
				}
			} elseif ($serverCheck == 1) {
				echo '<br /><br /><p class="lead">Patch server now ready for use!</span>';
			} else {
				echo '<br /><br /><p class="lead">Couldn\'t create your server, contact support</span>';
			}
		?>
	<br>
	<br>
	<button class="button" onclick="window.location.href='?p=upl';">Upload a Patch</button>
</div>
<?php include("foot.php"); ?>
