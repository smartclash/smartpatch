<?php include('head.php'); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
        <section class="content-header">
        	<h1>Error</h1>
        </section>
        <section class="content">
		<?php
			if (!empty($_GET["msg"])) {
				if (is_numeric($_GET["msg"])) {
					$msg = trim($_GET["msg"]);
					switch ($msg){
						case 1:
							echo '<div class="callout callout-warning"><h3>File exists, please contact support for help';
							break;
						case 2:
							echo '<div class="callout callout-danger"><h3>This patch breaks our file size limit of ' . $_SESSION["allowedPatchSizeStr"];
							break;
						case 3:
							echo '<div class="callout callout-warning"><h3>The file uploaded was not in .zip format!';
							break;
						case 4:
							echo '<div class="callout callout-danger"><h3>Files couldn\'t be moved, contact support';
							break;
						case 5:
							echo '<div class="callout callout-success"><h3>File was uploaded successfully! <a href="?p=svr" title="Continue">Click to Continue</a>';
							break;
						case 6:
							echo '<div class="callout callout-warning"><h3>General file upload error, contact support asap';
							break;
						case 7:
							echo '<div class="callout callout-warning"><h3>Unable to locate the file to verify an upload success';
							break;
						case 8:
							echo '<div class="callout callout-danger"><h3>File may be corrupt or an invalid .zip archive';
							break;
						case 9:
							echo '<div class="callout callout-danger"><h3>Couldn\'t register your patch with the server';
							break;
						case 10:
							echo '<div class="callout callout-warning"><h3>We have a limit of ' . $_SESSION["allowedPatchInt"] . ' patches';
							break;
						case 11:
							echo '<div class="callout callout-warning"><h3>File uploaded cannot be read';
							break;
						default:
							echo '<div class="callout callout-warning"><h3>Unknown error #2';
							break;
					}
					echo "</h3></div>";
				}
			}
		?>
		</section>
</div>
<?php include('foot.php'); ?>