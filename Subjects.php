<?php

    $config = array(
		'host'     => 'localhost',
		'username' => 'root',
		'password' => '',
		'dbname'   => 'summary'
	);

	$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>
<!DOCTYPE html>
<html>
<head>
	<link type="text/css" rel="stylesheet" href="slutprojekt.css"/>
<title>Slutprojekt</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body background="background.jpg">

	<nav>	
		<ul>
			<a href="Home.php"><li class="rubrik">Home</li></a>
			<a href="News.php"><li class="rubrik">News</li></a>
			<a href="subjects.php"><li class="rubrik">Subjects</li><a/>
		</ul>

	</nav>


	<div id="kursnav">

		<ul>
			<a href="subject-matte.php"><li>Mathematics</li></a>
			<a href="subject-svenska.php"><li>Swedish</li></a>
			<a href="subject-engelska.php"><li>English</li></a>
			<a href="subject-physics.php"><li>Physics</li></a>
		</ul>


	</div>





</body>

</html>
