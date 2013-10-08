<?php 

namespace User\Model;

use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\Sql\Select;
use Zend\Db\TableGateway\AbstractTableGateway;


class TipoUsuarioTable extends AbstractTableGateway
{
	protected $table = "usuario_tipo";

	public function __construct(Adapter $adapter)
	{
		$this->adapter = $adapter;
		$this->resultSetPrototype = new ResultSet();
		$this->resultSetPrototype->setArrayObjectPrototype(new TipoUsuario());
		$this->initialize();
	}

	public function fetchAll()
	{
		$select = new Select();
		$select->from($this->getTable())
			   ->columns(array('id', 'tipo'))
			   ->where(array('status' => 1));

		$entity = $this->selectWith($select);
		return $entity;
	}

	public function getTable()
	{
        return $this->table;
    }
}