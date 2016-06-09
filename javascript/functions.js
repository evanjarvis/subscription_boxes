function logout(){
	//$.get("../templates/functions.php");
	alert("Now logging out");
$.ajax({
      url:'javascript/functions.php',
      complete: function (response) {
          $('#guts').html(response.responseText);
      },
      error: function () {
          $('#guts').html('An error has occured!');
      }
  });
  return false;
}

