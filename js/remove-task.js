$("button#remove").click(function () {
    $.ajax({
      url: "include/show-task.php",
      type: "get",
      data: {
        id_remove: $(this).val(),
      },
      success: function (result) {
       $("#container").html(result);
      },
    });
  });