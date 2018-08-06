<?php 
$modo = "";
include 'pp.php';

  if(isset($_POST['modo'])) {
  $modo = $_POST['modo'];
  }
  
  $login = $senha = "";
  
  if(isset($_POST['login'])&&isset($_POST['senha'])) {
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  }

  if($modo == 'inserir') {
  $sql = "SELECT * FROM cadastro WHERE nome='".$login."' AND senha='".$senha."';";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();

  if($row) {
  echo "<script> alert('login correto');
        window.location = 'index.html';</script>";

}
 else 
  {echo "<script> alert('login incorreto');
        window.location = 'login.php'; </script>";
  }
  }


?>
<!DOCTYPE html>
<html>
<head>
 <title>Cadastro</title>
  
 <style>
  .caixadecadastro
  {
   margin-left: 10%;
   margin-top: 12%;
   text-align: left;
   float: left;
   width: 20%;
   background-color: rgba(255,255,255,0.7);
   font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
   font-size: 1.4em;
   border: 2px solid grey;
   padding: 1%;
  }
  
  .button
  {
   margin-top: 0px;
   margin-bottom: 5%;
   border:none;
   padding: 15px 32px;
   text-align: center;
   text-decoration: none;
   font-size: 16px;
   width: 50%;
  }
  
  .body {
   margin: 0px;
   padding: 0px;
   background-image: url("bul.jpg");
   background-position: center;
  }

 </style>
</head>

<body id='body'>
 <div class="caixadecadastro">
  <br>
  <form method="post" action="login.php">
   <label>Name</label>
   <input type="text" name="login" id="login" placeholder="Inter your name" required>
   <br><br>
   <label>Password</label>
   <input type="password" name="senha" id="senha" placeholder="Inter your password" required>
   <br><br>
   <input type="hidden" name="modo" id="modo" value="inserir">
   <button>Cadastrar</button>
  </form>
 </div>


</body>
</html>