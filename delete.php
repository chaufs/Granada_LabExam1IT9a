<?php
include "db.php";
$id = $_GET['ID'];
$id = mysqli_real_escape_string($conn, $id);

$sql = "DELETE FROM studentrec WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
  header("Location: index.php");
  exit();
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>