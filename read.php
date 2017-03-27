<?php
include_once 'dbconfig.php';
// include_once 'edit-update.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CRUD Operations With PHP and MySql - By Cleartuts</title>
<!-- <link rel="stylesheet" href="style.css" type="text/css" /> -->
</head>
<script type="text/javascript">
$(document).ready(function(){
$(".delete").click(function(event){
event.preventDefault();
var del=$(this).attr('href');
console.log(del);
$.ajax({
type: "POST",
url: "delete.php",
data: del,
success: function(results) {
	alert(results);
	$('.result').append(results);
}
});
	});
	});
</script>
<body>
<center>

<div id="body">
 <div id="content">
    <table align="center">
    <tr>
    <th colspan="5"><a href="create.html">add data here.</a></th>
    </tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>City Name</th>
    <th colspan="2">Operations</th>
    </tr>

    <?php
 $sql_query="SELECT * FROM sample";
 $result_set=mysql_query($sql_query);
 while($row=mysql_fetch_row($result_set))
 {
  ?>
        <tr>
        <td><?php echo $row[1]; ?></td>
        <td><?php echo $row[2]; ?></td>
        <td><?php echo $row[3]; ?></td>
 		<td align="center"><a  name="edit" href="edit-update.php?edt_id=<?php echo $row[0]; ?>">Edit</a></td>
        <td align="center"><a class="delete" name="delete" href="delete_id=<?php echo $row[0]; ?>">Delete</a></td>
        </tr>
        <?php
 }
 
 ?>
    </table>
    </div>
</div>
</center>
</body>
</html>