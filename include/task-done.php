<?php
if (isset($_GET["id_delete"])) {
   $id = $_GET["id_delete"];
   $sql = "UPDATE task SET stat = '0' WHERE id = $id";
   mysqli_query($conn, $sql);
   header("Location:../");
   exit();
}
?>