<?php 
	if (!isset($_SESSION["accountType"])) {
		die();
	} else{
		if($_SESSION["accountType"] == 4){
			echo '
		<ul class="sidebar-menu">
            <li class="header">HEADER</li>
		<li><a href="' . $fullPathToRoot . '?p=home"><span>Home</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=svr"><span>Servers</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=acc"><span>Account</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=lgo"><span>Logout</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=hlp"><span>Help</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=nfo"><span>About</span></a></li>
		<li><a href="' . $fullPathToRoot . 'admin.php"><span>Admin</span></a></li>
		';
		} else {
			echo '
		<ul class="sidebar-menu">
        <li class="header">HEADER</li>
		<li><a href="' . $fullPathToRoot . '?p=home"><span>Home</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=svr"><span>Servers</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=acc"><span>Account</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=lgo"><span>Logout</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=hlp"><span>Help</span></a></li>
		<li><a href="' . $fullPathToRoot . '?p=nfo"><span>About</span></a></li>
		';
		}
	}
?>