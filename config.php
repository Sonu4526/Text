<?php
  $con=mysqli_connect('localhost','root','','sonuverman');
  if($con==true)
  {
  	echo "true";
  }
  else
  {
  	echo "not connecct";
  }
 ?>