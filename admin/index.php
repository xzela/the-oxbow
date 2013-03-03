<?php require_once('admin-functions.php'); ?>

<html>
<head>

</head>

<body>

<h2>Tourdates</h2>
<table>
	<tr>
		<th>date</th>
		<th>location</th>
		<th>edit</th>
	</tr>
	<tr>	
		<?php admin_get_tourdates($db); ?>
	</tr>
</table>	



</body>
</html>	