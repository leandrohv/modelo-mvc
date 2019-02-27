<?php 

namespace App\Model;

class Usuario
{
	private $id;
	private $nome;
	private $email;
	private $pass;
	private $permissao;
	private $status;

	public function __construct($id, $nome, $email, $pass, $permissao, $status)
	{
		$this->id = $id;
		$this->nome = $nome;
		$this->email = $email;
		$this->pass = $pass;
		$this->permissao = $permissao;
		$this->status = $status;
	}

	public function setId($id)
	{
		$this->id = $id;
		return $this;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setNome($nome)
	{
		$this->nome = $nome;
		return $this;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setPass($pass)
	{
		$this->pass = $pass;
		return $this;
	}

	public function getPass()
	{
		return $this->pass;
	}

	public function setPermissao($permissao)
	{
		$this->permissao = $permissao;
		return $this;
	}

	public function getPermissao()
	{
		return $this->permissao;
	}

	public function setStatus($status)
	{
		$this->status = $status;
		return $this;
	}

	public function getStatus()
	{
		return $this->status;
	}
}