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
//             'home' => array(
//                 'type' => 'Zend\Mvc\Router\Http\Literal',
//                 'options' => array(
//                     'route'    => '/',
//                     'defaults' => array(
//                         'controller' => 'Demo\Controller\Index',
//                         'action'     => 'index',
//                     ),
                    
//                 ),
//             ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'demo' => array(
                'type'    => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/demo',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Demo\Controller',
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
                        ),
        
                    ),
                ),
            ),
        ),
    ),
    'navigation' => array(
        'top_left' => array(
            array(
                'label' => 'Demo',
                'route' => 'demo/default',
                'pages' => array(
                    array(
                        'label'      => 'Bootstrap Inline (Post Back)',
                        'route'      => 'demo/default',
                        'controller' => 'form',
                        'action'     => 'index'
                    ),
                    array(
                        'label'      => 'Bootstrap Inline (AJAX)',
                        'route'      => 'demo/default',
                        'controller' => 'form',
                        'action'     => 'index'
                    ),
                    array(
                        'type'      => 'JStormes\Bootstrap\Navigation\Page\Divider',
                    ),
                    array(
                        'label'      => 'Bootstrap Horzontal (Post Back)',
                        'route'      => 'demo/default',
                        'controller' => 'form',
                        'action'     => 'horzontal'
                    ),
                    array(
                        'label'      => 'Bootstrap Horzontal (AJAX)',
                        'route'      => 'demo/default',
                        'controller' => 'form',
                        'action'     => 'horzontal'
                    ),
                    array(
                        'type'      => 'JStormes\Bootstrap\Navigation\Page\Divider',
                    ),
                    array(
                        'label'      => 'Slickgrid Full Screen',
                        'route'      => 'demo/default',
                        'controller' => 'form',
                        'action'     => 'horzontal'
                    ),  
                    array(
                        'label'      => 'Slickgrid Bootstrap',
                        'route'      => 'demo/default',
                        'controller' => 'slickgrid',
                        'action'     => 'bootstrap'
                    ),
                    array(
                        'type'      => 'JStormes\Bootstrap\Navigation\Page\Divider',
                    ),
                    array(
                        'label'      => 'Menus',
                        'route'      => 'demo/default',
                        'controller' => 'form',
                        'action'     => 'horzontal'
                    ),
                    array(
                        'type'      => 'JStormes\Bootstrap\Navigation\Page\Divider',
                    ),
                    array(
                        'label'      => 'DataTables',
                        'route'      => 'demo',
                        'controller' => 'form',
                        'action'     => 'horzontal'
                    ),
                ),
            ),
//             array(
//                 'label' => 'New Stuff',
//                 'route' => 'home',
//             ),
//             array(
//                 'label' => 'Demo Forms',
//                 'route' => 'application',
//                 'pages' => array(
//                     array(
//                         'label'      => 'Inline',
//                         'route'      => 'application/default',
//                         'controller' => 'form',
//                         'action'     => 'index'
//                     ),
//                     array(
//                         'type'      => 'JStormes\Bootstrap\Navigation\Page\Divider',
//                     ),
//                     array(
//                         'label'      => 'Horzontal',
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
//             array(
//                 'label' => 'Sheet 1',
                
//                 // Action contoller Example
//                 'action'     => 'sheet',
//                 'controller' => 'index',
//                 //'module' =>'test',
                
//                 // Defined route example
//                 'route' => 'application/default',
                
//                 // URI Example
//                 //'uri' => 'http://stormes.net',
                
//             ),
//             array(
//                 'label' => 'Sheet 2',
//                 'route' => 'home',
//             ),
//             array(
//                 'label' => 'Sheet 3',
//                 'route' => 'home',
//             ),
        ),
        'bottom_right' => array(
        ),
        
    ),
//     'service_manager' => array(
//         'abstract_factories' => array(
//             'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
//             'Zend\Log\LoggerAbstractServiceFactory',
//         ),
//         'aliases' => array(
//             'translator' => 'MvcTranslator',
//         ),
//         'factories' => array(
//             'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
//             'topleft_navigation' => 'JStormes\Bootstrap\Navigation\Service\TopLeftNavigationFactory',
//             'bottomleft_navigation' => 'JStormes\Bootstrap\Navigation\Service\BottomLeftNavigationFactory',
//         ),
//         'services' => array(
            
//         ),
//     ),
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
            'Demo\Controller\Index' => 'Demo\Controller\IndexController',
            'Demo\Controller\Slickgrid' => 'Demo\Controller\SlickgridController',
        ),
    ),
    'view_manager' => array(
//         'display_not_found_reason' => true,
//         'display_exceptions'       => true,
//         'doctype'                  => 'HTML5',
//         'not_found_template'       => 'error/404',
//         'exception_template'       => 'error/index',
//         'template_map' => array(
//             //'layout/layout'           => __DIR__ . '/../../../layout/four_corners.phtml',
//             //'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
//             //'error/404'               => __DIR__ . '/../view/error/404.phtml',
//             //'error/index'             => __DIR__ . '/../view/error/index.phtml',
//         ),
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
