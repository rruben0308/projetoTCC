<?php 

include 'cliente.php';
include 'clienteDao.php';

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$cep = $_POST['cep'];
$convenio = $_POST['convenio'];
$senha = $_POST['senha'];
$sexo = $_POST['sexo'];
$numero = $_POST['numero'];
$botao = $_POST['botao'];

//instancia
$cliente = new Cliente();
$clienteDao = new ClienteDao();

$cliente->setCp($cpf);
$cliente->setNome($nome);
$cliente->setNascimento($nascimento);
$cliente->setTel($telefone);
$cliente->setEmail($email);
$cliente->setCep($cep);
$cliente->setConvenio($convenio);
$cliente->setSenha($senha);
$cliente->setSexo($sexo);
$cliente->setNumero($numero);

if($botao=="cadastrar"){
	$clienteDao->cadastrar($cliente);
}else if($botao=="atualizar"){
	$clienteDao->atualizar($cliente);
}else if($botao=="deletar"){
	$clienteDao->deletar($cliente);
}else if($botao=="buscar"){
	$clienteDao->buscar();
	foreach($clienteDao->buscar() as $resultado){
		echo $resultado['cpf']."<br>";
		echo $resultado['nome']."<br>";
		echo $resultado['nascimento']."<br>";
		echo $resultado['telefone']."<br>";
		echo $resultado['telefone2']."<br>";
		echo $resultado['email']."<br>";
		echo $resultado['cep']."<br>";
		echo $resultado['convenio']."<br>";
		echo $resultado['sexo']."<br>";
		echo $resultado['numero']."<hr>";
	}

}





