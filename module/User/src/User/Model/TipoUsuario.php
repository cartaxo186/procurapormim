<?php

namespace User\Model;


class TipoUsuario
{
	public $id;
	public $tipo;
	public $status;

	public function exchangeArray($data)
	{
		$this->id 		= (isset($data['id'])) ? $data['id'] : null;
		$this->tipo 	= (isset($data['tipo'])) ? $data['tipo'] : null;
		$this->status 	= (isset($data['status'])) ? $data['status'] : null;
	}
}