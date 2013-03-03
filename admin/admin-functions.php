<?php  require_once('../db.php');

// get tourdates

function admin_get_tourdates($db) {
	$sql = "SELECT * FROM tourdates ORDER BY eventDate DESC;";

	if($result = $db->query($sql)) {
		
		while($row = $result->fetch_assoc()) {
			echo '
				<td>' . $row['eventDate'] . '</td> 
				<td>' . $row['location'] . '</td>
				<td>';
					if($row['tixURL']) {
						echo ' a href="' . $row['tixURL'] . '">buy tix</a>';
					} 
			echo '</td>
				<td><a href="tourdate_edit.php?id=' . $row['tourdateID'] . '">edit</a></td>';
		}
		
	}
}