
function editUser(id){
  let name = $("#userName"+id).text();
  let lastName = $("#userLastName"+id).text();
  console.log(lastName);

  $('#idUserEdit').val(id);
  $("#nameEdit").val(name);
  $("#lastNameEdit").val(lastName);
}


function userValidation(type){
  const pattern = new RegExp('^[A-Z]+$', 'i');
  if(type== 1){
    let nameVal = $('#name').val();
    console.log(typeof nameVal);
    if ( !pattern.test(nameVal)  ) {
      $('#nameLetter').show();
    }else{
      $('#nameLetter').hide();
    }
  }else if(type== 2){
    let lastNameVal = $('#lastName').val();
    if ( !pattern.test(lastNameVal)  ) {
      $('#lastNameLetter').show();
    }else{
      $('#lastNameLetter').hide();
    }
  }
   else if(type== 3){
    let lastNameVal = $('#nameEdit').val();
    if ( !pattern.test(lastNameVal)  ) {
      $('#nameEditLetter').show();
    }else{
      $('#nameEditLetter').hide();
    }
  }
   else if(type== 4){
    let lastNameVal = $('#lastNameEdit').val();
    if ( !pattern.test(lastNameVal)  ) {
      $('#lastNEditLetter').show();
    }else{
      $('#lastNEditLetter').hide();
    }
  }


}