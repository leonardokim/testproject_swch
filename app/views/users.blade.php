<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body>

<form id ="register">
	<label for="email">Your email:</label>
	<input type="email" name="email" id="email">
	<br>
	<label for="password">Your password:</label>
	<input type="password" name="password" id="password">
	<br>
	<input type="submit">
</form>
<div id="results"></div>
<script type="text/javascript">
$(function(){
	$("#register").on("submit",function(e){
		e.preventDefault();
		var results = '';
		$.post('users/register',{
			email: $("#email").val(),
			password: $("#password").val ()
		}, function(data) {
			$.each(data, function() {
				results += this + '<br>';
			});
			$("#results").html(results);
		});
	});
});
</script>

</body>
</html>