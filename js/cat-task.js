$("button#val").click(function(){
    $.ajax({
      url : "include/show-task.php", 
      type : "get",
      data : { 
           cat : $(this).val()
      },
      success : function (result){
          $('#container').html(result);
      }
  });
  });