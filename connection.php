<?php
	// Function created to test connection:
	function connect_db() {
		static $conn;
		// If $conn is not set:
		if(!isset($conn)) {
			// Grab info from Config File
			$config = parse_ini_file('config.ini');
			// And estabilish a connection
			$conn = mysqli_connect('localhost', $config['username'], $config['password'], $config['database']);

			// Set the timezone
      date_default_timezone_set('Canada/Pacific');

			// Set charset
      mysqli_set_charset($conn, 'utf8');

			// If connection does not succeed:
			if(!$conn) {
				// DIsplay error:
				echo mysqli_connect_error();
				return;
			} else {
				// If it succeeds, return it
				return $conn;
			}
		} else {
			// If is it already connected, just return it:
			return $conn;
		}
	}

	// Function to close connection:
	function close_db($c) {
		if($c) {
			mysqli_close($c);
		} else {
			echo '<p>Failed to connect</p>';
		}
	}

?>
