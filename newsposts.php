<?php
  $config = array(
		'host'     => 'localhost',
		'username' => 'root',
		'password' => '',
		'dbname'   => 'summary'
	);

	$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);

	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(!empty($_POST))
{
	$_POST = null;
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_LOW);
	$content    = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_LOW);
	$statement = $db->prepare("INSERT INTO posts (username, content, time) VALUES (:username, :content, NOW())");
	$statement->bindParam(":username", $username);
	$statement->bindParam(":content", $content);
	$statement->execute();

	header('Location: News.php');
	exit;

	
	
}







?>