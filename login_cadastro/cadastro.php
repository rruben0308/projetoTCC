<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastro</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/cadastrocss.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark" style="background-color: #333 ;" id="menu">
      <a class="navbar-brand" href="../index.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../paginas/informaçoes.php">Informações</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="../paginas/convenios.php">Convênio</a>
          </li>
    
          <li class="nav-item">
            <a class="nav-link" href="../paginas/unidades.php">Unidades</a>
          </li>
        </ul>
        <a class="btn" href="../login_cadastro/entrar.php" role="button">Entrar</a>
        <form class="form-inline my-2 my-lg-0">
        </form>
      </div>
    </nav>


  <div class="container">
<div class="box">
<fieldset>
<form class="form-horizontal" action="../php_banco/controle.php" method="POST">
<div class="panel panel-primary">
    <div class="panel-heading">Cadastro de Cliente</div>
    
    <div class="panel-body">

<div class="form-group">
  <label class="col-md-2 control-label" for="nome">Nome<h11>*</h11></label>  
  <div class="col-md-3">
  <input id="nome" name="nome" placeholder="Nome Completo" class="form-control input-md" required="" type="text" style=" border: 3px solid;
    border-radius: 12px; height: 50px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
  </div>
</div>


<div class="form-group">
  <label class="col-md-2 control-label" for="cpf">CPF<h11>*</h11></label>  
  <div class="col-md-3">
  <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" style=" border: 3px solid;
    border-radius: 12px; height: 50px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
  </div>
  
  <label class="col-md-1 control-label" for="nascimento">Nascimento<h11>*</h11></label>  
  <div class="col-md-3">
  <input type="date" id="nascimento" name="nascimento" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" 
  onBlur="showhide()" style=" border: 3px solid;
    border-radius: 12px; height: 50px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="convenio">Convenio</label>  
  <div class="col-md-3">
  <select class="form-control" id="exampleFormControlSelect1" name="convenio" style="border: 3px solid;
    border-radius: 12px; height: 50px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
                <option>Não Possuo</option>
                <option>Amil</option>
                <option>Interodonto</option>
                <option>RedeBrasil</option>
                <option>PortoSeguro</option>
            </select>
  </div>
</div>

  <label class="col-md-1 control-label" for="radios">Sexo<h11>*</h11></label>
  <div class="col-md-3"> 
    <label required="" class="radio-inline" for="radios-0" >
      <input name="sexo" id="sexo" value="feminino" type="radio" required >
      Feminino
    </label> 
    <label class="radio-inline" for="radios-1">
      <input name="sexo" id="sexo" value="masculino" type="radio">
      Masculino
    </label>
  </div>
</div>


<div class="form-group">
  <label class="col-md-2 control-label" for="telefone">Telefone <h11>*</h11></label>
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input id="telefone" name="telefone" class="form-control input-md" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="12" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
      OnKeyPress="formatar('## #####-####', this)" style=" border: 3px solid;
    border-radius: 12px; height: 50px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
    </div>
  </div>
  
<div class="form-group">
  <label class="col-md-2 control-label" for="email">Email <h11>*</h11></label>
  <div class="col-md-3">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="email" name="email" class="form-control input-md" placeholder="email@email.com" required="" type="text" 
      pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" style=" border: 3px solid;
    border-radius: 12px; height: 50px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
  <div class="col-md-3">
    <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="9" pattern="[0-9]+$"
    style=" border: 3px solid;
    border-radius: 12px; height: 50px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
  </div>
  <div class="col-md-2">
      <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
    </div>
</div>

<!--Mudar daq para baixo-->
<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
  <div class="col-md-3">
    <div class="input-group">
      <div>
      <span class="input-group-addon">Rua</span>
      <input id="rua" name="rua" class="form-control input-md" placeholder="" required="" readonly="readonly" type="text" style=" border: 3px solid;
    border-radius: 12px; height: 50px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
</div>
    </div> 
  </div>
  </div>

  

  <div class="form-group">
    <div class="col-md-3">
    <div class="input-group">
      <div>
        <span class="input-group-addon">Estado</span>
        <input id="estado" name="estado" class="form-control input-md" placeholder="" readonly="readonly" required="" type="text" style=" border: 3px solid;
    border-radius: 12px; height: 50px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
</div>
      </div>
    </div> 
    </div>
    
  <div class="form-group">
  <div class="col-md-3">
    <div class="input-group">
    <div>
      <span class="input-group-addon">Bairro</span>
      <input id="bairro" name="bairro" class="form-control input-md" placeholder="" required="" readonly="readonly" type="text" style=" border: 3px solid;
    border-radius: 12px; height: 50px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
      </div>
      </div>
  </div>

<div class="form-group">
  <label class="col-md-2 control-label" for="prependedtext"></label>
  <div class="col-md-3">
    <div class="input-group">
      <div>
      <span class="input-group-addon">Cidade</span>
      <input id="cidade" name="cidade" class="form-control input-md" placeholder="" required=""  readonly="readonly" type="text" style=" border: 3px solid;
    border-radius: 12px; height: 50px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
</div>
    </div>
  </div>
  </div>
  
  <div class="form-group">
  <div class="col-md-3">
    <div class="input-group">
    <div>
      <span class="input-group-addon">Nº<h11>*</h11></span>
      <input id="numero" name="numero" class="form-control input-md" placeholder="numero" required=""  type="text" style=" border: 3px solid;
    border-radius: 12px; height: 50px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
      </div>
    </div>
  </div>
  </div>

  <div class="form-group">
   <div class="col-md-3">
    <div class="input-group">
      <div>
      <span class="input-group-addon">Complemento</span>
      <input id="complemento" name="complemento" class="form-control input-md" placeholder="complemento"  type="text" style=" border: 3px solid;
    border-radius: 12px; height: 50px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
      </div>
    </div>
    </div>
    </div>
    
    <div class="form-group">
      <label class="col-md-2 control-label" for="senha">Senha<h11>*</h11></label>  
      <div class="col-md-3">
      <div class="botao">
      <input type="password"id="nome" name="senha" placeholder="password" class="form-control input-md" required="" style=" border: 3px solid;
    border-radius: 12px; height: 50px; box-shadow: 2px 2px 2px rgb(0,0,0,0,2); background: #33bef0; color: white;">
    </div>
    <div>
      <div>
    <input type="submit" value="cadastrar" name="botao" class="bot">
  </div>  
  </div>
  </div>
</div>
</fieldset>
</div>
</div>
    <!--<a href="index.html"><form action="controle.php" method="POST">
		<p><input type="text" name="cpf" placeholder="cpf"></p>
		<p><input type="text" name="nome" placeholder="nome"></p>
		<p><input type="text" name="rg" placeholder="rg"></p>
		<p><input type="text" name="telefone" placeholder="telefone"></p>
		<p><input type="text" name="email" placeholder="email"></p>
		<p><input type="text" name="endereço" placeholder="endereço"></p>
		<p><input type="text" name="convenio" placeholder="convenio"></p>
		<p><input type="submit" name="botao" 
			value="cadastrar"></p>
		<p><input type="submit" name="botao" 
			value="buscar"></p>
		<p><input type="submit" name="botao" 
			value="atualizar"></p>
		<p><input type="submit" name="botao" 
			value="deletar"></p>
        </form></a>-->

<script src="../js/cadastrojs.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
