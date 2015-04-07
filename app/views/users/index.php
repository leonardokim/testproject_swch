<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body>

<form id ="sweetch_register">
	<label for="email"></label>
	<input type="email" name="email" id="email" placeholder="이메일을 입력해주세요">
	<div id="id_res"></div>
	<br>
	<label for="password"></label>
	<input type="password" name="password" id="password" placeholder="특별한 비밀번호를 입력해주세요">
	<div id="pass_res"></div>
	<br>
	<label for="nick"></label>
	<input type="text" name="nick" id="nick" placeholder="창의적인 이름을 입력해주세요">
	<div id="nick_res"></div>
	<br>
	<label for="sex"></label>
	<input type="radio" name="sex" id="sex" value="m">male
	<input type="radio" name="sex" id="sex" value="f">female
	<div id="sex_res"></div>
	<br>
	<div id="results"></div>
	<input type="submit">
</form>
<script type="text/javascript">

$(function(){
	$("#email").on('keyup blur',function(){
		var email_check = '';
		$.post('users/email',{
			email: $("#email").val()
		}, function(data) {
			$.each(data, function() {
				email_check += this;
			});
			$("#id_res").html(email_check);
		});
	});
	$("#password").on('keyup blur',function(){
		var pass_check = '';
		$.post('users/pass',{
			password: $("#password").val()
		}, function(data) {
			$.each(data, function() {
				pass_check += this;
			});
			$("#pass_res").html(pass_check);
		});
	});
	$("#nick").on('keyup blur',function(){
		var nick_check = '';
		$.post('users/nick',{
			nick: $("#nick").val()
		}, function(data) {
			$.each(data, function() {
				nick_check += this;
			});
			$("#nick_res").html(nick_check);
		});
	});
	$("#sex").on('focus blur',function(){
		if(!$(':input:radio[name=radioButtonName]:checked').val())
		{
			$("#sex_res").html("성별을 선택해 주세요.");
	  	}
	});
});

///////////////////////////////////////////////////////////////////////////
$(function(){
	$("#sweetch_register").on("submit",function(f){
		f.preventDefault();
		var results = '';
		$.post('users/register',{
			email: $("#email").val(),
			password: $("#password").val(),
			nick: $('#nick').val(),
			sex: $('#sex').val()
		}, function(data) {
			$.each(data, function() {
				results += this;
			});
			$("#results").html(results);
		});
	});
});
/////////////////////////////////////////////////////////////////////////////
</script>
</body>
</html>