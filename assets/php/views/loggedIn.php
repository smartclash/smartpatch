<?php include("head.php"); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1><?php echo $site["info"]["name"]; ?> <small>A best in class Patching server for COC emulator</small></h1>
	</section>
		
	<section class="content">
		<h2>Howdy, <?php echo $_SESSION["username"]; ?><h1>
		<h2>Your Patch Server: <?php echo $site["server"]["host"]."patch/".$_SESSION["username"]."/"; ?></h2><br />
		<h3>You have used <?php echo $_SESSION["usedPatchInt"] . " out of " . $_SESSION["allowedPatchInt"]; ?> patches</h3>
	</section>
</div>
<?php include("foot.php"); ?>