<?php
//including the database connection file
include_once("config.php");

// select data in descending order from table/collection "users"
$result = $db->visitor->find();
// var_dump($result);
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.php">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Age</td>
		<td>Email</td>
		<td>Timestamp</td>
        <td>Update</td>
	</tr>
	<?php 	
	foreach ($result as $res) {
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['phone']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<img src=".$res['photo'].">";
        // $ctime=new MongoDB\BSON\UTCDateTime($res['createdon']);
		// $DT= $ctime->toDateTime();

        // $datetime=$ctime->toDateTime()->formate("dMY");
        // var_dump($datetime);
       echo"<td>".$res['createdon']."</td>";
        // echo "<td>".$DT->format('d/m/Y h:?i:s')."</td>";	
		echo "<td><a href=\"edit.php?id=$res[_id]\">Edit</a> | <a href=\"delete.php?id=$res[_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
     
       
    }
	?>
	</table>
</body>
</html>
<?php
// $cdt =$res['createdon'];
//         var_dump ($cdt);
//         $utcdatetime = new MongoDB\BSON\UTCDateTime($cdt);
// $datetime = $utcdatetime->toDateTime();
// var_dump($datetime->format('r'));
		// $dateInUTC=$cdt;
		// $time = strtotime($dateInUTC.' UTC');
		// $dateInLocal = date("Y-m-d H:i:s", $time);
		// echo $dateInLocal;

		?>
