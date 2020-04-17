$("button#btsearch").click(function(){
    $.ajax({
      url : "include/show-task.php", 
      type : "get",
      data : { 
           search : $("input#ipsearch").val()
      },
      success : function (result){
          $('#container').html(result);
      }
      
  });
  console.log($("input#ipsearch").val());
});