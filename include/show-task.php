<?php
require_once("connection.php");
include('cat-task.php'); //Choose Category Feature
include('task-done.php'); //Task Complete Feature
include('search.php'); //Search Task Feature
include('edit-task.php'); //Edit Task Feature
include('remove-task.php');
//include('add-task.php'); 
?>
<!-- ------------------------ -->
<!----------------------------------------------Show-task------------------------------------------------->
<div id="container">
   <span id="yourtask" class="label label-warning">Your task</span>
   <ul id="show-task" class="list-group">
      <?php
      while ($data = mysqli_fetch_array($query)) {
         switch ($data['category']) {
            case '1': ?>
               <form id="<?php echo $data['id']; ?>" class="form-show-task">
                  <input id="cat-to-edit" type="hidden" value="<?php echo $data['category']; ?>">
                  <li id="bordernone" class="list-group-item list-group-item-success">
                     <span class="task-done2">
                        <input class="task-done" type="checkbox" onclick="location.href='include/show-task.php?id_delete=<?php echo $data['id']; ?>';">
                     </span>
                     <?php echo $data['content']; ?>
                     <span id="edit" class="badge">
                        <button id="edit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal" value="<?php echo $data['id']; ?>">
                           <span class="glyphicon glyphicon-pencil"></span>
                        </button>
                     </span>
                     <span id="edit" class="badge">
                        <button id="remove" type="button" class="btn btn-primary" value="<?php echo $data['id']; ?>">
                           <span class="glyphicon glyphicon-remove"></span>
                        </button>
                     </span>
                  </li>
               </form>
            <?php break;
            case '2': ?>
               <form id="<?php echo $data['id']; ?>" class="form-show-task">
                  <input id="cat-to-edit" type="hidden" value="<?php echo $data['category']; ?>">
                  <li class="list-group-item list-group-item-info">
                     <span class="task-done2">
                        <input class="task-done" type="checkbox" onclick="location.href='include/show-task.php?id_delete=<?php echo $data['id']; ?>';">
                     </span>
                     <?php echo $data['content']; ?>
                     <span id="edit" class="badge">
                        <button id="edit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal" value="<?php echo $data['id']; ?>">
                           <span class="glyphicon glyphicon-pencil"></span>
                        </button>
                     </span>
                     <span id="edit" class="badge">
                        <button id="remove" type="button" class="btn btn-primary" value="<?php echo $data['id']; ?>">
                           <span class="glyphicon glyphicon-remove"></span>
                        </button>
                     </span>
                  </li>
               </form>
            <?php break;
            case '3': ?>
               <form id="<?php echo $data['id']; ?>" class="form-show-task">
                  <input id="cat-to-edit" type="hidden" value="<?php echo $data['category']; ?>">
                  <li class="list-group-item list-group-item-warning">
                     <span class="task-done2">
                        <input class="task-done" type="checkbox" onclick="location.href='include/show-task.php?id_delete=<?php echo $data['id']; ?>';">
                     </span>
                     <?php echo $data['content']; ?>
                     <span id="edit" class="badge">
                        <button id="edit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal" value="<?php echo $data['id']; ?>">
                           <span class="glyphicon glyphicon-pencil"></span>
                        </button>
                     </span>
                     <span id="edit" class="badge">
                        <button id="remove" type="button" class="btn btn-primary" value="<?php echo $data['id']; ?>">
                           <span class="glyphicon glyphicon-remove"></span>
                        </button>
                     </span>
                  </li>
               </form>
            <?php break;
            case '4': ?>
               <form id="<?php echo $data['id']; ?>" class="form-show-task">
                  <input id="cat-to-edit" type="hidden" value="<?php echo $data['category']; ?>">
                  <li class="list-group-item list-group-item-danger">
                     <span class="task-done2">
                        <input class="task-done" type="checkbox" onclick="location.href='include/show-task.php?id_delete=<?php echo $data['id']; ?>';">
                     </span>
                     <?php echo $data['content']; ?>
                     <span id="edit" class="badge">
                        <button id="edit" type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal" value="<?php echo $data['id']; ?>">
                           <span class="glyphicon glyphicon-pencil"></span>
                        </button>
                     </span>
                     <span id="edit" class="badge">
                        <button id="remove" type="button" class="btn btn-primary" value="<?php echo $data['id']; ?>">
                           <span class="glyphicon glyphicon-remove"></span>
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
<script language="javascript" src="./js/edit-task.js"></script>
<script language="javascript" src="./js/remove-task.js"></script>
