<?php

namespace User\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select;
use Zend\Db\TableGateway\AbstractTableGateway;


class EstadoTable extends AbstractTableGateway
{
	protected $table = "estado";

	public function __construct(Adapter $adapter)
	{
		$this->adapter = $adapter;
		$this->resultSetPrototype = new ResultSet();
		$this->resultSetPrototype->setArrayObjectPrototype(new Estado());
		$this->initialize();
	}


	public function fetchAll()
	{
		$select = new Select();
		$select->from($this->getTable())->order('nome');

		$entity = $this->select($select);
		return $entity;
	}


	public function getTable()
	{
        return $this->table;
    }
}