<?php
	function DB_insert($con)
	{
		$str="insert into book values('".$_REQUEST['txtid']."','".$_REQUEST['txtname']."','".$_REQUEST['txtdate']."','".$_REQUEST['txtcity']."')";
		$result=$con->query($str);
		//return $result;
	}
	function DB_view($con)
	{
		$str="select * from book;";
		$result=$con->query($str);
		return $result;
	}
	function DB_delete($con,$r)
	{
		$str="delete from book where id='$r';";
		$result=$con->query($str);
		return $result;
	}
	function DB_update($con,$r)
	{
		$str="update book set name='".$_REQUEST['txtname']."',city='".$_REQUEST['txtcity']."' where id='$r';";
		$result=$con->query($str);
		return $result;
	}
	
	function DB_search($con,$r)
	{
		$str="select * from book where name='".$r."';";
		$result=$con->query($str);
		return $result;
	}
?>