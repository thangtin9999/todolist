<?php
require_once('connection.php');
if (isset($_POST["btn_save"])) {
  $content = $_POST["content"];
  $category = $_POST["category"];
  $sql = "INSERT INTO task(content,category,stat,createdate) VALUES ( '$content', '$category','1',now())";
  //$query = mysqli_query($conn,$sql);
  // mysqli_query($conn,$sql);
  if ($conn->query($sql) === TRUE) {
    echo "ok";
    header("Location:../");
    exit();
  } else {
    echo "error:" . mysqli_error($conn);
  }
  echo "</br>Content: " . $content;
  //header("Location:../index.php");
}
?>
<!-- Phần nội dung-->
<div id="main">
<form action="./include/add-task.php" method="post">
  <div class="row">
    <div class="col-lg-6">
      <span id="addtask" class="label label-success">Add a task</span>
      <div id="form-task" class="input-group">
          <input id="content_task" type="text" class="form-control" name="content" placeholder="Input task here...">
          <span class="input-group-btn">
            <select id="select_cat" class="form-control" id="exampleFormControlSelect1" name="category">
              <option value="1">My Day</option>
              <option value="2">Important</option>
              <option value="3">Planned</option>
              <option value="4">Assigned to you</option>
            </select>
          </span>
          <span class="input-group-btn">
            <button id="button-save" class="btn btn-default" type="submit" name="btn_save">Save</button>
          </span>
      </div>
    </div>
  </div>
  </form>




  <!-----------------------------------------------Show-task------------------------------------------------->