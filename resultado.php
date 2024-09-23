<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
        }
        .result-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 500px; 
            width: 100%; 
        }
        h1 {
            color: #007BFF;
            text-align: center;
            margin-bottom: 20px; 
            
        }
        pre {
            background-color: #f0f0f0;
            padding: 80px;
            border-radius: 4px;
            white-space: pre-wrap; 
            word-wrap: break-word; 
            overflow-x: auto; 
            font-size: 23px;
        }
    </style>

<body>

    <?php
    
    $usuario = "etec";
    $senha = "etec2024";

    $md5Hash = md5($senha);

    $usuarioLogin = $_POST["campo-nome"];
    $senhaLogin = $_POST["campo-senha"];

    $md5HashLogin = md5($senhaLogin);

    
    $usuarios = ["etec", "user1", "user2"];
    $senhas = ["etec2024", "senha1", "senha2"];

    
    $countUsuarios = count($usuarios);

    $filledArray = array_fill(0, $countUsuarios, "default");

    $lastUser = array_pop($usuarios);

    $hashedSenhas = array_map('md5', $senhas);

    $usuariosString = implode(", ", $usuarios);

    $sortedUsuarios = $usuarios;
    sort($sortedUsuarios);

    $comprimento = count($senhas);
   

echo "<pre>";
echo "Quantidade de usuários: $countUsuarios\n";
echo "Último usuário removido: $lastUser\n";
echo "Usuários: $usuariosString\n";
echo "Usuários em ordem alfabetica: " . implode(", ", $sortedUsuarios) . "\n";
echo "Tamanho do array 'Senhas': $comprimento\n";
    
 ?>
</body>
</html>
