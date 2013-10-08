<?php

namespace User;

use User\Model\TipoUsuarioTable;
use User\Model\EstadoTable;


class Module 
{
	public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'table_usuario_tipo' => function($sm) {
                    $adapter = $sm->get('zend_db_adapter');
                    $table = new TipoUsuarioTable($adapter);
                    return $table;
                },
                'table_estado' => function($sm) {
                    $adapter = $sm->get('zend_db_adapter');
                    $table = new EstadoTable($adapter);
                    return $table;
                },
            ),
        );
    }
}