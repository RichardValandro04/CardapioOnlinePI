<?php

require_once 'crud.php';
require_once 'endereco.php';



class enderecoDAO extends CRUD{

    protected $table = 'endereco';

    public function insert($endereco){
        $sql = "INSERT INTO $this->table (fk_id_usuario, cep, numero_casa, complemento) VALUES (:idUsuario, :cep, :numero_casa, :complemento)";


        $stmt = Database::prepare($sql);
		$stmt->bindParam(':idUsuario', $endereco->getIdUsuarioEndereco(), PDO::PARAM_INT);
		$stmt->bindParam(':cep', $endereco->getCep(), PDO::PARAM_INT);
		$stmt->bindParam(':numero_casa', $endereco->getNumeroCasa(), PDO::PARAM_INT);
		$stmt->bindParam(':complemento', $endereco->getComplemento());
		
		return $stmt->execute();
    }

    public function update($idUsuario, $endereco){

        $sql = "UPDATE $this->table SET cep = :cep , numero_casa = :numero_casa, complemento = :complemento WHERE fk_id_usuario = :idUsuario";


        $stmt = Database::prepare($sql);
        $stmt->bindParam(':cep', $endereco->getCep(), PDO::PARAM_INT);
		$stmt->bindParam(':numero_casa', $endereco->getNumeroCasa(), PDO::PARAM_INT);
		$stmt->bindParam(':complemento', $endereco->getComplemento());
        $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
		
		return $stmt->execute();
    }
}
?>