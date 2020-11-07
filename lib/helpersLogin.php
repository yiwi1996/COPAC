<?php
	if (isset($_SESSION['auth']) && $_SESSION['auth']=="ok") {
		//void
	} else {
		redirect("login.php");
	}
?>