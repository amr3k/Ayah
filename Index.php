<?php
#########################################################################
#							  Created by								#
#							 Amr Elkhenany								#
#########################################################################
$ayah		=		@$_POST['ayah'];
require		"configuration.php";
?>
<head>
	<title>آية</title>
	<link rel="shorcut icon" href="icon.png" />
	<link rel="stylesheet" href="style.css" />
	<meta charset="UTF-8">
</head>
<body>
	<h1>هذا الزر يقوم بإظهار آية من القرآن الكريم بشكل عشوائي</h1>
	<form target="" method="POST">
		<input type="submit" name="ayah" value="اضغط هنا" class="button"/>
		<br>
		<br>
	</form>
	<div class="ayah">
		<?php
		if(isset ($ayah))
		{
			require ('random.php');
		}
		?>
	</div>
</body>
