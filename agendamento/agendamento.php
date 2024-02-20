<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
<link rel="stylesheet" href="../css/agendamento.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: #333 ;" id="menu">
<a class="navbar-brand" href="../paginas/paginainicial.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../pg_duplicadas/info.php">Informações</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="../pg_duplicadas/conv.php">Convênio</a>
          </li>
    
          <li class="nav-item">
            <a class="nav-link" href="../pg_duplicadas/und.php">Unidades</a>
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
  <div class="fundo">
      <h1 class="titulo">Agendar Consulta</h1>
      <p class="p1">Coloque suas Informações de acordo!!</p>
    <form action="agencontrol.php" method="POST">
    <div class="form-group"> 
        <div class="form-group col-md-3">
            <label for="exampleFormControlSelect1" style="color: white;"><b>Selecione o tratamento:</b></label>
            <select class="form-control" id="exampleFormControlSelect1" name="tratamento" style="border: 3px solid;
    border-radius: 12px; height: 50px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
                <option>Aplicação de Flúor</option>
                <option>Clareamento<option>
                <option>Aparelhos odontológicos</option>
                <option>Limpeza</option>
                <option>Manutenção</option>
                <option>Restauração</option>
                <option>Inplante Dentário</option>
                <option>Odontopediatria</option>
                <option>Periodontia</option>
                <option>Consulta Simples</option>
            </select>
        </div>
        
        <div class="form-group col-md-3">
            <label for="exampleFormControlSelect1" style="color: white;"><b>Especialista:</b></label>
            <select class="form-control" id="exampleFormControlSelect1" name="doutor" style=" border: 3px solid;
    border-radius: 12px; height: 50px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
                <option>Clara Silva</option>
                <option>Otávio Antonio</option>
                <option>Matheus Pereira</option>
                <option>Julian Vasconcelos</option>
                <option>Anna Torres</option>
            </select>
        </div>    
        
        <div class="form-group col-md-3">
            <label for="exampleFormControlSelect1" style="color: white;"><b>Escolha uma data para o agendamento:</b></label>
            <input id="dc" name="dc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" 
            type="date" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()" style=" border: 3px solid;
    border-radius: 12px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
        </div>
        
        <div class="form-group col-md-3">
            <label for="exampleFormControlSelect1" style="color: white;"><b>Escolha uma hora para o agendamento:</b></label>
            <input id="hc" name="hc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" 
            type="time" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()" style=" border: 3px solid;
    border-radius: 12px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
        </div>
        <input type="submit" value="agendar" name="botao" class="bot">
    </form>
  </div> 
    





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>