<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<style>
    input{
        margin: 9px;
        width: 170px;
        border: 1px solid #4D4DFF;
        border-radius: 5px;
        background-color: lightgray;

    }
    ::placeholder{
        text-align: center;
    }


    
</style>
<body>

        <fieldset>
            <h1 class="nome">PlugoBr</h1>
            <form action="login.php" method="post">
                <label for="username"></label>
                <input type="text" name="username" id="username" placeholder="Usuário:">
                <br>
                <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="Senha:">
                <br>
                <input type="submit" value="Login">
            </form>
        </fieldset>

        <script>
             
            <?php if (isset($_GET["error"])) { ?>
                window.addEventListener("load", function(){
                    alert("<?php echo $_GET["error"]; ?>");
                });
            <?php } ?>
	 
        </script>
    
    
</body>
</html>