<?php 
include_once 'dbconfig.php';

if(isset($_REQUEST['delete_id']))
{
 $sql_query="DELETE FROM sample WHERE user_id=".$_REQUEST['delete_id'];
 mysql_query($sql_query);
 echo "Deleted Sucessfully".$_REQUEST['delete_id'];
}

 ?>