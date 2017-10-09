function myFunction() {
//var name = $("#competitionName").val();
//var tickets = $("#ticketsNumber").val();
  var name = document.getElementById("competitionName").value;
  var tickets = document.getElementById("ticketsNumber").value;



  // AJAX Code To Submit Form.
  $.ajax({
    type: "POST",
    url: "././requests/addCompetition.php",
    data: {
      competitionName: name,
      ticketsNumber: tickets

    },
    cache: false,
    success: function(data){
    alert("Competition was succefull created.");
    }
  });

  return false;
}


