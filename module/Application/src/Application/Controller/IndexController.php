<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }


    public function quemSomosAction()
    {
        return new ViewModel();
    }


    public function dicasAction()
    {
        return new ViewModel();
    }

    public function estatisticasAction()
    {
        return new ViewModel();
    }
}
