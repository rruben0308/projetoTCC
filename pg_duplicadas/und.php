<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/unidade.css">
    <style>
        .img{
            width: 300px;
            height: 300px;
        }
        body,html{
            background: #33bef0;
        }

        h1{
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            margin-left: auto;
            margin-right: auto;
            width: 410px;
        }
        p{
            color: white;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: #333 ;" id="menu">
      <a class="navbar-brand" href="../paginas/paginainicial.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="info.php">Informações</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="conv.php">Convênio</a>
          </li>
    
          <li class="nav-item">
            <a class="nav-link" href="und.php">Unidades</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../agendamento/agendamento.php">Agendamento</a>
          </li>
        </ul>

        <a class="btn" href="../index.php" role="button">Sair</a>
        <form class="form-inline my-2 my-lg-0">
        </form>
      </div>
    </nav>   
<!--fim menu-->


<div class="column-66">
      <div class="row">
      <div class="card green" style="width: 17%; height: 300px; margin-left: 20%;">
        <h2>Eldorado</h2>
        <p>Av Nossa Senhora dos Navegantes, 580</p>
        <p>Diadema</P>
        <p>(11) 4059-0323</p>
        <img class="image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtxMi4MVRR50GzMgdVPkORnPpwIBIwXn_oCQ&usqp=CAU" alt="money" 
        style="height: 70px; width: 70px;">
      </div>
 
      <div class="card blue" style="width: 17%; height: 300px;">
        <h2>Serraria</h2>
        <p>Av rotary, 102 </p>
        <p>Diadema</p>
        <p>(11) 4044-1880</p>
        <img class="image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtxMi4MVRR50GzMgdVPkORnPpwIBIwXn_oCQ&usqp=CAU" alt="settings" 
        style="height: 70px;  width: 70px; margin-top: 12%;">
      </div>
        
      <div class="card red" style="width: 17%; height: 300px;">
        <h2>Campanario</h2>
        <p>Av Luis Carlos Prestes, 710 </p>
        <p>Diadema</p>
        <p>(11) 2677-9513</p>
        <img class="image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtxMi4MVRR50GzMgdVPkORnPpwIBIwXn_oCQ&usqp=CAU" alt="article" 
        style="height: 70px;  width: 70px; margin-top: 12%;">
      </div>
    </div>

    <div class="column-66">
      <div class="row">
      <div class="card green" style="width: 17%; height: 300px; margin-left: 30%;">
        <h2>Marilene</h2>
        <p>Rua Conde Da Cunha, 34</p>
        <p>Diadema</p>
        <p>(11) 4066-2840</p>
        <img class="image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtxMi4MVRR50GzMgdVPkORnPpwIBIwXn_oCQ&usqp=CAU" alt="money" 
        style="height: 70px;  width: 70px; margin-top: 12%;">
      </div>
 
      <div class="card blue" style="width: 17%; height: 300px;">
        <h2>Canhema</h2>
        <p>Avenida Dom Joao IV, 464</p>
        <p>Diadema</p>
        <p>(11) 4076-1684</p>
        <img class="image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtxMi4MVRR50GzMgdVPkORnPpwIBIwXn_oCQ&usqp=CAU" alt="settings" 
        style="height: 70px;  width: 70px; margin-top: 12%;">
      </div>
    </div>











<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>