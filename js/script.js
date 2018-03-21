$(window).load(function () {
    $('#shader').fadeOut('slow', function () {
        $(this).remove();
    });
});

function recolor(){
    $('.bigtext')[i].style.color = "#FFF";
    $('.bigtext')[i].style.backgroundColor = "rgba(22, 22, 43, 1)";
    $('.smalltext')[i].style.backgroundColor = "rgba(22, 22, 43, 1)";
    $('.overlayblack')[i].style.opacity = '0.75 ';
}

function recall(j){
    var countdown = setInterval(function () {
        if (time > 0) {
            time -= 1;
        }
        else {
            clearInterval(countdown);
            $('#timing').fadeOut();
            if (j == 1){
                $('#recallbutton').fadeIn();
                $('#recallquestion').fadeIn();
            }
            else{
                $('#submit_call').fadeIn();
                $('#phone').fadeIn();
            }
        }
        if (time >= 1000) {
            document.getElementById('timing').innerHTML = "00:" + String(time).substr(0, 2) + ":" + String(time).substr(2, 4);
        }
        else if (time < 1000 && time >= 100) {
            document.getElementById('timing').innerHTML = "00:0" + String(time).substr(0, 1) + ":" + String(time).substr(1, 3);
        }
        else if (time < 100 && time >= 10) {
            document.getElementById('timing').innerHTML = "00:00:" + String(time).substr(0, 2);
        }
        else if (time < 10) {
            document.getElementById('timing').innerHTML = "00:00:0" + String(time).substr(0, 1);
        }
    }, 10);

    $('#timing').fadeIn();
}

$(document).ready(function () {
    h = window.screen.height;
    b = $('.block').height();
    b1 = window.screen.width;

    $('.textwrap').css('top', 0.5 * ($('.overlayblacker').height() - $('.textwrap').height()));
    $('.logobigtext').css('margin-bottom', b / 100 * 3);
    $('.content1').css('top', (b - $('.content1').height()) / 2);
    $('.bigtext').css('top', b / 100 * 60);
    $('.smalltext').css('top', (b / 100 * 60) - 1 + $('.bigtext').height());

    lz = (h - b) / 2;
    bh = $('body').height();
    var sc = 0;
    var ex = 0;
    var ba = 0;
    var lastblock = $('.block').length - 2;

    setTimeout(function () {
        $('.scroller').fadeOut();
    }, 3000);


    $(".bigangle_b").click(function () {
        if (ex == 0) {
            $('.bigangle_b').css('border-top', '0vh solid rgba(24, 22, 43, 0)');
            $('.bigangle_b').css('border-left', '0vh solid rgba(24, 22, 43, 0)');
            $('.expandcontent').fadeOut('fast', function () {
                ex = 1;
                $('.closeangle').fadeIn('slow');
            });
            $('.closeangle_b').fadeIn('slow');
            $('.bigangle_b').css('transform', 'rotate(0)');
            $('.bigangle_b').css('height', '100vh');
            $('.bigangle_b').css('width', '100vw');
            $('.bigangle_b').css('background-color', 'rgba(24,22,43,1)');
            $('.bigangle_b').css('cursor', 'default');
            $('.closeangle').css('border-bottom', '20vh solid rgba(24, 22, 43, 1)');
            $('.closeangle').css('border-left', '20vh solid rgba(24, 22, 43, 0)');
            $('.closetext').css('color', 'rgba(255, 255, 255, 1)');
            $('.closeangle').fadeOut('slow');
            $('.bigangle_b').css('cursor', 'default');
            $('.makeorder').fadeIn();
            $('.closeimg').fadeIn()
        }
    });

    $('.closeangle_b').click(function () {
        if (ex == 1) {
            $('#columns').removeClass('fixed');
            $('.bigangle_b').fadeIn();
            $('.bigangle_b').css('border-top', '25vh solid rgba(255, 255, 255, 1)');
            $('.bigangle_b').css('border-left', '25vh solid transparent');
            $('.bigangle_b').css('height', '0vh');
            $('.bigangle_b').css('width', '0vw');
            $('.bigangle_b').css('background-color', 'rgba(24,22,43,0)');
            $('.bigangle_b').css('cursor', 'pointer');
            $('.expanrecolordcontent').fadeIn('fast', function () {
                ex = 0;
            });

            $('.closeangle').css('border-bottom', '20vh solid rgba(255, 255, 255, 0)');
            $('.closeangle').css('border-left', '20vh solid rgba(255, 255, 255, 0)');

            $('.closetext').css('color', 'rgba(255, 255, 255, 0)');
            $('.closeangle_b').fadeOut(200);
            $('.makeorder').fadeOut(200);
            $('.closeimg').fadeOut();
        }
    });

    window.onscroll = function () {
        sc = window.pageYOffset;
        ba = Math.round((sc - lz) / b + 0.5) - 1;
        if (bh - h - 100 <= sc) {
            ba = lastblock;
        }


        if (ba != -1) {
            $('.overlayblack')[ba].style.opacity = '0';
            $('.bigtext')[ba].style.backgroundColor = "rgba(255, 255, 255, 1)";
            $('.smalltext')[ba].style.backgroundColor = "rgba(255, 255, 255, 1)";
            $('.bigtext')[ba].style.color = "#24160D";
            for (var i = 0; i < 6; i++) {
                if (i != ba) {

                    recolor()
                }
            }
        }
        else {
            for (var i = 0; i < 6; i++) {
                recolor()
            }

        }
    };

    $("#submit_call").on('click', function () {
        var time = 6000;
        if (document.getElementById('phone').value != '') {


            recall(0);
            $('#submit_call').fadeOut();
            $('#phone').fadeOut();
        }
    });

    $("#recallbutton").on('click', function () {
        var time = 6000;
        if (document.getElementById('phone').value != '') {

            document.getElementById('callback-frame').contentWindow.document.getElementsByClassName('actionCallAgain')[0].click();

            recall(1);
            $('#recallbutton').fadeOut();
            $('#recallquestion').fadeOut();
        }
    })

});