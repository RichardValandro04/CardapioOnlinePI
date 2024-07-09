<?php
//CLASSE
    class Endereco{
        private $idEndereco;
        private $idUsuarioEndereco;
        private $cep;
        private $numeroCasa;
        private $complemento;

//CONSTRUTOR
    public function __construct($idUsuarioEndereco, $cep, $numeroCasa, $complemento){
        $this->idUsuarioEndereco = $idUsuarioEndereco;
        $this->cep = $cep;
        $this->numeroCasa = $numeroCasa;
        $this->complemento = $complemento;
    }

//SETTERS E GETTERS
    public function setIdEndereco($idEndereco){
        $this->idEndereco = $idEndereco;
    }
    public function getIdEndereco(){
        return $this->idEndereco;
    }

    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCep(){
        return $this->cep;
    }

    public function setNumeroCasa($numeroCasa){
        $this->numeroCasa = $numeroCasa;
    }
    public function getNumeroCasa(){
        return $this->numeroCasa;
    }

    public function setComplemento($complemento){
        $this->complemento = $complemento;
    }
    public function getComplemento(){
        return $this->complemento;
    }

    public function setIdUsuarioEndereco($idUsuarioEndereco){
        $this->idUsuarioEndereco = $idUsuarioEndereco;
    }
    public function getIdUsuarioEndereco(){
        return $this->idUsuarioEndereco;
    }
    }
?>