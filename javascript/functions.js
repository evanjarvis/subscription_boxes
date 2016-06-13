function logout(){
	//$.get("../templates/functions.php");
	alert("Now logging out");
$.ajax({
      url:'javascript/logout.php',
      complete: function (response) {
          $('#guts').html(response.responseText);
      },
      error: function () {
          $('#guts').html('An error has occured!');
      }
  });
  return false;
}

function login(){
	u = document.getElementById('username').value;
	p = document.getElementById('password').value;
	alert(u.p);
/*
	$.ajax({
		url:'../templates/login.php',
		type: "POST",
		data: {u:username,p:password},
		complete: function(response) {
			$('#guts').html(response.responseText);
		},
		error: function () {
			$('#guts').html('An error has occured!');
		}
	});
	alert("login done");
	return false;*/
}

function checked(){
	var max = 3;
	$('input.favorite').on('change', function(evt) {
		if($(this).siblings(':checked').length >= max){
			this.checked = false;
		}
	});
}
