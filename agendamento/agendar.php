<?php

class Agendar{

        private $nc, $tratamento, $doutor, $data_consulta, $hora_consulta;

        public function getNC(){
            return $this->nc;
        }
        public function setNC($ncs){
            $this->nc = $ncs;
        }

        public function getTratamento(){
            return $this->tratamento;
        }
        public function setTratamento($tratamentos){
            $this->tratamento = $tratamentos;
        }

        public function getDoutor(){
            return $this->doutor;
        }
        public function setDoutor($doutores){
            $this->doutor = $doutores;
        }

        public function getData(){
            return $this->data_consulta;
        }
        public function setData($dc){
            $this->data_consulta = $dc;
        }

        public function getHora(){
            return $this->hora_consulta;
        }
        public function setHora($hc){
            $this->hora_consulta = $hc;
        }

}