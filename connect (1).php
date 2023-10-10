<?php
	function DB_connect()
	{
		$server="localhost";
		$uname="root";
		$pwd="";
		$dbname="vvknd";
		$con=mysqli_connect($server,$uname,$pwd,$dbname);
		return $con;
	}
?>