<?php

namespace User\Form;

use Zend\Form\Form;


class Login extends Form
{
	function __construct($name = null)
	{
		parent::__construct("login-form");


		// E-mail
		$this->add(array(
			'name' => 'login',
            'type' => 'Zend\Form\Element\Text',
            'attributes' => array(
                'class' => 'login-field',
                'placeholder' => 'E-mail',
            ),
        ));


        // Senha
		$this->add(array(
			'name' => 'password',
            'type' => 'Zend\Form\Element\Password',
            'attributes' => array(
                'class' => 'login-field',
                'placeholder' => 'Senha',
            ),
        ));


        // Submit
		$this->add(array(
			'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
            	'value' => 'Entrar',
                'class' => 'btn btn-inverse btn-large btn-block',
            ),
        ));
	}
}