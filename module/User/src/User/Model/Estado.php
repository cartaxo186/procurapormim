<?php

namespace User\Model;

class Estado
{
	public $id;
	public $nome;
	public $uf;

	public function exchangeArray($data) {
		$this->id 	= (isset($data['id'])) ? $data['id'] : null;
		$this->nome = (isset($data['nome'])) ? $data['nome'] : null;
		$this->uf 	= (isset($data['uf'])) ? $data['uf'] : null;
	}
}