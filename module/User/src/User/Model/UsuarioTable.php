<?php

namespace User\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
// use Zend\Db\Sql\Insert;
use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\TableGateway\Exception\InvalidArgumentException;


class UsuarioTable extends AbstractTableGateway
{
	protected $table = "usuario";

	public function __construct(Adapter $adapter) {
		$this->adapter = $adapter;
		$this->resultSetPrototype = new ResultSet();
		$this->resultSetPrototype->setArrayObjectPrototype(new Usuario());
		$this->initialize();
	}


	public function save(Usuario $usuario)
	{
		$values = array(
			'usuario_tipo_id' => $usuario->usuario_tipo_id,
			'nome' 			  => $usuario->nome,
			'sexo' 			  => $usuario->sexo,
			'data_nascimento' => $usuario->data_nascimento,
			'email' 		  => $usuario->email,
			'telefone'		  => $usuario->telefone,
			'celular'		  => $usuario->celular,
			'cep'			  => $usuario->cep,
			'endereco'		  => $usuario->endereco,
			'numero'		  => $usuario->numero,
			'complemento'	  => $usuario->complemento,
			'bairro'		  => $usuario->bairro,
			'cidade'		  => $usuario->cidade,
			'estado_id'		  => $usuario->estado_id,
			'senha'			  => $usuario->senha,
			'notificacao'	  => $usuario->notificacao,
			'status'		  => $usuario->status,
		);

		if ($this->insert($values)) :
			return true;
		else :
			return false;
		endif;
	}

	public function getTable()
	{
        return $this->table;
    }
}