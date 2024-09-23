<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            display: flex;
            align-items: center;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        img {
            max-width: 50%;
            height: auto;
            border-radius: 8px;
            margin-right: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="password"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>


       <body>

        <body>
        <div style="display: flex; align-items: center; min-height: 100vh;">
        <img src="Instagram.svg" alt="Instagram" style="max-width: 50%; height: 400px;"/>

        <form action="resultado.php" method="post" style="margin-left: 20px;">
            <label for="usuario">Usuário:</label><br>
            <input type="text" id="usuario" name="campo-nome" required><br>

            <label for="senha">Senha:</label><br>
            <input type="password" id="senha" name="campo-senha" required><br>

            <input type="submit" value="Entrar">
        </form>
    </div>
</body>
</body>
</html>
