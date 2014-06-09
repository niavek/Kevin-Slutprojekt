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

	<form method="post" action="newsposts.php">
			<input id="newstext" type="text" name="content" >
			<select name="username">

				<?php
				foreach ($db->query("SELECT * FROM users ORDER BY username") as $row)
				{
					echo "<option>{$row['username']}</option>";
				}
				?>


			</select>
			

			<input style="margin-left:450px" action="" type="submit" name="submit" value="submit news">
		</form>



		<div id="newscontainer">
			<?php

	echo "<ul>";
	foreach ($db->query("SELECT * FROM posts") as $row)
	{
		echo "<li><comments={$row['time']}\"><strong>{$row ['username']}</strong></br>{$row ['content']}</strong></br>{$row ['time']}</br>\"</a></li>";
	}
	echo "</ul>";
	echo "<hr />";
	         {

         		}


?>

		</div>


</body>

</html>
