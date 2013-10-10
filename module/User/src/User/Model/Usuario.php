<?php

namespace User\Model;

class Usuario
{
	public $id;
	public $usuario_tipo_id;
	public $nome;
	public $sexo;
	public $data_nascimento;
	public $email;
	public $telefone;
	public $celular;
	public $cep;
	public $endereco;
	public $numero;
	public $complemento;
	public $bairro;
	public $cidade;
	public $estado_id;
	public $senha;
	public $notificacao;
	public $data_cadastro;
	public $status;


	public function exchangeArray($data)
	{
		$this->id 				= (isset($data['id'])) ? $data['id'] : null;
		$this->usuario_tipo_id	= (isset($data['tipo_conta'])) ? $data['tipo_conta'] : null;
		$this->nome				= (isset($data['nome'])) ? $data['nome'] : null;
		$this->sexo				= (isset($data['sexo'])) ? $data['sexo'] : null;
		$this->data_nascimento	= (isset($data['data_nascimento'])) ? $data['data_nascimento'] : null;
		$this->email			= (isset($data['email'])) ? $data['email'] : null;
		$this->telefone			= (isset($data['telefone'])) ? $data['telefone'] : null;
		$this->celular			= (isset($data['celular'])) ? $data['celular'] : null;
		$this->cep 				= (isset($data['cep'])) ? $data['cep'] : null;
		$this->endereco  		= (isset($data['endereco'])) ? $data['endereco'] : null;
		$this->numero 	 		= (isset($data['numero'])) ? $data['numero'] : null;
		$this->complemento 	 	= (isset($data['complemento'])) ? $data['complemento'] : null;
		$this->bairro 		 	= (isset($data['bairro'])) ? $data['bairro'] : null;
		$this->cidade 		 	= (isset($data['cidade'])) ? $data['cidade'] : null;
		$this->estado_id 	 	= (isset($data['estado'])) ? $data['estado'] : null;
		$this->senha 	 		= (isset($data['senha'])) ? $data['senha'] : null;
		$this->notificacao 	 	= (isset($data['noticicacoes'])) ? $data['noticicacoes'] : null;
		$this->data_cadastro 	= (isset($data['data_cadastro'])) ? $data['data_cadastro'] : null;
		$this->status 			= (isset($data['status'])) ? $data['status'] : 1;
	}
}