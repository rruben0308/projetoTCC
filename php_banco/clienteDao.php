<?php

include 'conexao.php';

class ClienteDao{
     public function cadastrar(Cliente $c){
        $sql = "INSERT into cliente(nome, cpf, nascimento, telefone, email, cep, convenio, senha, sexo, numero)
        values(?,?,?,?,?,?,?,?,?,?)";
         $bd = new Conexao();
         $con = $bd->getConexao();
         $stm = $con->prepare($sql);
         //echo $cpf;
         $stm->bindValue(1, $c->getNome());
         $stm->bindValue(2, $c->getCp());
         $stm->bindValue(3, $c->getNascimento());
         $stm->bindValue(4, $c->getTel());
         $stm->bindValue(5, $c->getEmail());
         $stm->bindValue(6, $c->getCep());
         $stm->bindValue(7, $c->getConvenio());
         $stm->bindValue(8, $c->getSenha());
         $stm->bindValue(9, $c->getSexo());
         $stm->bindValue(10, $c->getNumero());
       
         $resultado = $stm->execute();
         
         if($resultado){
             header('Location: ../login_cadastro/entrar.php');
         }else{
             echo 'Não cadastrado';
         }
     }

    public function atualizar(Cliente $c){
        /*$sql = "update cliente set nome=?, cpf=?, nascimento=?, telefone=?, email=?, cep=?, convenio, senha=?, sexo=?,
        numero=? where email=?";*/
        /*$sql = "update cliente set senha=? where email=?";*/
        $bd = new Conexao();
        $con = $bd->getConexao();
        $stm = $con->prepare($sql);

        $stm->bindValue(1, $c->getNome());
        $stm->bindValue(2, $c->getCp());
        $stm->bindValue(3, $c->getNascimento());
        $stm->bindValue(4, $c->getTel());
        $stm->bindValue(5, $c->getEmail());
        $stm->bindValue(6, $c->getCep());
        $stm->bindValue(7, $c->getConvenio());
        $stm->bindValue(8, $c->getSenha());
        $stm->bindValue(9, $c->getSexo());
        $stm->bindValue(10, $c->getNumero());
      
        $resultado = $stm->execute();

        if($resultado){
            echo 'Senha atualizada';
        }else{
            echo 'Tente novamente';
        }
     }

     public function deletar(Cliente $c){
         $sql = "DELETE from cliente where code=?";
         $bd = new Conexao();
         $con = $bd->getConexao();
         $stm = $bindValue(1, $c->getCodigo());
         $result = $stm->execute();

         if($result){
             echo "deletado";
         }else{
             echo "Nao deletado";
         }
     }

     public function buscar(){
         $sql = "SELECT * from cliente";
         $bd = new Conexao();
         $con = $bd->getConexao();
         $stm = $con->prepared($sql);
         $stm->execute();
         
         if($stm->rowCount()>0){
             $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
             return $result;
         }
     }
}