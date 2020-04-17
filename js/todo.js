// Choose Category Feature
$("button#val").click(function () {
  $.ajax({
    url: "include/show-task.php",
    type: "get",
    data: {
      cat: $(this).val(),
    },
    success: function (result) {
      $("#container").html(result);
    },
  });
});
// Search Category
$("button#btsearch").click(function () {
  $.ajax({
    url: "include/show-task.php",
    type: "get",
    data: {
      search: $("input#ipsearch").val(),
    },
    success: function (result) {
      $("#container").html(result);
    },
  });
  console.log($("input#ipsearch").val());
});
/*
$("button#edit").click(function () {
  var id = $(this).val();
  var id_form_li = "form#" + id + ">li";
  var id_form_cat = "form#" + id + ">input[type='hidden']";
  var content = $(id_form_li).text();
  var category = $(id_form_cat).val();
  document.getElementById("content-edit").value = content.trim();
  document.getElementById("cat-edit").value = category;
  document.getElementById("id-edit").value = id;
});
// Remove Task Feature
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

*/