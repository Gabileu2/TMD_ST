<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $curso = $_POST['curso'];
        $data_curso = $_POST['data_curso'];
        $funcionario = $_POST['funcionario'];
        $empresa = $_POST['empresa'];
        $cnpj = $_POST['cnpj'];
        
        $sqlInsert = "UPDATE formulário 
        SET nome='$nome',email='$email',telefone='$telefone',curso='$curso',data_curso='$data_curso',funcionario='$funcionario',empresa='$empresa',cnpj='$cnpj'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>