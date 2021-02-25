
$(document).ready(function(){
  var clicked = false;
  $("#selectAllBoxes").on("click", function() {
    $(".checkBoxes").prop("checked", !clicked);
    clicked = !clicked;
    this.innerHTML = clicked ? 'Deselect' : 'Select';
  });

  });



