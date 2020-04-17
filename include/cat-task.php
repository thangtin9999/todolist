<?php
$cat = isset($_GET['cat']) ? (int) $_GET['cat'] : false;
switch ($cat) {
   case '102':
      $sql = "SELECT * 
            FROM task 
            WHERE stat= 1 ORDER BY createdate desc;
            ";
      $query = mysqli_query($conn, $sql);
      break;
   case '1':
      $sql = "SELECT * 
            FROM task 
            WHERE stat= 1 and category= 1 ORDER BY createdate desc;
            ";
      $query = mysqli_query($conn, $sql);
      break;
   case '2':
      $sql = "SELECT * 
            FROM task 
            WHERE stat= 1 and category= 2 ORDER BY createdate desc;
            ";
      $query = mysqli_query($conn, $sql);
      break;
   case '3':
      $sql = "SELECT * 
            FROM task 
            WHERE stat= 1 and category= 3 ORDER BY createdate desc;
            ";
      $query = mysqli_query($conn, $sql);
      break;
   case '4':
      $sql = "SELECT * 
            FROM task 
            WHERE stat= 1 and category= 4 ORDER BY createdate desc;
            ";
      $query = mysqli_query($conn, $sql);
      break;
   case '5':
      $sql = "SELECT * 
               FROM task 
               WHERE stat= 0 ORDER BY createdate desc;
               ";
      $query = mysqli_query($conn, $sql);
      break;
   default:
      $sql = "SELECT * 
            FROM task 
            WHERE stat= 1 ORDER BY createdate desc;
            ";
      $query = mysqli_query($conn, $sql);
      break;
}
?>