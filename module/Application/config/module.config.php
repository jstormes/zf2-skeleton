<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                    
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type'    => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/application',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Zend\Mvc\Router\Http\Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'may_terminate' => true,
                            'defaults' => array(
                                'type'    => 'Zend\Mvc\Router\Http\Segment',
                                'child_routes' => array(
                                    'route'    => '/[:id]',
                                ),
                            ),
                        ),
        
                    ),
                ),
            ),
        ),
    ),
    'navigation' => array(
        'top_left' => array(
            array(
                'label' => 'Home',
                'route' => 'home',
            ),
//             array(
//                 'label' => 'New Stuff',
//                 'route' => 'home',
//             ),
//             array(
//                 'label' => 'Demo',
//                 'route' => 'application',
//                 'pages' => array(
//                     array(
//                         'label'      => 'Bootstrap Inline',
//                         'route'      => 'application/default',
//                         'controller' => 'form',
//                         'action'     => 'index'
                        
//                     ),
//                     array(
//                         'type'      => 'JStormes\Bootstrap\Navigation\Page\Divider',
//                     ),
//                     array(
//                         'label'      => 'Bootstrap Horzontal',
//                         'route'      => 'application/default',
//                         'controller' => 'form',
//                         'action'     => 'horzontal'
//                     ),
//                     array(
//                         'type'      => 'JStormes\Bootstrap\Navigation\Page\Divider',
//                     ),
//                     array(
//                         'label'      => 'Slickgrid Full Screen',
//                         'route'      => 'application/default',
//                         'controller' => 'form',
//                         'action'     => 'horzontal'
//                     ),
//                 ),
//             ),
//             'pages' =>array(
//                 'label' => 'Page #2',
//                 'route' => 'application/default',
//                 'controller' => 'form',
//                 'action' => 'index'
//             ),
        ),
        'top_right' => array(
        ),
        'bottom_left' => array(
            array(
                'label' => 'Sheet 1',
                
                // Action contoller Example
                'action'     => 'sheet',
                'controller' => 'index',
                //'module' =>'test',
                
                // Defined route example
                'route' => 'application/default',
                
                // URI Example
                //'uri' => 'http://stormes.net',
                'params'     => array('id' => 42)
            ),
            array(
                'label' => 'Sheet 2',
                'route' => 'home',
            ),
            array(
                'label' => 'Sheet 3',
                'route' => 'home',
            ),
        ),
        'bottom_right' => array(
        ),
        
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
        'factories' => array(
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
            'topleft_navigation' => 'JStormes\Bootstrap\Navigation\Service\TopLeftNavigationFactory',
            'bottomleft_navigation' => 'JStormes\Bootstrap\Navigation\Service\BottomLeftNavigationFactory',
        ),
        'services' => array(
            
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController',
            'Application\Controller\Form' => 'Application\Controller\FormController'
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../../../layout/two_corners.phtml',
            'layout/four_corners'     => __DIR__ . '/../../../layout/four_corners.phtml',
            'layout/two_corners'      => __DIR__ . '/../../../layout/two_corners.phtml',
            'layout/menu_top'         => __DIR__ . '/../../../layout/menu_top.phtml',
            'layout/menu_bottom'      => __DIR__ . '/../../../layout/menu_bottom.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
    'jstormes' => array(
        'bootstrap' => array(
            'menu' => array(
                'enabled' =>true,
            ),
        ),
    ),
);
