<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController:logout'], null, null, null, false, false, null],
        ],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/admin/index' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users', '_controller' => 'App\\Controller\\AdminController::users_list'], null, null, null, false, false, null]],
        '/admin/evaluations' => [[['_route' => 'admin_evaluations', '_controller' => 'App\\Controller\\AdminController::evaluations_list'], null, null, null, false, false, null]],
        '/admin/generer_evaluation' => [[['_route' => 'admin_generer_evaluation', '_controller' => 'App\\Controller\\AdminController::generer_evaluation'], null, null, null, false, false, null]],
        '/admin/questions' => [[['_route' => 'admin_questions', '_controller' => 'App\\Controller\\AdminController::questions_list'], null, null, null, false, false, null]],
        '/admin/ajouter_question' => [[['_route' => 'admin_ajouter_questions', '_controller' => 'App\\Controller\\AdminController::ajouter_question'], null, null, null, false, false, null]],
        '/admin/ajouter_categorie' => [[['_route' => 'admin_ajouter_categorie', '_controller' => 'App\\Controller\\AdminController::ajouter_categorie'], null, null, null, false, false, null]],
        '/admin/ajouter_user' => [[['_route' => 'admin_ajouter_user', '_controller' => 'App\\Controller\\AdminController::ajouter_user'], null, null, null, false, false, null]],
        '/admin/modifier_user' => [[['_route' => 'admin_modifier_user', '_controller' => 'App\\Controller\\AdminController::modifier_user'], null, null, null, false, false, null]],
        '/user/index' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/user/questions' => [[['_route' => 'user_questions', '_controller' => 'App\\Controller\\UserController::questions_list'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
