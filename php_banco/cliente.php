<?php

Class Cliente 

{

	private $nome, $tel, $cp, $nascimento, $email, $cep, $convenio, $senha, $sexo, $numero;

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nomes){
		 $this->nome = $nomes;
    }

    public function getTel(){
		return $this->tel;
	}

	public function setTel($tels){
		$this->tel = $tels;
	}

	public function getCp(){
		return $this->cp;
	}

	public function setCp($cps){
		$this->cp = $cps;
	}

	public function getNascimento(){
		return $this->nascimento;
	}

	public function setNascimento($nasc){
		 $this->nascimento = $nasc;
    }

    public function getEmail(){
		return $this->email;
	}

	public function setEmail($emails){
		 $this->email = $emails;
    }

    public function getCep(){
		return $this->cep;
	}

	public function setCep($ceps){
		 $this->cep = $ceps;
    }

    public function getConvenio(){
		return $this->convenio;
	}

	public function setConvenio($convenios){
		 $this->convenio = $convenios;
    }

	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($senhas){
		 $this->senha = $senhas;
    }

	public function getSexo(){
		return $this->sexo;
	}

	public function setSexo($sexos){
		 $this->sexo = $sexos;
    }

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($num){
		 $this->numero = $num;
    }	
}