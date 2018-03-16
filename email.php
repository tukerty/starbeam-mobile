<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/class.phpmailer.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/lib/class.smtp.php');
$monthes = array(
    1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
    5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
    9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
);
$datestring = date('d ') . $monthes[(date('n'))] . date(' Y');
$recepient = $_GET["email"];
$refer = $_GET["refer"];
$mobile = $_GET["ismobile"];
$number = rand ( 100000 , 999999 );
$htmlBody = '<html lang="en">
<head>
    <title>Starbeam | Ваша заявка принята</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
        @font-face {font-family: "sofia";  src: url("http://starbeam.ru/fonts/SofiaProRegular-webfont.woff") format("woff");  mso-font-alt: "Arial";  font-weight: normal !important;  font-style: normal !important;}
        body,table,td,a{
            -webkit-text-size-adjust:100%;
            -ms-text-size-adjust:100%;
            -webkit-font-smoothing: antialiased;
        }
        table,td{
            mso-table-lspace:0pt;
            mso-table-rspace:0pt;
        }
        img{
            -ms-interpolation-mode:bicubic;
        }
        body{
            margin:0;
            padding:0;
        }
        img{
            border:0;
            height:auto;
            line-height:100%;
            outline:none;
            text-decoration:none;
        }
        table{
            border-collapse:collapse !important;
        }
        body{
            height:100% !important;
            margin:0;
            padding:0;
            width:100% !important;
        }

        .appleBody a{
            color: #18162b !important;
            text-decoration: underline !important;;
        }

        .appleFooter a{
            color: #343434 !important;
            text-decoration: none;
        }
        td[class=btn]{
            width:50% !important;
        }

        span.preheader { display: none !important; }
        @media screen and (max-width: 525px){
            table[class=wrapper]{
                width:100% !important;
            }

        }	@media screen and (max-width: 525px){
            td[class=wrapper]{
                width:100% !important;
            }

        }	@media screen and (max-width: 525px){
            td[class=mobile-hide]{
                display:none;
            }

        }	@media screen and (max-width: 525px){
            img[class=mobile-show]{
                display:block !important;
                height:60px !important;
                width:60px !important;
                overflow:auto !important;
            }

        }	@media screen and (max-width: 525px){
            img[class=mobile-hide]{
                display:none !important;
            }

        }	@media screen and (max-width: 525px){
            img[class=img-max]{
                max-width:100% !important;
                width:100% !important;
                height:auto !important;
            }

        }	@media screen and (max-width: 525px){
            img[class=img-picture]{
                max-width:60% !important;
                width:60% !important;
                height:auto !important;
                float:right !important;
            }

        }	@media screen and (max-width: 525px){
            table[class=responsive-table]{
                width:100%!important;
            }

        }	@media screen and (max-width: 525px){
            table[class=responsive-column]{
                width:100%!important;
                padding:0px 0px 15px 0px !important;
                display:block !important;
            }
        }	@media screen and (max-width: 525px){
            td[class=top-padding]{
                padding: 0px 0px 10px 0px !important;
            }

        } @media screen and (max-width: 525px){
            td[class=slice-padding]{
                padding:0px 15px 0px 15px !important;
            }

        }	@media screen and (max-width: 525px){
            td[class=smaller-padding]{
                padding:15px 0px 15px 0px !important;
            }

        }
        @media screen and (max-width: 525px){
            td[class=section-padding]{
                padding: 0px 10px 20px 10px !important;
            }

        }
        @media screen and (max-width: 525px){
            td[class=mobile-wrapper]{
                padding:0 !important;
            }

        }	@media screen and (max-width: 525px){
            td[class=title]{
                font-size: 16px !important;
            }

        }	@media screen and (max-width: 525px){
            td[class=btn]{
                width:80% !important;
            }

        }
    </style>
    <!--[if gte mso 9]>
    <style type="text/css">
        .img-max {
            width: 246px !important;
        }
    </style>
    <![endif]-->
</head>

<body style="margin: 0; padding: 0;">
<div style="display:none !important; font-size:1px; color:#FFFFFF;">Starbeam | Заявка принята</div>
<!-- HEADER LOGO -->
<div>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#18162b" style="background-color: #18162b;">
            <div align="center" style="padding: 0px 20px 0px 20px;">
                <table border="0" cellpadding="0" cellspacing="0" width="600" class="wrapper" align="center">
                    <tr align="center">
                        <td style="padding: 15px 0px 10px 0px; text-align: center; width: 400px;" class="logo" align="center" >
                            <a href="https://starbeam.ru" title="Starbeam.ru">
                                <img alt="stabeam.ru" src="https://starbeam.ru/images/log1.png" width="100" border="0">
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
<!-- ORDER CONFIRMATION -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#F6F6F6" align="center" style="padding: 20px 15px 20px 15px;" class="top-padding">
            <table border="0" cellpadding="0" cellspacing="0" width="600" class="responsive-table">
                <!-- LONGER WIDTH THAN 600 FOR OUTLOOK 07,10,11 -->
                <tr>
                    <td>
                        <!-- TWO COLUMNS -->
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                    <table cellpadding="0" cellspacing="0" border="0" width="600" align="left" class="responsive-table">
                                        <tr>
                                            <td valign="top" align="left">
                                                <table cellpadding="0" cellspacing="0" border="0" class="responsive-table">
                                                    <tr>
                                                        <td align="center" bgcolor="#FFFFFF" valign="middle" width="600" class="wrapper" style="padding: 20px; border: 1px solid #EFEFEF;">
                                                            <table cellspacing="0" cellpadding="0" style="width: 100%;" class="responsive-table" width="300" valign="top">
                                                                <tr cellspacing="0" cellpadding="0">
                                                                    <td cellspacing="0" cellpadding="0" width="33%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; color: #888888 !important; font-size: 14px; line-height: 20px; font-weight: normal;"> <span style="color: #343434; text-transform: uppercase; font-size: 12px; -webkit-font-smoothing: auto; font-weight: bold;" class="appleBody">Время заявки</span>
                                                                        <br /> <span class="appleBody">'.$datestring.'</span>

                                                                    </td>
                                                                    <td cellspacing="0" cellpadding="0" width="33%" style="text-align: right; font-family: Helvetica, Arial, sans-serif; color: #888888 !important; font-size: 14px; line-height: 20px; font-weight: normal;"> <span style="color: #343434; text-transform: uppercase; font-size: 12px; -webkit-font-smoothing: auto; font-weight: bold;    float: right;" class="appleBody">Номер заявки</span>
                                                                        <br /> <a href="#" style="color: #18162b !important;">'.$number.'</a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END ORDER CONFIRMATION -->
<!-- COPY SIMPLE SECTION-->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#F6F6F6" align="center" style="padding: 0px 15px 20px 15px;" class="section-padding">
            <table border="0" cellpadding="0" cellspacing="0" width="600" class="responsive-table">
                <!-- LONGER WIDTH THAN 600 FOR OUTLOOK 07,10,11 -->
                <tr>
                    <td>
                        <!-- TWO COLUMNS -->
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                    <table cellpadding="0" cellspacing="0" border="0" width="600" align="left" class="responsive-table">
                                        <tr>
                                            <td valign="top" align="left">
                                                <table cellpadding="0" cellspacing="0" border="0">
                                                    <tr>
                                                        <td align="center" bgcolor="#FFFFFF" valign="middle" width="600" class="wrapper" style="padding: 20px; border: 1px solid #EFEFEF;">
                                                            <table cellspacing="0" cellpadding="0" style="width: 100%;" class="responsive-table" width="300">
                                                                <!-- STYLE WIDTH FOR CHROME BROWSER -->
                                                                <tr cellspacing="0" cellpadding="0">
                                                                    <td cellspacing="0" cellpadding="0" colspan="4" class="title" style="font-family: Helvetica, Arial, sans-serif; color: #343434; font-size: 18px; font-weight: normal; text-align: left; line-height: 1; padding: 0px 0px 5px 0px; text-transform: uppercase; -webkit-font-smoothing: auto; font-weight: bold;">Ваша заявка принята</td>
                                                                </tr>
                                                                <tr cellspacing="0" cellpadding="0">
                                                                    <td cellspacing="0" cellpadding="0" colspan="4" class="title" style="font-family: Helvetica, Arial, sans-serif; color: #888888; font-size: 14px; font-weight: normal; text-align: left; line-height: 1; padding: 0px 0px 20px 0px; -webkit-font-smoothing: antialiased;">Ожидайте ответного сообщения</td>
                                                                </tr>
                                                                <tr cellspacing="0" cellpadding="0">
                                                                    <td cellspacing="0" cellpadding="0" colspan="4" style="text-align: left; font-family: Helvetica, Arial, sans-serif; color: #888888 !important; font-size: 14px; line-height: 20px; font-weight: normal; padding: 0px 0px 20px 0px;">С вами свяжутся в ближайшее время, а пока вы можете посетить наш сайт и ознакомиться с другими предложениями</td>
                                                                </tr>
                                                                <tr border="0" cellpadding="0" cellspacing="0">
                                                                    <td align="center" bgcolor="#FFFFFF" valign="middle" width="600" class="wrapper" style="padding: 20px 20px 10px 0px; width: 400px;">
                                                                        <a href="https://starbeam.ru/" target="_blank" style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; text-decoration: none; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; font-weight: bold; text-transform: uppercase; background-color: #18162b; border-top: 12px solid #18162b; border-bottom: 12px solid #18162b; border-right: 18px solid #18162b; border-left: 18px solid #18162b; display: inline-block; color: #ffffff;">Посетить сайт</a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END COPY SIMPLE SECTION-->

<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#F6F6F6" align="center" style="padding: 0px 15px 20px 15px;" class="section-padding">
            <table border="0" cellpadding="0" cellspacing="0" width="600" class="responsive-table">
                <!-- LONGER WIDTH THAN 600 FOR OUTLOOK 07,10,11 -->
                <tr>
                    <td>
                        <!-- TWO COLUMNS -->
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                    <!-- LEFT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="290" align="left" class="responsive-table">
                                        <tr>
                                            <td valign="top" align="left">
                                                <table cellpadding="0" cellspacing="0" border="0">
                                                    <tr>
                                                        <td align="center" bgcolor="#FFFFFF" valign="middle" height="310" width="290" class="wrapper" style="border: 1px solid #EFEFEF; width: 400px;">
                                                            <table cellspacing="0" cellpadding="0" width="100%" style="width: 100%;" class="responsive-table">
                                                                <tr cellspacing="0" cellpadding="0">
                                                                    <td cellspacing="0" cellpadding="0" align="center" colspan="4" style="font-family: Helvetica, Arial, sans-serif; color: #333333; font-size: 18px; font-weight: bold; text-align: center; padding: 15px 20px 10px 20px; width: 400px;">
                                                                        <img src="https://starbeam.ru/images/qrcode.png" width="170">
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- RIGHT COLUMN -->
                                    <table cellpadding="0" cellspacing="0" border="0" width="290" align="right" class="responsive-table">
                                        <tr>
                                            <td valign="top" align="left">
                                                <table cellpadding="0" cellspacing="0" border="0">
                                                    <tr>
                                                        <td align="center" bgcolor="#FFFFFF" valign="middle" height="310" width="290" class="wrapper" style="border: 1px solid #EFEFEF; width: 400px;">
                                                            <table cellspacing="0" cellpadding="0" width="100%" style="width: 100%;" class="responsive-table">
                                                                <!-- STYLE WIDTH FOR CHROME BROWSER -->
                                                                <tr cellspacing="0" cellpadding="0">
                                                                    <td cellspacing="0" cellpadding="0" colspan="4" style="text-align: center; font-family: Helvetica, Arial, sans-serif; padding: 10px 20px 10px 20px; color: #343434; text-transform: uppercase; width: 400px;">Телефон</td>
                                                                </tr>
                                                                <tr cellspacing="0" cellpadding="0">
                                                                    <td cellspacing="0" cellpadding="0" colspan="4" style="font-family: Helvetica, Arial, sans-serif; color: #18162b; font-size: 18px; font-weight: bold; text-align: center; padding: 0px 20px 10px 20px;"><span class="appleBody">+7(843)200-04-14</span>
                                                                                                                                            </td>
                                                                </tr>
                                                                <tr cellspacing="0" cellpadding="0">
                                                                    <td cellspacing="0" cellpadding="0" colspan="4" style="text-align: center; font-family: Helvetica, Arial, sans-serif; padding: 10px 20px 10px 20px; color: #343434; text-transform: uppercase;">Email</td>
                                                                </tr>
                                                                <tr cellspacing="0" cellpadding="0">
                                                                    <td cellspacing="0" cellpadding="0" colspan="4" style="text-align: center; font-family: Helvetica, Arial, sans-serif; color: #18162b; padding: 0px 20px 20px 20px; font-weight: bold; font-size: 18px;"> <span class="appleBody"><a href="mailto:contact@starbeam.ru" style="color: #18162b; text-decoration: none !important;">contact@starbeam.ru</a></span>

                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END CS CONTACT ROW SECTION-->
<!-- FOOTER -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#ffffff" align="center" style="padding: 20px 0px;">
            <!-- UNSUBSCRIBE COPY -->
            <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="responsive-table">
                <tr>
                    <td width="100%" align="center" style="padding: 0 0 20px 0; font-size: 14px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#888888;"><strong>Команда Starbeam</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table border="0" cellpadding="0" cellspacing="0" align="center">
                            <tr width="183">
                                <td>
                                    <table border="0" cellpadding="0" cellspacing="0" align="center">
                                        <tr width="157">
                                            <td width="16" align="center" style="padding: 0 10px 20px 10px;">
                                                <a href="https://www.facebook.com/Starbeam" target="blank">
                                                    <img src="https://starbeam.ru/images/facebook_icon.png" width="16" height="16">
                                                </a>
                                            </td>
                                            <td width="19" align="center" style="padding: 0 10px 20px 10px;">
                                                <a href="https://twitter.com/Starbeam" target="blank">
                                                    <img src="https://starbeam.ru/images/twitter_icon.png" width="19" height="16">
                                                </a>
                                            </td>
                                            <td width="16" align="center" style="padding: 0 10px 20px 10px;">
                                                <a href="https://www.instagram.com/Starbeam/" target="blank">
                                                    <img src="https://starbeam.ru/images/instagram_icon.png" width="16" height="16">
                                                </a>
                                            </td>
                                            <td width="16" align="center" style="padding: 0 10px 20px 10px;">
                                                <a href="https://www.vk.com/Starbeam/" target="blank">
                                                    <img src="https://starbeam.ru/images/vk_icon.png" width="16" height="16">
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="100%" align="center" style="padding: 0 10px 0 10px; font-family: Helvetica, Arial, sans-serif; line-height: 24px; color: #888888; font-size: 12px;"> <span class="appleBody">
                          <strong>STARBEAM</strong><br /> Россия, Казань, Вишневского 24
                        </span>

                    </td>
                </tr>
                <tr>
                    <td width="100%" align="center" style="padding: 0 10px 20px 10px; font-family: Helvetica, Arial, sans-serif; line-height: 24px; color: #888888; font-size: 12px;"> <span class="appleBody" style="color:#888888;">
                          <a href="mailto:contact@starbeam.ru" style="color:#888888 !important;">contact@starbeam.ru</a>
                        </span>
                        <span class="hide-mobile">&nbsp; | &nbsp;</span>

                        <span class="appleBody break" style="color:#888888;">
                  <a href="https://starbeam.ru"
                     style="color: #888888 !important;">starbeam.ru</a>
                  </span> <span class="hide-mobile">&nbsp; | &nbsp;</span>
                        <span class="appleBody break" style="color:#888888;">
                            +7(843)200-04-14
                          </span>

                    </td>
                </tr>
                <tr>
                    <td width="100%" align="center" style="padding: 0 0 20px 0; font-size: 14px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#BBBBBB;">Message id:'.rand(1000000,9999999).'
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</div>
</body>
</html>';


$mail = new PHPMailer;
//будем отравлять письмо через СМТП сервер
$mail->isSMTP();
//хост
$mail->Host = 'smtp.timeweb.ru';
//требует ли СМТП сервер авторизацию/идентификацию
$mail->SMTPAuth = true;
// логин от вашей почты
$mail->Username = 'contact@starbeam.ru';
// пароль от почтового ящика
$mail->Password = 'ssByte64';
//указываем способ шифромания сервера
$mail->SMTPSecure = 'ssl';
//указываем порт СМТП сервера
$mail->Port = '465';

//указываем кодировку для письма
$mail->CharSet = 'UTF-8';
//информация от кого отправлено письмо
$mail->From = 'contact@starbeam.ru';
$mail->FromName = 'Команда Starbeam';
$mail->AddAddress($recepient);

$mail->isHTML(true);
$mail->Subject = 'Starbeam | Заявка принята';
$mail->Body = $htmlBody;

if( $mail->send() ){
    echo 'Письмо отправлено';
}else{
    echo 'Письмо не может быть отправлено. ';
    echo 'Ошибка: ' . $mail->ErrorInfo;
}

$htmlBody = '<html lang="en">

<head>
    <title>Starbeam | Ваша заявка принята</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
        @font-face {font-family: "sofia";  src: url("http://starbeam.ru/fonts/SofiaProRegular-webfont.woff") format("woff");  mso-font-alt: "Arial";  font-weight: normal !important;  font-style: normal !important;}
        body,table,td,a{
            -webkit-text-size-adjust:100%;
            -ms-text-size-adjust:100%;
            -webkit-font-smoothing: antialiased;
        }
        table,td{
            mso-table-lspace:0pt;
            mso-table-rspace:0pt;
        }
        img{
            -ms-interpolation-mode:bicubic;
        }
        body{
            margin:0;
            padding:0;
        }
        img{
            border:0;
            height:auto;
            line-height:100%;
            outline:none;
            text-decoration:none;
        }
        table{
            border-collapse:collapse !important;
        }
        body{
            height:100% !important;
            margin:0;
            padding:0;
            width:100% !important;
        }

        .appleBody a{
            color: #18162b !important;
            text-decoration: underline !important;;
        }

        .appleFooter a{
            color: #343434 !important;
            text-decoration: none;
        }
        td[class=btn]{
            width:50% !important;
        }

        span.preheader { display: none !important; }
        @media screen and (max-width: 525px){
            table[class=wrapper]{
                width:100% !important;
            }

        }	@media screen and (max-width: 525px){
            td[class=wrapper]{
                width:100% !important;
            }

        }	@media screen and (max-width: 525px){
            td[class=mobile-hide]{
                display:none;
            }

        }	@media screen and (max-width: 525px){
            img[class=mobile-show]{
                display:block !important;
                height:60px !important;
                width:60px !important;
                overflow:auto !important;
            }

        }	@media screen and (max-width: 525px){
            img[class=mobile-hide]{
                display:none !important;
            }

        }	@media screen and (max-width: 525px){
            img[class=img-max]{
                max-width:100% !important;
                width:100% !important;
                height:auto !important;
            }

        }	@media screen and (max-width: 525px){
            img[class=img-picture]{
                max-width:60% !important;
                width:60% !important;
                height:auto !important;
                float:right !important;
            }

        }	@media screen and (max-width: 525px){
            table[class=responsive-table]{
                width:100%!important;
            }

        }	@media screen and (max-width: 525px){
            table[class=responsive-column]{
                width:100%!important;
                padding:0px 0px 15px 0px !important;
                display:block !important;
            }
        }	@media screen and (max-width: 525px){
            td[class=top-padding]{
                padding: 0px 0px 10px 0px !important;
            }

        } @media screen and (max-width: 525px){
            td[class=slice-padding]{
                padding:0px 15px 0px 15px !important;
            }

        }	@media screen and (max-width: 525px){
            td[class=smaller-padding]{
                padding:15px 0px 15px 0px !important;
            }

        }
        @media screen and (max-width: 525px){
            td[class=section-padding]{
                padding: 0px 10px 20px 10px !important;
            }

        }
        @media screen and (max-width: 525px){
            td[class=mobile-wrapper]{
                padding:0 !important;
            }

        }	@media screen and (max-width: 525px){
            td[class=title]{
                font-size: 16px !important;
            }

        }	@media screen and (max-width: 525px){
            td[class=btn]{
                width:80% !important;
            }

        }
    </style>
    <!--[if gte mso 9]>
    <style type="text/css">
        .img-max {
            width: 246px !important;
        }
    </style>
    <![endif]-->
</head>
<body style="margin: 0; padding: 0;">
<div style="display:none !important; font-size:1px; color:#FFFFFF;">Starbeam | Новая заявка</div>
<!-- HEADER LOGO -->
<div>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#18162b" style="background-color: #18162b;">
            <div align="center" style="padding: 0px 20px 0px 20px;">
                <table border="0" cellpadding="0" cellspacing="0" width="600" class="wrapper" align="center">
                    <tr align="center">
                        <td style="padding: 15px 0px 10px 0px; text-align: center; width: 400px;" class="logo" align="center" >
                            <a href="https://starbeam.ru" title="Starbeam.ru">
                                <img alt="stabeam.ru" src="https://starbeam.ru/images/log1.png" width="100" border="0">
                            </a>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
<!-- ORDER CONFIRMATION -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#F6F6F6" align="center" style="padding: 20px 15px 20px 15px;" class="top-padding">
            <table border="0" cellpadding="0" cellspacing="0" width="600" class="responsive-table">
                <!-- LONGER WIDTH THAN 600 FOR OUTLOOK 07,10,11 -->
                <tr>
                    <td>
                        <!-- TWO COLUMNS -->
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                    <table cellpadding="0" cellspacing="0" border="0" width="600" align="left" class="responsive-table">
                                        <tr>
                                            <td valign="top" align="left">
                                                <table cellpadding="0" cellspacing="0" border="0" class="responsive-table">
                                                    <tr>
                                                        <td align="center" bgcolor="#FFFFFF" valign="middle" width="600" class="wrapper" style="padding: 20px; border: 1px solid #EFEFEF;">
                                                            <table cellspacing="0" cellpadding="0" style="width: 100%;" class="responsive-table" width="300" valign="top">
                                                                <tr cellspacing="0" cellpadding="0">
                                                                    <td cellspacing="0" cellpadding="0" width="33%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; color: #888888 !important; font-size: 14px; line-height: 20px; font-weight: normal;"> <span style="color: #343434; text-transform: uppercase; font-size: 12px; -webkit-font-smoothing: auto; font-weight: bold;" class="appleBody">Время заявки</span>
                                                                        <br /> <span class="appleBody">'.$datestring.'</span>

                                                                    </td>
                                                                    <td cellspacing="0" cellpadding="0" width="33%" style="text-align: right; font-family: Helvetica, Arial, sans-serif; color: #888888 !important; font-size: 14px; line-height: 20px; font-weight: normal;"> <span style="color: #343434; text-transform: uppercase; font-size: 12px; -webkit-font-smoothing: auto; font-weight: bold;    float: right;" class="appleBody">Номер заявки</span>
                                                                        <br /> <a href="#" style="color: #18162b !important;">'.$number.'</a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END ORDER CONFIRMATION -->
<!-- COPY SIMPLE SECTION-->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#F6F6F6" align="center" style="padding: 0px 15px 20px 15px;" class="section-padding">
            <table border="0" cellpadding="0" cellspacing="0" width="600" class="responsive-table">
                <!-- LONGER WIDTH THAN 600 FOR OUTLOOK 07,10,11 -->
                <tr>
                    <td>
                        <!-- TWO COLUMNS -->
                        <table cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td valign="top" style="padding: 0;" class="mobile-wrapper">
                                    <table cellpadding="0" cellspacing="0" border="0" width="600" align="left" class="responsive-table">
                                        <tr>
                                            <td valign="top" align="left">
                                                <table cellpadding="0" cellspacing="0" border="0">
                                                    <tr>
                                                        <td align="center" bgcolor="#FFFFFF" valign="middle" width="600" class="wrapper" style="padding: 20px; border: 1px solid #EFEFEF;">
                                                            <table cellspacing="0" cellpadding="0" style="width: 100%;" class="responsive-table" width="300">
                                                                <!-- STYLE WIDTH FOR CHROME BROWSER -->
                                                                <tr cellspacing="0" cellpadding="0">
                                                                    <td cellspacing="0" cellpadding="0" colspan="4" class="title" style="font-family: Helvetica, Arial, sans-serif; color: #343434; font-size: 18px; font-weight: normal; text-align: left; line-height: 1; padding: 0px 0px 5px 0px; text-transform: uppercase; -webkit-font-smoothing: auto; font-weight: bold;">Новая заявка со страницы '.$refer.'</td>
                                                                </tr>
                                                                <tr cellspacing="0" cellpadding="0">
                                                                    <td cellspacing="0" cellpadding="0" colspan="4" class="title" style="font-family: Helvetica, Arial, sans-serif; color: #888888; font-size: 14px; font-weight: normal; text-align: left; line-height: 1; padding: 0px 0px 20px 0px; -webkit-font-smoothing: antialiased;">Ожидает ответа</td>
                                                                </tr>
                                                                <tr cellspacing="0" cellpadding="0">
                                                                    <td cellspacing="0" cellpadding="0" colspan="4" style="text-align: left; font-family: Helvetica, Arial, sans-serif; color: #888888 !important; font-size: 14px; line-height: 20px; font-weight: normal; padding: 0px 0px 20px 0px;">Необходимо связаться в билжайшее время</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!-- END COPY SIMPLE SECTION-->
<!-- TEXT TOP -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#F6F6F6" style="padding: 0px 15px 20px 15px;" class="section-padding">
            <div align="center">
                <table border="0" cellpadding="0" cellspacing="0" width="600" class="wrapper">
                    <tr>
                        <td>
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td width="600" class="text" align="center" style="font-family: Helvetica, Arial, sans-serif; color: #343434; font-size: 18px; line-height: 1; text-transform: uppercase;">E-mail: '.$recepient.'</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
<!-- ROW CS CONTACT SECTION-->
<!-- FOOTER -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#ffffff" align="center" style="padding: 20px 0px;">
            <!-- UNSUBSCRIBE COPY -->
            <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="responsive-table">
                <tr>
                    <td width="100%" align="center" style="padding: 0 0 20px 0; font-size: 14px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#888888;"><strong>Команда Starbeam</strong>
                    </td>
                </tr>
                <tr>
                    <td>
                        <table border="0" cellpadding="0" cellspacing="0" align="center">
                            <tr width="183">
                                <td>
                                    <table border="0" cellpadding="0" cellspacing="0" align="center">
                                        <tr width="157">
                                            <td width="16" align="center" style="padding: 0 10px 20px 10px;">
                                                <a href="https://www.facebook.com/Starbeam" target="blank">
                                                    <img src="https://starbeam.ru/images/facebook_icon.png" width="16" height="16">
                                                </a>
                                            </td>
                                            <td width="19" align="center" style="padding: 0 10px 20px 10px;">
                                                <a href="https://twitter.com/Starbeam" target="blank">
                                                    <img src="https://starbeam.ru/images/twitter_icon.png" width="19" height="16">
                                                </a>
                                            </td>
                                            <td width="16" align="center" style="padding: 0 10px 20px 10px;">
                                                <a href="https://www.instagram.com/Starbeam/" target="blank">
                                                    <img src="https://starbeam.ru/images/instagram_icon.png" width="16" height="16">
                                                </a>
                                            </td>
                                            <td width="16" align="center" style="padding: 0 10px 20px 10px;">
                                                <a href="https://www.vk.com/Starbeam/" target="blank">
                                                    <img src="https://starbeam.ru/images/vk_icon.png" width="16" height="16">
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td width="100%" align="center" style="padding: 0 10px 0 10px; font-family: Helvetica, Arial, sans-serif; line-height: 24px; color: #888888; font-size: 12px;"> <span class="appleBody">
                          <strong>STARBEAM</strong><br /> Россия, Казань, Вишневского 24
                        </span>

                    </td>
                </tr>
                <tr>
                    <td width="100%" align="center" style="padding: 0 10px 20px 10px; font-family: Helvetica, Arial, sans-serif; line-height: 24px; color: #888888; font-size: 12px;"> <span class="appleBody" style="color:#888888;">
                          <a href="mailto:contact@starbeam.ru" style="color:#888888 !important;">contact@starbeam.ru</a>
                        </span>
                        <span class="hide-mobile">&nbsp; | &nbsp;</span>

                        <span class="appleBody break" style="color:#888888;">
                  <a href="https://starbeam.ru"
                     style="color: #888888 !important;">starbeam.ru</a>
                  </span> <span class="hide-mobile">&nbsp; | &nbsp;</span>
                        <span class="appleBody break" style="color:#888888;">
                            +7(843)200-04-14
                          </span>

                    </td>
                </tr>
                <tr>
                    <td width="100%" align="center" style="padding: 0 0 20px 0; font-size: 14px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#BBBBBB;">Message id:'.rand(1000000,9999999).'
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</div>
</body>
</html>';
$mail->Subject = 'Starbeam | Новая заявка';
$mail->Body = $htmlBody;
$mail->ClearAllRecipients( );
$mail->AddAddress('contact@starbeam.ru');
if( $mail->send() ){
    echo 'Письмо отправлено';
}else{
    echo 'Письмо не может быть отправлено. ';
    echo 'Ошибка: ' . $mail->ErrorInfo;
}
?>