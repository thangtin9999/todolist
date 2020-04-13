
<?php
require_once('connection.php');
if (isset($_POST["btn-edit"])) {
    $id = $_POST["id"];
    $content = $_POST["content"];
    $category = $_POST["category"];
    $sql = "UPDATE task SET content='$content',category='$category',updatedate=now() WHERE id = $id ";
    mysqli_query($conn, $sql);
    header("Location:../");
    exit();
}
?>
<!-- Modal -->
<form action="./include/edit-task.php" method="post">
    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <label id="tag-edit-task" class="control-label">Edit task:</label>
                    <input type="hidden" id="id-edit" name="id" value="">
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="message-text" class="control-label">Category:</label>
                        <span class="input-group-btn">
                            <select id="cat-edit" class="form-control" id="exampleFormControlSelect1" name="category">
                                <option value="1">My Day</option>
                                <option value="2">Important</option>
                                <option value="3">Planned</option>
                                <option value="4">Assigned to you</option>
                            </select>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Content:</label>
                        <textarea class="form-control" id="content-edit" name="content"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info" name="btn-edit">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>