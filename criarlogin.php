<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo/estilo.css">
    <title>Criar user</title>
</head>
<body>
   

    <div id= "corpo-tela-delogin">
          
                <form method="POST" action="/database/usuario.dao.php">

                    <input type="text" name="usuario" placeholder = "USUARIO" required>
                    <input type="password" name="senha" placeholder = "SENHA" required>
                 
			    <button type="submit" name="Criar" class="btn btn-outline-primary">Criar conta</button>	
              
                   
</body>
</html>