<?php
include_once 'dbconfig.php';

 // variables for input data
 $Id=$_POST['Id'];
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $city_name = $_POST['city_name'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO sample(Id,first_name,last_name,user_city) VALUES('$Id', '$first_name','$last_name','$city_name')";
 mysql_query($sql_query);
        
        // sql query for inserting data into database
 
 echo "success";
?>