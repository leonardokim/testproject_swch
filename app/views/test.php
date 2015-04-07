<!doctype html>
<html>
<meta charset="utf-8">
<title>sweetch.tv</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link href='css/main.css' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/earlyaccess/nanumgothic.css' rel='stylesheet' type='text/css'>
<script src="js/navi.js"></script>
<body>
    <div class="wrap" id="wrap">
    <form action="" method="get">
    <div class="searchbox">
      <div class="sboxlimit">
        <input class="search" id="search" type="text" autocomplete="off" placeholder="여기다 쓰세용">
        <span class="searchquit"></span>
      </div>
    </div>
</form>

<nav class="navi">
  <div id="wrapnavi">
    <div class="largelogo" onclick="gohome();"></div>
    <div class="smalllogo" onclick="gohome();"></div>
    <div class="navi_menu">
            <span>MAKE</span>
            <span>UNPACK</span>
            <span>PLAY</span>
            <span class="searchicon"></span>
    </div>
    <div class="navi_login" onclick="maskopen();">LOGIN</div>
    <div class="man"></div>
</nav>

        <div class="page" id="page">
<iframe width="1616" height="909" src="https://www.youtube.com/embed/SGSE_XPF4_g?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
<!-- BACKGROUND MASK -->
<div id="mask"></div>
<!-- LOGIN -->
<form action="" name="loginform" method="post" id="loform">
      <div class="login" id="login">
        <div class="boxtitle">LOGIN ON SWEETCH<span class="loginquit" id="close" onclick="btnexit();"></span></div>
        <input type="text" id="loemail" placeholder="USER EMAIL (abc@abc.com)" autocomplete="off">
        <input type="password" id="lopw" placeholder="PASSWORD">
        <div class="errorbox">
            <p id="e1"> error1</P>
            <p id="e2"> error2</P>
        </div>
        <div class="captcha"></div>
        <div class="btwrap">
          <div class="boxbt" id="signbt">SIGN IN SWEETCH</div>
          <div class="boxbt" id="loginbt">LOG IN</div>
        </div>
        <span class="findpw">FORGOT YOUR DETAIL?</span>
      </div>
</form>
<!-- REGISTER -->
<form action="registercheck.php" name="registerform" method="post" id="reform">
      <div class="register" id="register">
        <div class="boxtitle">REGISTER ON SWEETCH<span class="registquit" id="close1" onclick="btnexit();"></span></div>
        <input type="text" class="inputemail" id="reemail" name="email" placeholder="USER EMAIL (abc@abc.com)" autocomplete="off" onkeyup="checkemail();">
        <span id="rech1" class="cxicon"></span>
        <div class="errorbox regierror">
            <p id="e3"> error3</p>
            <p id="e4"> error4</p>
        </div>
        <input type="text" class="inputnick" id="renick" name="nick" placeholder="YOUR NICK NAME (sweetch2015)" autocomplete="off" onkeyup="checknick();" onblur="checkgender();">
        <span id="rech2" class="cxicon"></span>
        <div class="errorbox regierror">
            <p id="e5"> error5</p>
            <p id="e6"> error6</p>
            <p id="e7"> error7</p>
        </div>
        <div class="gender">
            <input type="radio" id="radio1" name="radios" value="m">
            <label for="radio1" class="radiobt" id="man"></label>
            <input type="radio" id="radio2" name="radios" value="w">
            <label for="radio2" class="radiobt" id="woman"></label>
        </div>
        <span id="rech3" class="cxicon"></span>
        <div class="errorbox regierror">
            <p id="e8"> error8</p>
        </div>
        <input type="password" class="inputpw" id="repw" name="password" placeholder="PASSWORD (abcd1234dk12)" onkeyup="checkpw();" onfocus="checkgender();">
        <span id="rech4" class="cxicon"></span>
        <div class="errorbox regierror">
            <p id="e9"> error9</p>
            <p id="e10"> error10</p>
            <p id="e11"> error11</p>
        </div>
        <div class="captcha"></div>
        <div class="btwrap" id="regibtwrap">
            <div class="boxbt" id="registlobt">LOG IN</div>
            <div class="boxbt" id="registbt" onclick="clickregistbt();">REGISTER</div>
        </div>
      </div>
  </form>

<?= Form::open() ?>
<?= Form::text('namesss') ?>
<?= Form::close() ?>



</body>
</html>