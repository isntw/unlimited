$('.theCircle').click(function() {
  	var checkbox = $(this).find('input')[0];
  	var isChecked = $(checkbox).is(':checked');
  	if(!isChecked){
  		checkbox.checked = true;
  		$(this).addClass('checked');
  	}else{
  		checkbox.checked = false;
  		$(this).removeClass('checked');
  	}


})

$('#selectTickets').on('hidden.bs.modal', function(e) {
  	var tickets = [];
  	$('input.fa:checked').each(function(i, item) {
  		tickets.push(this.getAttribute('data-id'));
  	})
  	if(tickets.length < 1) {
  		alert('You must select at least 1 ticket before next step');
  		return false;
  	}

  	$.ajax({
  		url: window.settings.url + 'requests/processTickets.php',
  		type: 'POST',
  		data: {tickets: JSON.stringify(tickets)},
  		success: function(res){
  			if(parseInt(res) === 1) window.location.href = window.settings.url + 'final.php';
  			else {
  				alert('Something gone wrong!');
  				return false;
  			}
  		},
   		error: function (jqXHR, exception) {
  			 var msg = '';
	        if (jqXHR.status === 0) {
	            msg = 'Not connect.\n Verify Network.';
	        } else if (jqXHR.status == 404) {
	            msg = 'Requested page not found. [404]';
	        } else if (jqXHR.status == 500) {
	            msg = 'Internal Server Error [500].';
	        } else if (exception === 'parsererror') {
	            msg = 'Requested JSON parse failed.';
	        } else if (exception === 'timeout') {
	            msg = 'Time out error.';
	        } else if (exception === 'abort') {
	            msg = 'Ajax request aborted.';
	        } else {
	            msg = 'Uncaught Error.\n' + jqXHR.responseText;
	        }
	        alert(msg);
	        return false;

  		}
  	})
})


// function statecheck(layer) {
// 	var myLayer = document.getElementById(layer);
//     var input = myLayer.childNodes[0];
// 	if(input.checked == true){
// 			myLayer.style.backgroundColor = "#bff0a1";
// 		} else {
// 		myLayer.style.backgroundColor = "#eee";
// 	};
	
// }

// $( "input" )
//   .change(function() {
//     var $input = $( this );
//     $( "p" ).html( ".attr( 'checked' ): <b>" + $input.attr( "checked" ) + "</b><br>" +
//       ".prop( 'checked' ): <b>" + $input.prop( "checked" ) + "</b><br>" +
//       ".is( ':checked' ): <b>" + $input.is( ":checked" ) + "</b>" );
//   })
//   .change();

// function validate(){
// 	var myLayer = document.getElementById('circle	');
//     var remember = document.getElementById('ticket-text');
//     if (remember.checked){
//         myLayer.style.color = "#bff0a1";
//     }else{
//         alert("You didn't check it! Let me check it for you.")
//     }
// }