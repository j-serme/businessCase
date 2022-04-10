<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/animal/index' => [[['_route' => 'animal_index', '_controller' => 'App\\Controller\\AdminController::indexAnimal'], null, null, null, false, false, null]],
        '/admin/animal/create' => [[['_route' => 'animal_create', '_controller' => 'App\\Controller\\AdminController::createAnimal'], null, null, null, false, false, null]],
        '/admin/category/index' => [[['_route' => 'category_index', '_controller' => 'App\\Controller\\AdminController::indexCategories'], null, null, null, false, false, null]],
        '/admin/category/create' => [[['_route' => 'category_create', '_controller' => 'App\\Controller\\AdminController::createCategory'], null, null, null, false, false, null]],
        '/admin/users/index' => [[['_route' => 'users_index', '_controller' => 'App\\Controller\\AdminController::indexUsers'], null, null, null, false, false, null]],
        '/admin/products' => [[['_route' => 'product_index', '_controller' => 'App\\Controller\\AdminController::indexProducts'], null, null, null, false, false, null]],
        '/admin/products/create' => [[['_route' => 'product_create', '_controller' => 'App\\Controller\\AdminController::createProducts'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home_page', '_controller' => 'App\\Controller\\HomePageController::index'], null, null, null, false, false, null]],
        '/products' => [[['_route' => 'products', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, true, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/signin' => [[['_route' => 'signin', '_controller' => 'App\\Controller\\RegistrationController::signin'], null, null, null, false, false, null]],
        '/signout' => [[['_route' => 'signout', '_controller' => 'App\\Controller\\RegistrationController::signout'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/ad(?'
                    .'|dress/(?'
                        .'|([^/]++)(*:30)'
                        .'|change/([^/]++)(*:52)'
                        .'|delete/([^/]++)(*:74)'
                    .')'
                    .'|min/(?'
                        .'|animal/(?'
                            .'|change/([^/]++)(*:114)'
                            .'|delete/([^/]++)(*:137)'
                        .')'
                        .'|category/(?'
                            .'|change/([^/]++)(*:173)'
                            .'|delete/([^/]++)(*:196)'
                        .')'
                        .'|users/(?'
                            .'|modify/([^/]++)(*:229)'
                            .'|delete/([^/]++)(*:252)'
                        .')'
                        .'|products/(?'
                            .'|change/([^/]++)(*:288)'
                            .'|delete/([^/]++)(*:311)'
                        .')'
                    .')'
                .')'
                .'|/profile/(?'
                    .'|change(?'
                        .'|/([^/]++)(*:352)'
                        .'|_password/([^/]++)(*:378)'
                    .')'
                    .'|delete/([^/]++)(*:402)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:442)'
                    .'|wdt/([^/]++)(*:462)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:508)'
                            .'|router(*:522)'
                            .'|exception(?'
                                .'|(*:542)'
                                .'|\\.css(*:555)'
                            .')'
                        .')'
                        .'|(*:565)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'address', '_controller' => 'App\\Controller\\AddressController::new'], ['id'], null, null, false, true, null]],
        52 => [[['_route' => 'address_change', '_controller' => 'App\\Controller\\AddressController::change'], ['id'], null, null, false, true, null]],
        74 => [[['_route' => 'address_delete', '_controller' => 'App\\Controller\\AddressController::delete'], ['id'], null, null, false, true, null]],
        114 => [[['_route' => 'animal_change', '_controller' => 'App\\Controller\\AdminController::changeAnimal'], ['id'], null, null, false, true, null]],
        137 => [[['_route' => 'animal_delete', '_controller' => 'App\\Controller\\AdminController::deleteAnimal'], ['id'], null, null, false, true, null]],
        173 => [[['_route' => 'category_change', '_controller' => 'App\\Controller\\AdminController::changeCategory'], ['id'], null, null, false, true, null]],
        196 => [[['_route' => 'category_delete', '_controller' => 'App\\Controller\\AdminController::deleteCategory'], ['id'], null, null, false, true, null]],
        229 => [[['_route' => 'users_modify', '_controller' => 'App\\Controller\\AdminController::changeUsers'], ['id'], null, null, false, true, null]],
        252 => [[['_route' => 'users_delete', '_controller' => 'App\\Controller\\AdminController::deleteUsers'], ['id'], null, null, false, true, null]],
        288 => [[['_route' => 'product_change', '_controller' => 'App\\Controller\\AdminController::changeProduct'], ['id'], null, null, false, true, null]],
        311 => [[['_route' => 'product_delete', '_controller' => 'App\\Controller\\AdminController::deleteProduct'], ['id'], null, null, false, true, null]],
        352 => [[['_route' => 'profile_change', '_controller' => 'App\\Controller\\ProfileController::change'], ['id'], null, null, false, true, null]],
        378 => [[['_route' => 'profile_change_password', '_controller' => 'App\\Controller\\ProfileController::changePassword'], ['id'], null, null, false, true, null]],
        402 => [[['_route' => 'profile_delete', '_controller' => 'App\\Controller\\ProfileController::delete'], ['id'], null, null, false, true, null]],
        442 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        462 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        508 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        522 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        542 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        555 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        565 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
