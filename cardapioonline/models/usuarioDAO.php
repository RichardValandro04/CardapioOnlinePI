<?php

require_once 'crud.php';
require_once 'usuario.php';



class UsuarioDAO extends CRUD{

    protected $table = 'usuarios';

    public function insert($usuario){
        $sql = "INSERT INTO $this->table (nome, email, cpf, telefone, senha) VALUES (:nome, :email, :cpf, :telefone, :senha)";

        $nome = $usuario->getNome();
        $email =  $usuario->getEmail();
        $cpf = $usuario->getCpf();
        $telefone = $usuario->getTelefone();
        $senha = $usuario->getSenha();

        $stmt = Database::prepare($sql);
		$stmt->bindParam(':nome', $nome);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':cpf', $cpf);
		$stmt->bindParam(':telefone', $telefone );
		$stmt->bindParam(':senha', $senha);

		if ($stmt->execute()) {
            return Database::lastInsertId();
        } else {
            return false;
        }
    }

    public function update($idUsuario, $cliente){

        $sql = "UPDATE $this->table SET nome = :nome , email = :email, cpf = :cpf, telefone = :telefone, senha = :telefone WHERE id = :id";


        $stmt = Database::prepare($sql);
		$stmt->bindParam(':nome', $usuario->getNome());
		$stmt->bindParam(':email', $usuario->getEmail());
		$stmt->bindParam(':cpf', $usuario->getCpf());
		$stmt->bindParam(':telefone', $usuario->getTelefone());
		$stmt->bindParam(':senha', $usuario->getSenha());
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
		
		return $stmt->execute();
    }
}
?>