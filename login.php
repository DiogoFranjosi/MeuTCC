<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(45deg, rgb(0, 255, 255), rgb(255, 192, 203));
}
div{
    background-color: rgba(0, 0, 0, 0.9);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 80px;
    border-radius: 15px;
    color: #fff;
}
input{
    padding: 15px;
    border: none;
    outline: none;
    font-size: 15px;
    width: 85%;
}
.inputSubmit{
    background-color: dodgerblue;
    border: none;
    padding: 15px;
    width: 95%;
    border-radius: 10px;
    color: white;
    font-size: 15px;
 
}
.inputSubmit:hover{
    background-color: deepskyblue;
    cursor: pointer;
}
.inputSenha{
   width: 11px;
}
    </style>
</head>
<body>
    <a href="home.php">Voltar</a>
    <div>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha" id="senha" >
       <input type="checkbox" onclick="mostrar()" class="inputSenha">Mostrar senha
        <br><br>
        <input class="inputSubmit" type="submit" name="submit" value="Enviar">
    </div>
    <script>
        
        function mostrar(){
            var senha= document.getElementById('senha')

            if(senha.type=="password"){
                senha.type="text"
            }else{
                senha.type="password"
            }
        }
    
    </script>
</body>
</html>