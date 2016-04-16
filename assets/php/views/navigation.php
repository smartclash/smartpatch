<?php
	if (!isset($_SESSION["accountType"])) {
		die();
	} else{
		if($_SESSION["accountType"] == 4){
			echo '
		<li><a href="' . $fullPathToRoot . '?p=home"><i class="fa fa-link"></i> <span>Home</span></a></li>
        <li><a href="' . $fullPathToRoot . '?p=svr"><i class="fa fa-server"></i> <span>Patches</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=acc"><i class="fa fa-link"></i> <span>Account</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=nfo"><i class="fa fa-link"></i> <span>About</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=hlp"><i class="fa fa-send"></i> <span>Help</span></a></li>
		<li><a href="' . $fullPathToRoot . 'admin.php"><i class="fa fa-dashboard"></i> <span>Admin</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=lgo"><i class="fa fa-link"></i> <span>Logout</span></a></li>
		';
		} else {
			echo '
		<li><a href="' . $fullPathToRoot . '?p=home"><i class="fa fa-link"></i> <span>Home</span></a></li>
        <li><a href="' . $fullPathToRoot . '?p=svr"><i class="fa fa-server"></i> <span>Patches</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=acc"><i class="fa fa-link"></i> <span>Account</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=nfo"><i class="fa fa-link"></i> <span>About</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=hlp"><i class="fa fa-send"></i> <span>Help</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=lgo"><i class="fa fa-link"></i> <span>Logout</span></a></li>
		';
		}
	}
?>
