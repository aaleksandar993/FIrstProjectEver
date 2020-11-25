

function attach_delete(){
  $('.delete').off();
  $('.delete').click(function(){
    console.log("click");
    $(this).closest('.repeater-item-education').remove();
  });
}

function deleteLanguage(){
  $('.delete-language').off();
  $('.delete-language').click(function(){
    console.log("click");
    $(this).closest('.repeater-item-language').remove();
  });
}

function deleteSoftware(){
  $('.delete-software').off();
  $('.delete-software').click(function(){
    console.log("click");
    $(this).closest('.repeater-item-software').remove();
  });
}

function deleteSkill(){
  $('.delete-skill').off();
  $('.delete-skill').click(function(){
    console.log("click");
    $(this).closest('.repeater-item-skill').remove();
  });
}

function deleteExperience(){
  $('.delete-experience').off();
  $('.delete-experience').click(function(){
    console.log("click");
    $(this).closest('.repeater-item-experience').remove();
  });
}

//Clone the hidden element and shows it
$('.add-one-education').click(function(){
  $('.repeater-row-education').first().clone().removeClass('d-none').appendTo('.dynamic-stuff-education');
  attach_delete();
});

$('.add-one-experience').click(function(){
  $('.repeater-row-experience').first().clone().removeClass('d-none').appendTo('.dynamic-stuff-experience');
  deleteExperience();
});

$('.add-one-language').click(function(){
  $('.repeater-row-language').first().clone().removeClass('d-none').appendTo('.dynamic-stuff-language');
  deleteLanguage();
});

$('.add-one-software').click(function(){
  $('.repeater-row-software').first().clone().removeClass('d-none').appendTo('.dynamic-stuff-software');
  deleteSoftware();
});

$('.add-one-skill').click(function(){
  $('.repeater-row-skill').first().clone().removeClass('d-none').appendTo('.dynamic-stuff-skill');
  deleteSkill();
});