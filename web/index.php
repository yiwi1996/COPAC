<?php	
	include_once "../lib/helpers.php";
	
	include_once "../view/partials/head.php";
	
	echo "<body>";
		echo "<div class='wrapper'>";
			include_once  "../view/partials/navbar.php";
			
			include_once  "../view/partials/sidebar.php";
			
			echo "<div class='main-panel'>";
			
				echo "<div class='content'>";
					if (isset($_GET['modulo'])) {

						resolve();
					} else {

						//include_once  "../view/partials/content.php";
					}
				echo "</div>";
				
				include_once  "../view/partials/pieDePagina.php";
				
			echo "</div>";

			include_once  "../view/partials/config.php";

		echo "</div>";

		include_once  "../view/partials/footer.php";
	echo "</body>";
	echo "</html>";
?>