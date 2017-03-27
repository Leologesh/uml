<?php
include_once 'dbconfig.php';
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM sample1 WHERE id=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}



?>