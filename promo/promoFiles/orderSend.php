<?php
 /* ����� ����������� ������������� ���������� */
 if (isset($_POST['name'])) {$name = $_POST['name'];}
 if (isset($_POST['email'])) {$email = $_POST['email'];}
 if (isset($_POST['phone'])) {$phone = $_POST['phone'];}

/* ���� ������� ���� ��. ����� */
 $address = "lcd-swat@yandex.ru";

/* � ����� ������������� ����� ���������, \n - ������� ������ */
 $sub = "SITE FOR 5000 � message from site!";
 $mes = "$sub \n\n���: $name \nE-mail: $email \n�����������: $phone\n\n������ ����������� ��� ��������! ���������� � ����� ����� �� 5�";

/* � ��� ������� ��� ��� ���������� ��������� ������ �� ��������� ���� email */
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = windows-1251\r\nFrom:FROMSITE");
 if ($send == 'true')
 {
	echo ('<div style="font-family: arial; font-size; 32px">���� ��������� ����������</div><div style="font-family: arial">�� ������� �� ���� � ��������� �����. ��������� <a href="/promo/superSiteFor5k.shtml">�����</a></div>');

 }
 else 
 {
 echo "��������� �� ����������";
 }
?>