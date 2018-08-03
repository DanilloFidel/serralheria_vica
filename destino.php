<?php
    function enviarMensagem($dados){
        //dados do formulário colocados em variaveis
        $nome_usuario = $dados["nome"];
        $email_usuario = $dados["email"];
        $mensagem_usuario = $dados["mensagem"];
        $telefone = $dados["telefone"];
        
        //criar variaveis de envio
        $destino = "serralheriavica@outlook.com";
        $remetente = $email_usuario;
        $assunto = "Ola Daniel, um novo cliente entrou em contato, Dados para contato : ". $nome_usuario . "/" . $telefone;
        
        //corpo do email
        $mensagem = $mensagem_usuario;
        
        return mail($destino,$assunto,$mensagem,$remetente);
    };
?>