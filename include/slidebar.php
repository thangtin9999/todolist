<!-- Phần menu dọc-->
<?php
    require_once('connection.php');
    $sql="SELECT * FROM task";
    $sql1="SELECT * FROM task WHERE category='1'";
    $sql2="SELECT * FROM task WHERE category='2'";
    $sql3="SELECT * FROM task WHERE category='3'";
    $sql4="SELECT * FROM task WHERE category='4'";
    $rowcount=mysqli_num_rows(mysqli_query($conn,$sql));
    $rowcount1=mysqli_num_rows(mysqli_query($conn,$sql1));
    $rowcount2=mysqli_num_rows(mysqli_query($conn,$sql2));
    $rowcount3=mysqli_num_rows(mysqli_query($conn,$sql3));
    $rowcount4=mysqli_num_rows(mysqli_query($conn,$sql4));

    
    ?>
<div id="slidebar">
       <!-- <ul>
            <li><a href="#">My Day</a></li>
            <li><a href="#">Important</a></li>
            <li><a href="#">planned</a></li>
            <li><a href="#">Assigned to you</a></li>
            <li><a href="#">Tasks</a></li>
        </ul>-->
        <div id=menu-sub><span class="glyphicon glyphicon-menu-hamburger"></span></div>
        <div class="list-group  ">
            <a href="#" class="list-group-item list-group-item-danger"><span class="glyphicon glyphicon-tasks"></span> <span class="badge"><?php echo $rowcount; ?></span>   Tasks</a>
            <a href="#" class="list-group-item list-group-item-success"><span class="glyphicon glyphicon-modal-window"></span> <span class="badge"><?php echo $rowcount1; ?></span>   My Day</a>
            <a href="#" class="list-group-item list-group-item-info"><span class="glyphicon glyphicon-flash"></span> <span class="badge"><?php echo $rowcount2; ?></span>   Important</a>
            <a href="#" class="list-group-item list-group-item-warning"><span class="glyphicon glyphicon-calendar"></span> <span class="badge"><?php echo $rowcount3; ?></span>   Planned</a>
            <a href="#" class="list-group-item list-group-item-danger"><span class="glyphicon glyphicon-user"></span> <span class="badge"><?php echo $rowcount4; ?></span>   Assigned to you</a>
        </div>
    </div>