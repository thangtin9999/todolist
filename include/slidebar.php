<!-- Phần menu dọc-->
<?php
require_once('connection.php');
$sql = "SELECT * FROM task";
$sql1 = "SELECT * FROM task WHERE category='1' and stat='1'";
$sql2 = "SELECT * FROM task WHERE category='2' and stat='1'";
$sql3 = "SELECT * FROM task WHERE category='3' and stat='1'";
$sql4 = "SELECT * FROM task WHERE category='4' and stat='1'";
$sql5 = "SELECT * FROM task WHERE  stat='0'";
$rowcount = mysqli_num_rows(mysqli_query($conn, $sql));
$rowcount1 = mysqli_num_rows(mysqli_query($conn, $sql1));
$rowcount2 = mysqli_num_rows(mysqli_query($conn, $sql2));
$rowcount3 = mysqli_num_rows(mysqli_query($conn, $sql3));
$rowcount4 = mysqli_num_rows(mysqli_query($conn, $sql4));
$rowcount5 = mysqli_num_rows(mysqli_query($conn, $sql5));
?>
<div id="slidebar">
    <div id="menu-sub"><span class="glyphicon glyphicon-menu-hamburger"></span></div>
    <div class="list-group">
        <button id="val" type="button" class="list-group-item list-group-item-danger" value="102"><span class="glyphicon glyphicon-tasks"></span> <span class="badge"><?php echo $rowcount; ?></span> Tasks</button>
        <button id="val" type="button" class="list-group-item list-group-item-success" value="1"><span class="glyphicon glyphicon-modal-window"></span> <span class="badge"><?php echo $rowcount1; ?></span> My Day</button>
        <button id="val" type="button" class="list-group-item list-group-item-info" value="2"><span class="glyphicon glyphicon-flash"></span> <span class="badge"><?php echo $rowcount2; ?></span> Important</button>
        <button id="val" type="button" class="list-group-item list-group-item-warning" value="3"><span class="glyphicon glyphicon-calendar"></span> <span class="badge"><?php echo $rowcount3; ?></span> Planned</button>
        <button id="val" type="button" class="list-group-item list-group-item-danger" value="4"><span class="glyphicon glyphicon-user"></span> <span class="badge"><?php echo $rowcount4; ?></span> Assigned to you</button>
        <button id="val" type="button" class="list-group-item" value="5"><span class="glyphicon glyphicon-ok"></span> <span class="badge"><?php echo $rowcount5; ?></span><b> Task Complete</b></button>
    </div>
</div>