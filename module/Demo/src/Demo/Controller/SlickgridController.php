<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Demo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use JStormes\Bootstrap\View\Helper\Form\HorizontalText;

class SlickgridController extends AbstractActionController
{
    public function indexAction()
    {
       
        return new ViewModel();
  
    }
    
    public function bootstrapAction()
    {
         
        return new ViewModel();
    
    }
    
}

