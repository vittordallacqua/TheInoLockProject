<html>
<?php

  $value = $_GET['value'];
    
  //Get date and time
  // Return date/time info of a timestamp; then format the output
  $mydate=getdate(date("U"));
  $timestamp = "$mydate[year]-$mydate[mon]-$mydate[mday] $mydate[hours]:$mydate[minutes]:$mydate[seconds]";
  //echo $timestamp;
  //-----------Setup Mysql Connection
    
  $user = 'user';
  $pass = 'pass';
  $hostname = 'localhost';
  $databaseName = 'rfidDB';
    
  $linkSQL = mysqli_connect($hostname,$user,$pass,$databaseName);
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }  
  //Construct the sql query and store it in a varaible 
  //$sql="INSERT INTO user (name, value,date) VALUES('modem','$value','$timestamp')";
  $sql="INSERT INTO user (name, value, date) VALUES('modem','$value','$timestamp')";
    if (!mysqli_query($linkSQL,$sql))
    {
    die('Error: ' . mysqli_error($linkSQL));
    } 
  echo 'Sucesso'; 
  mysqli_close($linkSQL);
?>
</html>