<?php

namespace User\Form;

use Zend\Form\Form;


class EsqueciSenha extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('forgot_password');


        // Email
        $this->add(array(
            'name' => 'email',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'E-mail',
            ),
            'attributes' => array(
                'class' => 'span8',
            )
        ));

        // Submit
        $this->add (array(
            'name' => 'submit',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => 'Enviar',
                'class' => 'btn btn-small span2 btn-inverse pull-right',
            )
        ));
    }
}