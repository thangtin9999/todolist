$("button#edit").click(function(){
  var id = $(this).val();
  var id_form_li="form#"+id+">li";
  var id_form_cat="form#"+id+">input[type='hidden']";
  var content = $(id_form_li).text();
  var category= $(id_form_cat).val();
 // console,log(id);
  // 1. dụng jquery get data từ form
  // 2. dùng jquery fill data này vào modal edit task
  document.getElementById("content-edit").value = content.trim();
  document.getElementById("cat-edit").value = category;
  document.getElementById("id-edit").value = id;
  console.log(id_form_li);
  console.log(content);
  console.log(category);
  
});