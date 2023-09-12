<?php
  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname = "contact_us";

  $conn = mysqli_connect($server, $username, $password, $dbname);

  if($conn)
  {
  echo "Connection Success";
  }
  else
  {
    echo "connection failed";
  }

?>