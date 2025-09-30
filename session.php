<?php 
	if(session_status() === PHP_SESSION_NONE) {
		session_start();
		if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 2000)) {
			// last request was more than 10 minutes ago
			session_unset(); // unset $_SESSION variable for the run-time
			session_destroy(); // destroy session data in storage
			echo '<script>window.location.href = "index.php"</script>';
		}
		$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp 
	}
?>