<?php
if (isset($_GET["id_remove"])) {
   $id = $_GET["id_remove"];
   $sql = "DELETE FROM task WHERE id = '$id'";
   mysqli_query($conn, $sql);
  /* $sql = "SELECT * 
   FROM task 
   WHERE stat= 1 ORDER BY createdate desc;
   ";
   $query = mysqli_query($conn, $sql);*/
}
?>