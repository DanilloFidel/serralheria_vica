<?php 

    //pegando os dados preenchidos no form.
    
    $nome = $_REQUEST["nome"];
    $email = $_REQUEST["email"];
    $tel = $_REQUEST["telefone"];
    $msg = $_REQUEST["mensagem"];


    //definindo para onde vai o email
    
    $destino = "danillopkt@hotmail.com";
    $assunto = "Contato pelo site";

    //corpo do email

    $corpo = "<strong><br><br>Mensagem de contato </strong><br><br>";
    $corpo .= "<strong> Nome: </strong> $nome <br>";
    $corpo .= "<strong> Email: </strong> $email <br>";
    $corpo .= "<strong> Telefone: </strong> $tel <br>";
    $corpo .= "<strong> Mensagem: </strong> $msg";

    //cabeçalho do email
    
    $header = "Content-type: text/html; charset= utf-8\n";
    $header .= "From: $email reply-to: $email \n";
    

    //função mail

    mail($destino, $assunto, $corpo, $header);

    //header("location:form.php?msg=enviado");


    echo $corpo;
?>