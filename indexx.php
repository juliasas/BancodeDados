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
  $sql = "SELECT * FROM dado WHERE nome='".$login."' AND senha='".$senha."';";
     $result = $conn->query($sql);
     $row = $result->fetch_assoc();


  if($row) {
  echo "<script> alert('login correto');
        window.location = 'index.html';</script>";

}
 else 
  {echo "<script> alert('login incorreto');
        window.location = 'indexx.php'; </script>";
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
   background-color: rgb(255, 255, 255);
   font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
   font-size: 20px;
   border: 2px solid rgb(255, 255, 255);
   padding: 1%;
  }

  .button
  {
   padding: 15px 30px;
   text-align: center;
   font-size: 10px;
   width: 50%;
  }
  
  .body {
   margin: 0px;
   padding: 0px;
   background-image: url("peo.jpg");
   background-position: center;
 }
  
 
  }

 </style>
</head>

<body class ='body'>
 <div class='caixadecadastro'>
  <br>
  <form method="post" action="indexx.php">
   <label>Name</label>
   <input type="text" name="login" id="login" placeholder="Inter your name" required>
   <br><br>
   <label>Password</label>
   <input type="password" name="senha" id="senha" placeholder="Inter your password" required>
   <br><br>
   <input type="hidden" name="modo" id="modo" value="inserir">
   <button>Register</button>
  </form>
 </div>



</body>
</html>