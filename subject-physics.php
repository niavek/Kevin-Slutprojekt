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

	<div id="kurscontainer">


		<form method="post" action="postcreaterfysik.php"> 

			<h4>Content:</h4>
			<input id="Content" type="text" name="content" >

			<h4>Username:</h4>
			<select name="username" id="userdropdown">

				<?php
				foreach ($db->query("SELECT * FROM users ORDER BY username") as $row)
				{
					echo "<option>{$row['username']}</option>";
				}
				?>


			</select>
				
					
			
			<br>
			<input type="submit" name="submit" value="Lägg till" action="">
		</form>



		<?php

		echo "<ul>";
		foreach ($db->query("SELECT * FROM fysik") as $row)
		{
			echo "<li><comments={$row['id']}\"><strong>{$row ['username']}</strong></br>{$row ['content']}</br>\"{$row['time']}\"</a></li>";
		}
		echo "</ul>";
		echo "<hr />";
        		 {

         		}	


		?>





	</div>


</body>

</html>
