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
			  		<h3 class="box-title">Upload patch</h3>
            	</div>
            	<div class="box-body">
		
		<?php
		if (checkPatchAmount()) {
			?>
			<h1>Upload a patch</h1>
			<h3>Patch Server: <?php echo $site["server"]["host"]."patch/".$_SESSION["username"]."/"; ?></h3>
			
			
			
			<script type="text/javascript">
			function uploadFile(){
				var file = document.getElementById("theFile").files[0];
				// alert(file.name+" | "+file.size+" | "+file.type);
				var formdata = new FormData();
				formdata.append("theFile", file);
				var ajax = new XMLHttpRequest();
				ajax.upload.addEventListener("progress", progressHandler, false);
				ajax.addEventListener("load", completeHandler, false);
				ajax.addEventListener("error", errorHandler, false);
				ajax.addEventListener("abort", abortHandler, false);
				ajax.open("POST", "assets/php/scripts/upload.php");
				ajax.send(formdata);
			}
			function progressHandler(event){
				document.getElementById("uploaded").innerHTML = "Uploaded " + (event.loaded/1000); //event.total
				var percent = (event.loaded / event.total) * 100;
				document.getElementById("uploadProgess").value = Math.round(percent);
				document.getElementById("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
			}
			function completeHandler(event){
				$("#status").html(event.target.responseText);
				document.getElementById("uploadProgess").value = 0;
			}
			function errorHandler(event){
				$("#status").html("<div class=\"callout callout-danger\"><h3>Upload Failed</h3></div>");
			}
			function abortHandler(event){
				$("#status").html("<div class=\"callout callout-danger\"><h3>Upload Cancelled</h3></div>");
			}
			</script>
			
			<p id="status"></p>
			<p id="uploaded"></p>
			<p>You can upload <?php
					if (($_SESSION["allowedPatchInt"]-$_SESSION["usedPatchInt"]) == 1) {
						echo "1 more patch";
					} else {
						echo ($_SESSION["allowedPatchInt"]-$_SESSION["usedPatchInt"]) . " more patches";
					}
					?></p>
					<p></p>Upload an <strong>individual</strong> patch</p>
					<ol>
					<li>Archive the patch in .zip format</li>
					<li>Press upload patch and select the .zip file you just made</li>
					<li>>Your patch should upload successfully and be usable</li>
				<form id="beta_uploader" method="post" enctype="multipart/form-data">
					<input type="file" name="theFile" id="theFile" /><br /><br />
					<input type="button" value="Upload Patch" class="btn btn-info" onclick="uploadFile()"><br /><br />
					<progress id="uploadProgess" value="0" max="100" style="width:25%"></progress>
				</form>
				

			<?php
		} else {
			?>
			<div id="header">
				<h1>Patch limit reached</h1>
				<h2>You have used <?php echo $_SESSION["usedPatchInt"] . " of " . $_SESSION["allowedPatchInt"]; ?> patches</h2>
				<h3>Patch Server: <?php echo $site["server"]["host"]."patch/".$_SESSION["username"]."/"; ?></h3>
			</div>
			<?php
		}
		?>
				</div>
			</div>
		</section>
	</div>
<?php include('foot.php'); ?>		
