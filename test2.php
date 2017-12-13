<?php

// Create connection
$conn = new mysqli("localhost", "admin","pdIQyL6QrtlBp","test");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$dato = $_POST["dato"];
$check = $_POST["check"];
if($check=="aka"){
  $sql = "INSERT INTO table_t (dato) VALUES ('$dato');";
  if ($conn->query($sql) === TRUE) {
      echo "guardado correctamente";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
else{
	echo "usuario no autorizado";	
}
$conn->close();
?>
