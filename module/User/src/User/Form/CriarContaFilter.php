<?php

namespace User\Form;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilterInterface;
use Zend\InputFilter\InputFilterAwareInterface;


class CriarContaFilter implements InputFilterAwareInterface 
{
	protected $inputFilter;


	public function setInputFilter(InputFilterInterface $inputFilter) {
		throw new \Exception("Not used", 1);
	}

	public function getInputFilter() {
		if (!$this->inputFilter) {
			$inputFilter = new InputFilter();
			$factory = new InputFactory();

			// Nome Completo
			$inputFilter->add(
				$factory->createInput(
					array(
						'name' => 'nome',
						'required' => true,
						'filters'   => array(
			                array('name' => 'StringTrim'),
			            ),
						'validators' => array( 
							$this->notEmpty('Nome Completo')
						),
					)
				)
			);


			// Data Nascimento
			$inputFilter->add(
				$factory->createInput(
					array(
						'name' => 'data_nascimento',
						'required' => true,
						'validators' => array( 
							$this->notEmpty('Data Nascimento')
						),
					)
				)
			);


			// E-mail
			$inputFilter->add(
				$factory->createInput(
					array(
					    'name' => 'email',
					    'required' => true,
					    'filter' => array(
					        'name' => 'StripTags',
					    ),
					    'validators' => array(
					        array(
					            'name' => 'NotEmpty',
					            'break_chain_on_failure' => true,
					            'options' => array(
					                'messages' => array(
					                    \Zend\Validator\NotEmpty::IS_EMPTY => 'O campo E-mail é de preenchimento obrigatório',
					                ),
					            ),
					        ),
					        array(
					            'name' => 'EmailAddress',
					            'options' => array(
					            	'messages' => array(
					                    \Zend\Validator\EmailAddress::INVALID_FORMAT => 'O E-mail digitado não é um endereço de e-mail válido. Favor preenche-lo corretamente.',
					                ),
					            ),
					        ),
					    ),
					)
				)
			);


			// CEP
			$inputFilter->add(
				$factory->createInput(
					array(
						'name' => 'cep',
						'required' => true,
						'validators' => array( 
							$this->notEmpty('CEP')
						),
					)
				)
			);


			// Endereco
			$inputFilter->add(
				$factory->createInput(
					array(
						'name' => 'endereco',
						'required' => true,
						'validators' => array( 
							$this->notEmpty('Endereço')
						),
					)
				)
			);


			// Número
			$inputFilter->add(
				$factory->createInput(
					array(
						'name' => 'numero',
						'required' => true,
						'validators' => array( 
							$this->notEmpty('Número')
						),
					)
				)
			);


			// Bairro
			$inputFilter->add(
				$factory->createInput(
					array(
						'name' => 'bairro',
						'required' => true,
						'validators' => array( 
							$this->notEmpty('Bairro')
						),
					)
				)
			);


			// Cidade
			$inputFilter->add(
				$factory->createInput(
					array(
						'name' => 'cidade',
						'required' => true,
						'validators' => array( 
							$this->notEmpty('Cidade')
						),
					)
				)
			);


			// Senha
			$inputFilter->add(
				$factory->createInput(
					array(
						'name' => 'senha',
						'required' => true,
						'validators' => array( 
							$this->notEmpty('Senha')
						),
					)
				)
			);


			// Confirmar senha
			$inputFilter->add(
				$factory->createInput(
					array(
						'name' => 'confirmar_senha',
						'required' => true,
						'validators' => array( 
							$this->notEmpty('Confirmar senha')
						),
					)
				)
			);


			$this->inputFilter = $inputFilter;
		}

		return $this->inputFilter;
	}


	/**
     * notEmpty
     *
     * Valida se o campo está vazio
     *
     * @param  String $inputName
     * @return \Zend\Validator\NotEmpty
     */
    protected function notEmpty($inputName)
    {
        $notEmpty = new \Zend\Validator\NotEmpty();
        $notEmpty->setMessage("O campo {$inputName} é de preenchimento obrigatório", \Zend\Validator\NotEmpty::IS_EMPTY);

        return $notEmpty;
    }
}