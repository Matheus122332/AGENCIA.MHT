<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $mensagem = addslashes($_POST['mensagem']);
    
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
        echo "Houve um erro ao enviar o e-mail!";
    }
} else {
    echo "Método de requisição inválido!";
}
?>

