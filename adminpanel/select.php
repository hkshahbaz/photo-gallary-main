
<?php
include_once('1pg_connection.php');

mysqli_select_db($conn,$dbname);

$sql= "select * from users_record ORDER BY ID ";

$result=mysqli_query($conn,$sql);
?>

 <?php
if (mysqli_num_rows($result)>0)
{	?>
	<table border="2" style= "background-color: #84ed86; 
		color: #761a9b; margin: 0 auto;padding:15px;margin-top:10%;" >
 
        <tr >
          <th>	User ID		</th>
          <th>	Email	</th>
          <th>	First Name	</th>
          <th>	Last Name	</th>
          <th>	Password	</th>
		  <th>	Action	</th>
		   <th>	Edit	</th>
        </tr>
       <tr>
	  
	  <?php
	while ($row = mysqli_fetch_assoc($result))
		{	
		?>
			<tr>
			<td> <?php echo		$row["ID"]; 			?></td>
			<td> <?php echo		$row["Email"]; 			?></td>
			<td> <?php echo		$row["First_Name"]; 	?></td>
			<td> <?php echo		$row["Last_Name"]; 		?></td>
			<td> <?php echo		$row["Password"];		?></td>
			<td> 
			<button type="button" onclick='delete.php?id=<?php echo $row["ID"];?>' class="btn btn-danger btn-flat">Delete</button>
			</td>
			<td> 
			<button type="button" onclick='edit.php?id=<?php echo $row["ID"] ?>' class="btn btn-danger btn-flat">Edit</button>
			</td>
			</tr>
			<?php
		}
}

else {
	echo "<h1 style='text-align:center;color:grey;border:2px groove black;margin-top:20%;'>
	No Records found
	</h1>";
	}
	?>
	
	</tr>
    </table>
	<h3 style='text-align:center;color:grey;border:2px groove black;margin-top:5%;'>Do You Want To Insert New Data Click Below Link</h3>
<a href="admin_signup.php"; style='text-align:center;color:grey;text-decoration:none;margin-top:5%;'>INSERT New Data</a>