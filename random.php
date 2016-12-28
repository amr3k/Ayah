<?php
require ('configuration.php');
$SQLCommand = 	'SELECT imlai FROM Quran ORDER BY RAND() LIMIT 1';
$result		=	mysqli_query($db , $SQLCommand);
		while($row = mysqli_fetch_array($result , MYSQLI_ASSOC)){
			echo $row['imlai'];
		}
