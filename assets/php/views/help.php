<?php include("head.php"); ?>
<div class="content-wrapper">
	<div class="content-header">
			<h1>Help &amp; Support</h1>
		</div>
		<section class="content">
		<div id="helpSection">
			<fieldset>
				<legend><h2>FAQ</h2></legend>
				<pre>
					<h3><i class="fa fa-link"></i>Upload Help/Errors</h3>
					<h3><i class="fa fa-link"></i>Account Help/Errors</h3>
					<h3><i class="fa fa-link"></i>Patch Management Help/Errors</h3>
				</pre>
				
			</fieldset>
		</div>
		<div id="contactSection">
			<fieldset>
				<legend><h2>Contact us only if : </h2></legend>
				<strong>When to contact support:</strong>
				<ul class="whenToContactUs">
					<li><i class="fa fa-link"></i>If you receive an error telling you to contact us</li>
					<li><i class="fa fa-link"></i>If you discover a bug, typo or other issue with the site</li>
					<li><i class="fa fa-link"></i>If you are having issues with the service</li>
					<li><i class="fa fa-link"></i>If you would like a feature</li>
					<li><i class="fa fa-link"></i>If you have any questions about the service</li>
				</ul>
				<br>
				<br>
				<form action="assets/php/scripts/contact.php" method="post" name="contactForm">
					<textarea placeholder="Message to our support team" name="messageSupport" id="messageSupport" class="txtArea"></textarea><br /><br />
					<input type="submit" value="Message Support" class="button-alt" />
				</form>
				<i><span style="color:white">Messages without an email attached will be ignored</span></i>
			</fieldset>
		</div>
		
	</div>
	
</div>
<?php include("foot.php"); ?>
