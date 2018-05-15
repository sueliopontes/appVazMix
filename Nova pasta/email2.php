<?
$recebetitulo= $_POST["assunto"];
$recebemail = $_POST["email"];
$recebemsg  = $_POST["mensagem"];

$to1 = "suelio.fkcpv@gmail.com";
$to2 = "suelio.pontes@hotmail.com";
$subject = "Mensagem do site Vazmix Concreto";
$html = "
<html>
<body>
$recebetitulo
<br><br><br>
$recebemsg
<br><br><br>
Email:  $recebemail
<br>
</body>
</html>";
$headers = "Content-type: text/html; charset=iso-8859-1rn";

if (mail($to1, $subject, $html, $headers)) {
echo "Email enviado com sucesso !";
} else {
echo "Ocorreu um erro durante o envio do email.";
}
if (mail($to2, $subject, $html, $headers)) {
echo "Email enviado com sucesso !";
} else {
echo "Ocorreu um erro durante o envio do email.";
}
echo "<meta http-equiv='refresh' content='0; URL=index.html'>";
?>