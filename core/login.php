<?php

  // Database config variables
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cerberus";
  $table = "users";

  $user_e_mail = $_POST["input_email"];
  $user_password = $_POST["input_password"];

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM $table WHERE e_mail = '$user_e_mail' AND password = '$user_password'";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          echo "Trovato";
      }
  } else {
      echo "0 results";
  }

  mysqli_close($conn);

?>
