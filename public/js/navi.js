                                                                    /* MASK */
function blur(element, size){
     var filValue = 'blur('+size+'px)';
     $(element)
       .css('filter',filValue)
       .css('webkitFilter',filValue)
       .css('mozFilter',filValue)
       .css('oFilter',filValue)
       .css('msFilter',filValue);
}

function wrapWindowByMask(){
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();

    $('#mask').css({'width':maskWidth, 'height':maskHeight});
    $('#mask').fadeIn(300);
    blur("#wrap",6);
}
                                                                    /* NAVIGATION */
$(document).ready(function(){
    var uscroll = 1;

    $(window).scroll(function(){
    var y = $(window).scrollTop();

    if(y > uscroll){
        $('.navi').addClass("navismall");
        $('.navi_menu').addClass("menumoving");
        $('.largelogo').addClass("largemoving");
        $('.smalllogo').addClass("smallmoving");
    } else {
        $('.navi').removeClass("navismall");
        $('.navi_menu').removeClass("menumoving");
        $('.largelogo').removeClass("largemoving");
        $('.smalllogo').removeClass("smallmoving");
    }
    });

    $('.searchicon').click(function(){
            var y = $(window).scrollTop();
        if(y > uscroll){
            $('.searchbox').addClass("smallboxopen");
        } else {
            $('.searchbox').addClass("largeboxopen");
        }
    });
    $('.searchquit').click(function(){
            $('.searchbox').removeClass("smallboxopen");
            $('.searchbox').removeClass("largeboxopen");
            $('#search').val('');
    });
});
$(document).ready(function(){

    $('#memchar').click(function(){
           $('#sicon').animate({
                opacity:"0"
                },600);
           $('#docnav').animate({
                height:'280'
                },500
                );
           $('.memcharghost').css("display","block");
    });

    $('#sicon').click(function(){
           $('#sicon').animate({
                opacity:"0"
                },600);
           $('#docnav').animate({
                height:'280'
                },500
                );
           $('.memcharghost').css("display","block");
    });

    $('#username').click(function(){
           $('#sicon').animate({
                opacity:"0"
                },600);
           $('#docnav').animate({
                height:'280'
                },500
                );
           $('.memcharghost').css("display","block");
    });
});

$(document).ready(function(){

    $('.page').click(function(){
           $('#docnav').animate({
                height:'0'
                },300
                );
           $('.memcharghost').css("display","none");
           $('.searchbox').removeClass("smallboxopen");
           $('.searchbox').removeClass("largeboxopen");
           $('#search').val('');
    });
    $('.page').click(function(){
           $('#docnav').animate({
                height:'0'
                },300
                );
           $('.memcharghost').css("display","none");

           $('.searchbox').removeClass("smallboxopen");
           $('.searchbox').removeClass("largeboxopen");
           $('#search').val('');
    });

});
$(document).ready(function(){

    $('.memcharghost').click(function(){
           $('#docnav').animate({
                height:'0'
                },300
                );
    $('.memcharghost').css("display","none");

    });
});

function gohome(){
    location.href="./1.php";
}
                                                                    /* LOGIN */
function maskopen(){
    $('#login').fadeIn(300);
    wrapWindowByMask();
}

function btnexit(){
        $('#login').fadeOut(100);
        $('#register').fadeOut(100);
        $('#mask').fadeOut(300);
        $('#loemail').val('')
        $('#lopw').val('')
        $('#reemail').val('')
        $('#repw').val('')
        $('#renick').val('')
        $('input[type="radio"]:checked').each(function(){
            $(this).attr('checked',false);
        });
        blur("#wrap",0);
        }
$(document).ready(function(){
    $('#signbt').click(function(){
        $('#login').fadeOut(300)
        $('#register').fadeIn(300)
        $('#loemail').val('')
        $('#lopw').val('')
        $('.inputemail').select();
        $('.inputemail').removeClass("inputok");
        $('.inputemail').removeClass("errorpoint");
        $('.inputnick').removeClass("inputok");
        $('.inputnick').removeClass("errorpoint");
        $('.inputpw').removeClass("inputok");
        $('.inputpw').removeClass("errorpoint");
        $('#rech1').css("display","none");
        $('#rech2').css("display","none");
        $('#rech3').css("display","none");
        $('#rech4').css("display","none");
    });
});

$(document).ready(function(){
    $('#registlobt').click(function(){
        $('#register').fadeOut(300)
        $('#login').fadeIn(300)
        $('#reemail').val('')
        $('#repw').val('')
        $('#renick').val('')
        $('input[type="radio"]:checked').each(function(){
            $(this).attr('checked',false);
        });
    });
});


var ajax_return = 'true';

function checkemail(){
    var email = $('#reemail').val();
    var regemail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
    if(!$('#reemail').val()){
        $('#rech1').css("backgroundPosition","-35px 0");
        $('#rech1').css("display","block");
        $('.inputemail').removeClass("inputok");
        $('.inputemail').addClass("errorpoint");
    }else{
    $('.inputemail').removeClass("errorpoint");
        if(ajax_return == 'true'){
            if(!regemail.test(email)){
                $('#rech1').css("backgroundPosition","-35px 0");
                $('#rech1').css("display","block");
                $('.inputemail').removeClass("inputok");
                $('.inputemail').addClass("errorpoint");
            }else{
                $('#rech1').css("backgroundPosition","0 0");
                $('#rech1').css("display","block");
                $('.inputemail').addClass("inputok");
            }
        }else{
            $('#rech1').css("backgroundPosition","-35px 0");
            $('#rech1').css("display","block");
            $('.inputemail').removeClass("inputok");
            $('.inputemail').addClass("errorpoint");
        }
    }
}


function checknick(){
    var nick = $('#renick').val();
    var regnick = /^[a-z0-9]{2,10}$/i;
        
        if(!$('#renick').val()){
            $('#rech2').css("backgroundPosition","-35px 0");
            $('#rech2').css("display","block");
            $('.inputnick').removeClass("inputok");
            $('.inputnick').addClass("errorpoint");
        }else{
        $('.inputnick').removeClass("inputok");
        $('.inputnick').removeClass("errorpoint");
            if(ajax_return == 'true'){
                if(!regnick.test(nick)){
                    $('#rech2').css("backgroundPosition","-35px 0");
                    $('#rech2').css("display","block");
                    $('.inputnick').removeClass("inputok");
                    $('.inputnick').addClass("errorpoint");
                }else{
                    $('#rech2').css("backgroundPosition","0 0");
                    $('#rech2').css("display","block");
                    $('.inputnick').addClass("inputok");
                }
            }else{
                $('#rech2').css("backgroundPosition","-35px 0");
                $('#rech2').css("display","block");
                $('.inputnick').removeClass("inputok");
                $('.inputnick').addClass("errorpoint");
            }
        }
}
function checkgender(){
    var gender = $('input[name="radios"]:checked').val();
    if(!gender)
    {
        $('.radiobt').addClass("errorpoint");
        $('#rech3').css("backgroundPosition","-35px 0");
        $('#rech3').css("display","block");
    }else{
        $('.radiobt').removeClass("errorpoint");
        $('#rech3').css("backgroundPosition","0 0");
        $('#rech3').css("display","block");
    }
}
function checkpw(){
    var pw = $('#repw').val();
    var regpw = /^[a-zA-Z0-9]{8,16}$/;
        
        if(!$('#repw').val()){
            $('#rech4').css("backgroundPosition","-35px 0");
            $('#rech4').css("display","block");
            $('.inputpw').removeClass("inputok");
            $('.inputpw').addClass("errorpoint");
        }else{
        $('.inputpw').removeClass("inputok");
        $('.inputpw').removeClass("errorpoint");
            if(!regpw.test(pw)){
                $('#rech4').css("backgroundPosition","-35px 0");
                $('#rech4').css("display","block");
                $('.inputpw').removeClass("inputok");
                $('.inputpw').addClass("errorpoint");
            }else{
                $('#rech4').css("backgroundPosition","0 0");
                $('#rech4').css("display","block");
                $('.inputpw').addClass("inputok");
            }
        }
}
function clickregistbt(){
    var gender = $('input[name="radios"]:checked').val();
    var pw = $('#repw').val();
    var regpw = /^[a-zA-Z0-9]{8,16}$/;

    if(ajax_return == 'true' && gender && pw && regpw.test(pw)){
        $('#registbt').click(function(){
            $('#reform').submit();
        });
    }else{
        $('#registbt').attr("disabled",true);
    }
}
