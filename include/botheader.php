<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900&subset=latin,cyrillic'
      rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="/js/mobile_check.js"></script>
<script src="/js/mask.min.js"></script>
<script type="text/javascript" src="/js/script.js"></script>
<script src="/js/ajax.js"></script>

<script>
    var called = 0;
    $('#phone').mask('+7(000)000-00-00');
</script>
</head>
<body>
<div id="shader" class="shaderanim">
    <div id="mainloader"></div>
</div>
<div class="makeorderbtn_b">
    <div class="angle bigangle_b expandable">
        <div class="angletext bigangletext_b expandcontent">ЗАКАЗАТЬ</div>
        <div class="angleimg_b expandcontent"></div>
        <div class="makeorder">
            <h1 id="makeorderh1">Оставить заявку</h1>
            <input type="text" id="email" placeholder="E-Mail:">
            <button id="submit_email">
                Оставить заяку
            </button>
            <h3 id="makeorderh3">Или оставьте свой телефон и мы перезвоним вам через минуту</h3>
            <input type="text" id="phone" placeholder="Телефон:">
            <button id="submit_call">Позвоните мне</button>
            <div id="timing">00:60:00</div>
            <div id="recallquestion">Мы дозвонились вам?</div>
            <button id="recallbutton">Позвонить снова</button>
            <div id="tnx">Спасибо! <br> Ожидайте сообщения</div>
        </div>
        <div class="angle closeangle_b">
            <div class="angletext bigangletext closetext">ЗАКРЫТЬ</div>
            <div class="angleimg closeimg"></div>
        </div>
    </div>


</div>
<a href="/">
    <div class="arrowback"></div>
</a>
<div class="scroller">
</div>