<html>
<head>
<title>Форма заявки с сайта</title>
</head>
<body>
<?php
//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['fio']) ($_POST['numer']) and !isset($_POST['email'])){
 ?> <form action="send.php" method="post">
<input type="text" name="fio" placeholder="Укажите ФИО" required>
<input type="text" name="email" placeholder="Укажите e-mail" required>
<input type="text" name="numer" placeholder="Контактный номер" required>
<input type="submit" value="Отправить">
</form>
<?php
$fio = $_POST['fio'];
$email = $_POST['email'];
$numer = $_POST['numer'];
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$numer = htmlspecialchars($mumer);
$fio = urldecode($fio);
$email = urldecode($email);
$numer = urldecode($numer);
$fio = trim($fio);
$email = trim($email);
$numer = trim($numer);
//echo $fio;
//echo "<br>";
//echo $email;
//echo "<br>";
//echo $numer;
if (mail("d.voitenko1995@gmail.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email , "НОМЕР:" .$mumer." "From: d.voitenko1995@gmail.com \r\n"))
 {     echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}?>
</body>
</html>