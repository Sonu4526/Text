<?php
include "config.php";
echo "conn";
$selected_text=$_POST['selection'];
$qry="insert into insert_data(selected_text,date) values('$selected_text',sysdate())";
$row=mysqli_query($con,$qry);
?>