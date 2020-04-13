<?php
require_once("connection.php");
include('edit-task.php');
$sql = "SELECT * 
            FROM task 
            WHERE stat= 1 ORDER BY createdate desc;
            ";
$query = mysqli_query($conn, $sql);
?>
<?php
if (isset($_GET["id_delete"])) {
   $id = $_GET["id_delete"];
   $sql = "UPDATE task SET stat = '0' WHERE id = $id";
   mysqli_query($conn, $sql);
   header("Location:../");
   exit();
}
?>
<div id="container">
   <span id="your-task" class="label label-warning">Your task</span>
   <ul id="show-task" class="list-group">
      <?php
      while ($data = mysqli_fetch_array($query)) {
         switch ($data['category']) {
            case '1': ?>
               <form id="<?php echo $data['id']; ?>" <li id="bordernone" class="list-group-item list-group-item-success">
                  <span class="task-done2">
                     <input class="task-done" type="checkbox" onclick="location.href='include/show-task.php?id_delete=<?php echo $data['id']; ?>';">
                  </span>
                  <?php echo $data['content']; ?>
                  <span id="edit" class="badge">
                     <button id="edit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal" value="<?php echo $data['id']; ?>">
                        <span class="glyphicon glyphicon-pencil"></span>
                     </button>
                  </span>
                  </li>
               </form>
            <?php break;
            case '2': ?>
               <form id="<?php echo $data['id']; ?>" <li class="list-group-item list-group-item-info">
                  <span class="task-done2">
                     <input class="task-done" type="checkbox" onclick="location.href='include/show-task.php?id_delete=<?php echo $data['id']; ?>';">
                  </span>
                  <?php echo $data['content']; ?>
                  <span id="edit" class="badge">
                     <button id="edit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal" value="<?php echo $data['id']; ?>">
                        <span class="glyphicon glyphicon-pencil"></span>
                     </button>
                  </span>
                  </li>
               </form>
            <?php break;
            case '3': ?>
               <form id="<?php echo $data['id']; ?>" <li class="list-group-item list-group-item-warning">
                  <span class="task-done2">
                     <input class="task-done" type="checkbox" onclick="location.href='include/show-task.php?id_delete=<?php echo $data['id']; ?>';">
                  </span>
                  <?php echo $data['content']; ?>
                  <span id="edit" class="badge">
                     <button id="edit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal" value="<?php echo $data['id']; ?>">
                        <span class="glyphicon glyphicon-pencil"></span>
                     </button>
                  </span>
                  </li>
               </form>
            <?php break;
            case '4': ?>
               <form id="<?php echo $data['id']; ?>" <li class="list-group-item list-group-item-danger">
                  <span class="task-done2">
                     <input class="task-done" type="checkbox" onclick="location.href='include/show-task.php?id_delete=<?php echo $data['id']; ?>';">
                  </span>
                  <?php echo $data['content']; ?>
                  <span id="edit" class="badge">
                     <button id="edit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal" value="<?php echo $data['id']; ?>">
                        <span class="glyphicon glyphicon-pencil"></span>
                     </button>
                  </span>
                  </li>
               </form>
      <?php break;
         }
      }
      ?>
   </ul>
</div>
<div id="content"></div>