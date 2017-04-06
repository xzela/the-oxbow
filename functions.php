<?php  // require_once('db.php');

// get tourdates

function get_tourdates($db) {
	$sql = "SELECT * FROM tourdates ORDER BY eventDate DESC;";

	if($result = $db->query($sql)) {

		while($row = $result->fetch_assoc()) {
			echo $row['eventDate'] . ': ' . $row['location'];
			if($row['tixURL']) {
				echo ' a href="' . $row['tixURL'] . '">buy tix</a>';
			}
			echo '<br />';
		}

	}
}
