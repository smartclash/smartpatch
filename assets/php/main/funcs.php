<?php
function accountLoggedIn() {
	// If login set is true then return true
	if ($_SESSION["loginSet"] == true) {
		return True;
	} else {
		return False;
	}
}

function getCWF() {
	// Will output something like https://patchy.co.nf/patchserver/
	// Basically gets the current folder of the script 
	if ($_SERVER["SERVER_PORT"] == 443) $_CWFprotocol = "https"; else $_CWFprotocol = "http";
	if (dirname($_SERVER['SCRIPT_NAME']) == "\\") $_CWFdir = "/"; else $_CWFdir = dirname($_SERVER['SCRIPT_NAME']) . "/";
	$_CWF = "$_CWFprotocol://" . $_SERVER["SERVER_NAME"] . $_CWFdir;
	return $_CWF;
}

function createUniqueSalt() {
	$rand = time()*rand(128,256);
	$hash = hash("sha512",$rand);
	return $hash;
}

function hashPassword($pw,$s1,$s2) {
	$toHash = $s1 . $pw . $s2;
	$hashPass1 = hash("sha512",$toHash);
	$hashPass2 = hash("sha512",$hashPass1 . $s1);
	$hashPass3 = hash("sha512",$hashPass2 . $s2);
	return $hashPass3;
}

function createToken($un,$pw,$s1,$s2) {
	$toHash = $s1 . $un . $pw .$s2;
	$hashPass1 = hash("sha384",$toHash);
	$hashPass2 = hash("sha384",$s1);
	$hashPass3 = hash("sha384",$s2);
	return $hashPass3;
}

function createServer($user) {
	$structure = 'patch/' . $user . "/";
	if (file_exists($structure)) {
		return 0;
	} else {
		if (!@mkdir($structure, 0777, true)) {
			return 2;
		} else {
			return 1;
		}
		
	}
}

function readPatchFolder($dir) {
	$scan = @scandir($dir);
	$patches = count($scan)-2; // Remove . and  ..
	
	if ($patches != $_SESSION["usedPatchInt"]) {
		$patchReturn = "<div class=\"callout callout-danger\"><h3>Database and Patch Server are out of sync, <a class='white-link' href='assets/php/scripts/recount.php' title='Re-Sync Patch Count'>click to fix</h3></div><br />";
	} else {
		$patchReturn = "";
	}
	
	if ($patches > 0) {
		$patchReturn .= '
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Patch Name</th>
					<th>Options</th>
				</tr>
			</thead>
			<tbody>';
		foreach($scan as $patch){
			if($patch != '.' && $patch != '..'){
				$patchReturn .= "<tr><td>" . $patch . "</td><td><a href='assets/php/scripts/delete.php?patch=$patch' class='white-link'>Delete</a></td></tr>";
			}
		}
		$patchReturn .= '
			</tbody>
		</table><br /><br /><div class="callout callout-success"><h3>Patch Amount: ' . $patches . '</h3></div>';
		return $patchReturn;
	} else {
		return False;
	}
}

function checkPatchyVersion() {
	// Check for updates..
	require "version.php";
	
	$versionurl = file_get_contents("https://static.smartclashcoc.com/smartpatch/update.txt");
	if($versionurl > $version) {
		echo "<div class=\"callout callout-warning\"><h3>Patchy UPDATE!!!</h3><p>Patchy update available ($versionurl) Download it from <a href=\"$githubLink\ target=\"_blank\">Here</a>";
	}
	else {
		echo "";
	}
	

function checkPatchAmount() {
	if ($_SESSION["usedPatchInt"] < $_SESSION["allowedPatchInt"]) {
		return True;
	} else {
		return False;
	}
} 

function checkIfCanDel($path,$target) {
	if ($_SESSION["usedPatchInt"] > 0) {
		if (file_exists($path . $target)) {
			return True;
		} else {
			die("<script> window.location.href='$fullPathToRoot?p=svr&msg=4'; </script>");
		}
	} else {
		die("<script> window.location.href='$fullPathToRoot?p=svr&msg=5'; </script>");
	}
}

function deletePatch($patch) {
	if (preg_match("/[^a-zA-Z0-9\_]/",$patch)) {
		return False;
	} else {
		$fullPatchPath = $_SESSION["delTarget"] . $patch;
		$cleanPath = str_replace("\assets\php\scripts\..\..\..","",$fullPatchPath);
		
		// <http://stackoverflow.com/a/3352564/3762917>
		$files = new RecursiveIteratorIterator(
			new RecursiveDirectoryIterator($cleanPath, RecursiveDirectoryIterator::SKIP_DOTS),
			RecursiveIteratorIterator::CHILD_FIRST
		);

		foreach ($files as $fileinfo) {
			$todo = ($fileinfo->isDir() ? 'rmdir' : 'unlink');
			$todo($fileinfo->getRealPath());
		}

		rmdir($cleanPath);
		// </http://stackoverflow.com/a/3352564/3762917>
		
		return True;
	}
}
?>