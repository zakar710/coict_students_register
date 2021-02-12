<?php
include 'connect.php';


$query = "SELECT * FROM students";
$result = mysqli_query($conn,$query);
$addresses = mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Students page</title>
 <link rel="stylesheet" type="text/css" href="style.css">
   
</head>

<body>
  <h3>Welcome to Coict Students Registration list</h3>
<p>To register a student, click <a href="insert.php"> here</a></p>
	
<table>

	<thead>
	<th>S/N</th>
	<th>first name</th>
	<th>Last name</th>
	<th>Email</th>
    <th>Address</th>

   </thead>
<?php foreach ($addresses as $key => $address) {
	$key++;
 ?>
   <tbody>
   	<td> <?php echo $key;?> </td>
   	<td> <?php echo $address['firstname'];?> </td>
   	<td> <?php echo $address['lastname'];?> </td>
   	<td> <?php echo $address['email'];?> </td>
   	<td> <?php echo $address['address'];?> </td>
        <td> <a href="edit.php?id=<?php echo $address['id'];?>">Edit</a></td>

        <td> <a href="delete.php?delete_id=<?php echo $address['id'];?>">Delete</a></td>


<?php } ?>
   </tbody>
</table>
</body>
</html>