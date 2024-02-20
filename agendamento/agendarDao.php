<?php

include '../php_banco/conexao.php';

class agendarDao{
    public function agendar(Agendar $a){
       /* buscar();
       if(buscar() == true){
            echo agendar();
        }else{
            echo 'recusado agende novamente';
        }*/
        $sql = "INSERT INTO agendamento(tratamento, Doutor, data_consulta, hora_consulta) values(?,?,?,?)";
        $bd = new Conexao();
        $con = $bd->getConexao();
        $stm = $con->prepare($sql);
        $stm->bindValue(1, $a->getTratamento());
        $stm->bindValue(2, $a->getDoutor());
        $stm->bindValue(3, $a->getData());
        $stm->bindValue(4, $a->getHora());

        $resultado = $stm->execute();

        if ($resultado) {
            echo 'Consulta marcada';
        }else{
            echo 'ERRO, remarque sua consulta';
        }
    }

    public function desmarcar(Agendar $a){
        $sql = "DELETE from cliente where code=?";
        $bd = new Conexao();
        $con = $bd->getConexao();
        $stm = $bindValue(1, $c->getNC());
        $resultado = $stm->execute();

        if($resultado){
            echo "Consulta desmarcada";
        }else{
            echo "Não desmarcada";
        }
    }

     public function buscar(Agendar $a){
         $sql = "SELECT from agendamento where tratamento=cirurgia Doutor=Ruben Tiago data_consulta=20220308, hora_consulta=13:00";
         $bd = new Conexao();
         $con = $bd->getConexao();
         $stm = $con->prepared($sql);
         $resultado = $stm->execute();

         if($resultado){
            return true;
         }else{
            return false;
         }      
    }
}