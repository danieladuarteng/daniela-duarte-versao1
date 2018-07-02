<?php



$para = "falecom@danieladuarte.com.br";
$nome = $_POST ['nome'];
$email = $_POST ['email'];
$telefone = $_POST ['telefone'];
$assunto= $_POST ['assunto'];
$mensagem = $_POST ['mensagem'];

$email_assunto="Novo contato pelo site";
$email_conteudo= "Nome = {$nome}\n";
$email_conteudo.= "E-mail = {$email}\n";
$email_conteudo.= "Telefone = {$telefone}\n";
$email_conteudo.= "Assunto = {$assunto}\n";
$email_conteudo.= "Mensagem = {$mensagem}\n";


$link="falecomigo.html";


if(mail($para, $email_assunto, $email_conteudo, $headers))
{
	echo'Mensagem enviada com sucesso!';
	echo "<br><a href=".$link.">Voltar</a>";
}
else{
	echo'Erro: por favor tente novamente';
	echo "<br><a href=".$link.">Tentar de novo</a>";
}


?>