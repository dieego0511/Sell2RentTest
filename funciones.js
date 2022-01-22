
function editUser(id){
  console.log(id);
  let name = $("#userName"+id).text();
  let lastName = $("#userLastName"+id).text();
  console.log(lastName);

  $('#idUserEdit').val(id);
  $("#nameEdit").val(name);
  $("#lastNameEdit").val(lastName);
}