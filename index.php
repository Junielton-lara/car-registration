<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
        <div id= "corpo-tela-delogin">
            <h1>Entrar</h1>

                <form method="POST" action="validar.php">
                <?php
                    if (isset($_GET['msg']))
                    {
                        include_once 'util.php';
                        echo validar_msg($_GET['msg']);
                    }
                ?>
                    <input type="text" name="usuario" placeholder = "USUARIO" required>
                    <input type="password" name="senha" placeholder = "SENHA" required>
                 
			    <button type="submit" name="entrar" class="btn btn-outline-primary">Entrar</button>	
              
                    <a href="criarlogin.php">Ainda não é inscrito?<strong> Cadastre-Se! </strong></a>                  
        </div>
        </form>
        
</body>
</html>