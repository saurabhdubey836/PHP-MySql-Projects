<?php
$con=mysqli_connect('localhost','root');

mysqli_select_db($con,'BRM_DB');
$q = "Select * from book";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<html>
	<head>
		<title>Delete Book Record(s)</title>
		<link rel="stylesheet" href="viewstyle.css" />
	</head>
<body>
	<h1><marquee>Book Record Management</marquee></h1>
	<form action="deletion.php" method="post">
	<table id = "view_table">
	 <tr>
	  <th>Book ID</th>
	  <th>Title</th>
	  <th>Price</th>
	  <th>Author</th>
	  <th>Select to delete</th>
	 </tr> 
	 <?php
	  for($i=1;$i<=$num;$i++)
	  {
	    $row=mysqli_fetch_array($result);
	 ?>
	 <tr>
	  <td><?php echo $row['bookid'];?></td>
	  <td><?php echo $row['title'];?></td>
	  <td><?php echo $row['price'];?></td>
	  <td><?php echo $row['author'];?></td>
	  <td><input type="checkbox" value="<?php echo $row['bookid'];?>" name="b<?php echo $i;?>"></th>
	 </tr>
	 <?php
	  }
	  ?>
	  <tr>
		<td colspan="5"><input type="submit"  value="Delete"/></td>
	  </tr>
	 </tables>
</form>
</body >
</html>
