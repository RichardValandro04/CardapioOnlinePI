<?php
//CLASSE
    class Pedido{
        private $idPedido;
        private $dataEntrega;
        private $horaEntrega;
        private $valorTotalPedido;
        private $metodoDeEntrega;
        private $situaçao;

//CONSTRUTOR
    public function __construct($idPedido, $dataEntrega, $horaEntrega, $valorTotalPedido, $metodoDeEntrega, $situaçao) {
        $this->idPedido = $idPedido;
        $this->dataEntrega = $dataEntrega;
        $this->horaEntrega = $horaEntrega;
        $this->valorTotalPedido = $valorTotalPedido;
        $this->metodoDeEntrega = $metodoDeEntrega;
        $this->situaçao = $situaçao;  
    }

//SETTERS E GETTERS
    public function setIdPedido($idPedido){
        $this->idPedido = $idPedido;
    }
    public function getIdPedido(){
        return $this->idPedido;
    }

    public function setDataEntrega($dataEntrega){
        $this->dataEntrega = $dataEntrega;
    }
    public function getDataEntrega(){
        return $this->dataEntrega;
    }

    public function setHoraEntrega($horaEntrega){
        $this->horaEntrega = $horaEntrega;
    }
    public function getHoraEntrega(){
        return $this->horaEntrega;
    }

    public function setValorTotalPedido($valorTotalPedido){
        $this->valorTotalPedido = $valorTotalPedido;
    }
    public function getValorTotalPedido(){
        return $this->valorTotalPedido;
    }

    public function setMetodoDeEntrega($metodoDeEntrega){
        $this->metodoDeEntrega = $metodoDeEntrega;
    }
    public function getMetodoDeEntrega(){
        return $this->metodoDeEntrega;
    }

    public function setSituaçao($situaçao){
        $this->situaçao = $situaçao;
    }
    public function getSituaçao(){
        return $this->situaçao;
    }
}
?>