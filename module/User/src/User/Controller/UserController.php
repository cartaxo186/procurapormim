<?php

namespace User\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use User\Form\CriarConta;
use User\Form\CriarContaFilter;
use User\Form\EsqueciSenha;
use User\Form\Login;
use User\Model\Estado;
use User\Model\TipoUsuario;


class UserController extends AbstractActionController
{
    protected $table_usuario_tipo;
    protected $table_estado;


    public function indexAction()
    {
        return new ViewModel();
    }


    public function criarContaAction()
    {
        $form = new CriarConta(
            $this->getTable($this->table_usuario_tipo, 'table_usuario_tipo')->fetchAll(),
            $this->getTable($this->table_estado, 'table_estado')->fetchAll()
        );

        if ($this->getRequest()->isPost()) :
            $criarContaFilter = new CriarContaFilter();
            $data = $this->getRequest()->getPost();

            $form->setInputFilter($criarContaFilter->getInputFilter());
            $form->setData($data);

            if ($form->isValid()) :
                return $this->redirect()->toRoute('minha-conta');
            else :
                echo "<pre>";
                print_r($data);
                echo "</pre>";

                var_dump($form->getMessages());
            endif;

        endif;

        return new ViewModel(
            array(
                'form' => $form,
            )
        );
    }

    public function loginAction()
    {
        $form = new Login();

        return new ViewModel(
            array(
                'form' => $form,
            )
        );
    }

    public function esqueciSenhaAction()
    {
        $form = new EsqueciSenha();

        return new ViewModel(
            array(
                'form' => $form,
            )
        );
    }

    public function minhaContaAction()
    {
        return new ViewModel();
    }


    /** 
     * getTable
     *
     * 
     *
     * @param array  $instanceObject
     * @param string $service
     *
     * @return array $instanceObject
     */
    public function getTable($instanceObject, $service)
    {
        if (!$instanceObject) :
            $sm = $this->getServiceLocator();
            $instanceObject = $sm->get($service);
        endif;

        return $instanceObject;
    }
}
