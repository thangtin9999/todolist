<!-- Search Feature -->
<?php
if (isset($_GET["search"])) {
   $search = $_GET["search"];
   if (empty($search)&& $search=="") {
      echo "<p style='color:red;font-size:16px;'>Input Empty</p>";
   } else {
      $sql = "SELECT * 
               FROM task 
               WHERE stat= 1 and content like '%$search%' ORDER BY content asc;
";
      $querys = mysqli_query($conn, $sql);
      $num = mysqli_num_rows($querys);
      if ($num > 0 && $search != "") {
         echo "<p style='color:red;font-size:14px;'><b style='font-size:16px;'>" . $num . "</b>  result with keywords  <b style='text-decoration: underline;font-size:16px'>" . $search . "</b></p>";
         $query = $querys;
      } else {
         echo "<p style='color:red;font-size:16px;'>No result</p>";
      }
   }
}
?>