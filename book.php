<?php
	include_once("connect.php");
	include_once("crud.php");
	$con=DB_connect();
	$res="";
	
	if(isset($_REQUEST['btninsert']))
	{
		DB_insert($con);
		$res=DB_view($con);
		echo "INSERTED";
	}
	else if(isset($_REQUEST['btnupdate']))
	{
		DB_update($con,$_REQUEST["txtid"]);
		$res=DB_view($con);
	}
	else if(isset($_REQUEST['bookid']))
	{
		DB_delete($con,$_REQUEST["bookid"]);
		$res=DB_view($con);
	}
	else if(isset($_REQUEST['btnsearch']))
	{
		$res=DB_search($con,$_REQUEST["txtname"]);
	
	}
	else
	{
		$res=DB_view($con);
	}
?>
<html>

	<title> Book mnagement </title>
	<body>
		<form action="book.php" method="POST">
			<table>
			
				<tr>
					<td>id</td>
					<td><input type="text" name="txtid"></td>
				</tr>
				
				<tr>
					<td>Name</td>
					<td><input type="text" name="txtname"></td>
				</tr>
				
				<tr>
					<td>Date</td>
					<td><input type="date" name="txtdate"></td>
				</tr>
				
				<tr>
					<td>city</td>
					<td>
					<select name="txtcity">
						<option>surat</option>
						<option>vapi</option>
						<option>baroda</option>
					</select>
					</td>
				</tr>
			<tr>
				<td><button name="btninsert">INSERT</button></td>
				<td><button name="btnupdate">UPDATE</button></td>
			<td><button name="btnsearch">SEARCH</button></td>
			
			</tr>
			</table>
			
			
			<table>
				<tr>
					<td>ID: </td>
					<td>NAME: </td>
					<td>DATE: </td>
					<td>CITY: </td>
				</tr>
				
				<?php
					while($row=$res->fetch_assoc())
					{
				?>
				<tr>
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['date'] ?></td>
					<td><?php echo $row['city'] ?></td>
					<td><a href="book.php?bookid=<?php echo $row['id'] ?>">DELETE</a></td>
				</tr>
					<?php } ?>
				
			</table>
			
			
		</form>
	</body>
</html>