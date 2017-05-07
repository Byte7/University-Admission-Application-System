

<html>
<title>PROFILE PAGE </title>
<center> <b> PROFILE PAGE </b>
<br><br>
<body bgcolor="#F0F4F1">
<form name="form2" method="" action="" autocomplete="off">
 <p><center>
 <a href='index.php'>Home</a>&nbsp;&nbsp;&nbsp;<a href='logout.php'>LOG OUT</a>
 
	            


</form>
</html>
<?php session_start();
include("config.php");

 if(isset($_SESSION['valid']))
{	
	include("config.php");	
	$result = mysqli_query($conn, "select * from login");

	
	echo "Welcome reg I D ".$_SESSION['valid']. " &nbsp;&nbsp;&nbsp;! ";
	
	
	
		$result2 = mysqli_query($conn, "select * from login where regId=".$_SESSION['valid']. " ");
	    echo"<br><br><br><br><br>";
		echo "<table border='1'>
<tr>

<td>Firstname</td>
<td>Lastname</td>
<td>Email-Id</td>
<td>Username</td>
<td>Password</td>
<td>dtime</td>
<td>regId</td>
<td>submission</td>
</tr>";
	while($row = mysqli_fetch_assoc($result2))
	{
		 echo "<tr>";
		
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";  
  echo "<td>" . $row['password'] . "</td>";  
  echo "<td>" . $row['dtime'] . "</td>";  
  echo "<td>" . $row['regId'] . "</td>";  
  echo "<td>" . $row['submission'] . "</td>";  
       
  
  
  echo "</tr>";
	}
	echo "</table>";
}


 

?>