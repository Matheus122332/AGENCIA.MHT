<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $celular = filter_var($_POST['celular'], FILTER_SANITIZE_STRING);
    $mensagem = filter_var($_POST['mensagem'], FILTER_SANITIZE_STRING);
    
    $para = "matheushenriquebrito1999@gmail.com";
    $assunto = "Coleta de dados - AGÊNCIA MHT";
    $corpo = "Nome: " . $nome . "\n" . 
             "E-mail: " . $email . "\n" . 
             "Celular: " . $celular . "\n" . 
             "Mensagem: " . $mensagem;
    
    $cabeca = "From: matheushenriquesuporte@gmail.com" . "\r\n" .
              "Reply-To: " . $email . "\r\n" .
              "X-Mailer: PHP/" . phpversion();
    
    if (mail($para, $assunto, $corpo, $cabeca)) {
        echo "E-mail enviado com sucesso!";
    } else {
        error_log("Mail failed to send to $para.");
        echo "Houve um erro ao enviar o e-mail!";
    }
} else {
    echo "Método de requisição inválido!";
}
?>
