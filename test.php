<?php
ini_set('display_errors', 1);

include './includes/autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php
	$testObj = new Test();
	$testObj->setUsersStmt("BVC940193", "Desk", 100, "45x40x80");
	?>
</body>

</html>