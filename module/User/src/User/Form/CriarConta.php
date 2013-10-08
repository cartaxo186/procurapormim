<?php

namespace User\Form;

use Zend\Form\Form;


class CriarConta extends Form
{
    protected $tipoUsuario;
    protected $estados;


	function __construct($arrTipoUsuario = array(), $arrEstados = array())
	{
		parent::__construct('form-create-account', array(), array());

        $this->tipoUsuario = $arrTipoUsuario;
        $this->estados     = $arrEstados;

		// Tipo Conta
        $this->add(array(
            'name' => 'tipo_conta',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Tipo de conta',
                'options' => $this->getOptionsForSelect($this->tipoUsuario, 'tipo'),
            ),
            'attributes' => array(
                'class' => 'custom-select span4 no-margin mleft',
            )
        ));


        // Nome Completo
        $this->add(array(
            'name' => 'nome',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Nome Completo',
            ),
            'attributes' => array(
                'class' => 'span8',
            )
        ));


        // Data Nascimento
        $this->add(array(
            'name' => 'data_nasc',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Data Nascimento',
            ),
            'attributes' => array(
                'class' => 'span2',
            )
        ));


        // E-mail
        $this->add(array(
            'name' => 'email',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'E-mail',
            ),
            'attributes' => array(
                'class' => 'span6',
            )
        ));


        // Telefone
        $this->add(array(
            'name' => 'telefone',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Telefone',
            ),
            'attributes' => array(
                'class' => 'span3',
            )
        ));


        // Celular
        $this->add(array(
            'name' => 'celular',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Celular',
            ),
            'attributes' => array(
                'class' => 'span3',
            )
        ));


        // CEP
        $this->add(array(
            'name' => 'cep',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'CEP',
            ),
            'attributes' => array(
                'class' => 'span3',
            )
        ));


        // Endereco
        $this->add(array(
            'name' => 'endereco',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Endereço',
            ),
            'attributes' => array(
                'class' => 'span8',
            )
        ));


        // Numero
        $this->add(array(
            'name' => 'numero',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Número',
            ),
            'attributes' => array(
                'class' => 'span2',
            )
        ));


        // Complemento
        $this->add(array(
            'name' => 'complemento',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Complemento',
            ),
            'attributes' => array(
                'class' => 'span4',
            )
        ));


        // Cidade
        $this->add(array(
            'name' => 'cidade',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Cidade',
            ),
            'attributes' => array(
                'class' => 'span4',
            )
        ));


        // Bairro
        $this->add(array(
            'name' => 'bairro',
            'type' => 'Zend\Form\Element\Text',
            'options' => array(
                'label' => 'Bairro',
            ),
            'attributes' => array(
                'class' => 'span4',
            )
        ));


        // UF
        $this->add(array(
            'name' => 'estado',
            'type' => 'Zend\Form\Element\Select',
            'options' => array(
                'label' => 'Estado',
                'options' => $this->getOptionsForSelect($this->estados, 'nome')
            ),
            'attributes' => array(
                'class' => 'custom-select span4',
            )
        ));


        // Senha
        $this->add(array(
            'name' => 'senha',
            'type' => 'Zend\Form\Element\Password',
            'options' => array(
                'label' => 'Senha',
            ),
            'attributes' => array(
                'class' => 'span4',
            )
        ));


        // Confirmar Senha
        $this->add(array(
            'name' => 'confirmar_senha',
            'type' => 'Zend\Form\Element\Password',
            'options' => array(
                'label' => 'Confirmar Senha',
            ),
            'attributes' => array(
                'class' => 'span4',
            )
        ));


        // Deseja receber notificações
        $this->add(array(
            'name' => 'noticicacoes',
            'type' => 'Zend\Form\Element\Checkbox',
            'options' => array(
                'label' => 'Deseja receber notificações dos anúncios em sua região?',
            ),
        ));


        // Button Cadastrar
        $this->add(array(
            'name' => 'cadastrar',
            'type' => 'Zend\Form\Element\Submit',
            'attributes' => array(
                'value' => 'Cadastrar',
                'class' => 'btn btn-large span2 btn-inverse pull-right',
            )
        ));
	}



    /** 
     * getOptionsForSelect
     *
     * Empurramos os dados do $data no array para retorna-lo depois.
     *
     * @param array  $data
     * @param string $column
     *
     * @return array $selectData
     */
    public function getOptionsForSelect($data, $column) {
        $selectData = array();
 
        foreach ($data as $value) {
            $selectData[$value->id] = $value->$column;
        }
 
        return $selectData;
    }
}