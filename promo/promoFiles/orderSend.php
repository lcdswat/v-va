<?php
 /* Здесь проверяется существование переменных */
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['email'])) {$email = $_POST['email'];}
 if (isset($_POST['phone'])) {$phone = $_POST['phone'];}

/* Сюда впишите свою эл. почту */
 $address = "lcd-swat@yandex.ru";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $sub = "SITE FOR 5000 — message from site!";
 $mes = "$sub \n\nИмя: $name \nE-mail: $email \nКомментарий: $phone\n\nСрочно перезвонить или написать! Отправлено с промо «Сайт за 5к»";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = windows-1251\r\nFrom:FROMSITE");
 if ($send == 'true')
 {
	echo ('<div style="font-family: arial; font-size; 32px">Ваше сообщение отправлено</div><div style="font-family: arial">Мы ответим на него в ближайшее время. Вернитесь <a href="/promo/superSiteFor5k.shtml">назад</a></div>');

 }
 else 
 {
 echo "Сообщение не отправлено";
 }
?>