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
use Zend\View\Model\JsonModel;
//use JStormes\Bootstrap\View\Helper\Form\HorizontalText;
//use Demo\Model;
use Demo\Model\SampleData;
use Demo\Model\SlickGridTables;

class SlickgridController extends AbstractActionController
{
    public function indexAction()
    {
        $model = new SlickGridTables();
        
        print_r($model->getColumns());
        
        $rows = $model->select();
        
        print_r($rows);
        exit();
       
        return new ViewModel();
  
    }
    
    public function bootstrapAction()
    {
        $table = new SlickGridTables();
         
        return new ViewModel();
    
    }
    
    public function rpcAction()
    {
        // Our model to expose as a JSON RPC service.
        //$model = new SampleData();
        $model = new SlickGridTables();
        
        
        // New JSON RPS-Server.
        $server = new \Zend\Json\Server\Server();
        
        // Tell RPC Server to use model.
        $server->setClass($model);
        
        // Requst for list of Sevices/Methods.
        if ('GET' == $_SERVER['REQUEST_METHOD']) {
            // Indicate the URL endpoint, and the JSON-RPC version used:
            $uri = $this->getRequest()->getUri();
            $server->setTarget($uri)
                ->setEnvelope(\Zend\Json\Server\Smd::ENV_JSONRPC_2);
        
            // Grab the SMD (Service Mapping Description)
            $smd = $server->getServiceMap()->toArray();
        
            // Retrun the array into the Jasn View Model
            return new JsonModel($smd);
        }
        
        // Request for a service
        $server->handle();
        
        // Short circut the rest of the framework, we no longer need it.
        exit();
      
    }
    
}

