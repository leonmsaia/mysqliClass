<?php 
	include ('db.php');

	$db = new DB('root', '', 'dond_db');

	var_dump($db->select('SELECT * FROM banner'));
?>