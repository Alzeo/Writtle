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
        '/admin/highconcept' => [[['_route' => 'highconcept_index', '_controller' => 'App\\Controller\\Admin\\HighconceptController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/projets' => [[['_route' => 'projets_index', '_controller' => 'App\\Controller\\Admin\\ProjetsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/projets/new' => [[['_route' => 'projets_new', '_controller' => 'App\\Controller\\Admin\\ProjetsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\Admin\\RegisterController::register'], null, null, null, false, false, null]],
        '/admin/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\Admin\\SecurityController::login'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\Admin\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/profil' => [[['_route' => 'profil_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/backend' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\Backend\\BackendController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/mano' => [[['_route' => 'mano', '_controller' => 'App\\Controller\\MainController::mano'], null, null, null, false, false, null]],
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
                .'|/admin/pro(?'
                    .'|jet(?'
                        .'|s/([^/]++)(?'
                            .'|/(?'
                                .'|chapitre(?'
                                    .'|s(*:217)'
                                    .'|/(?'
                                        .'|new(*:232)'
                                        .'|([^/]++)(?'
                                            .'|(*:251)'
                                            .'|/edit(*:264)'
                                            .'|(*:272)'
                                        .')'
                                    .')'
                                .')'
                                .'|highconcept/(?'
                                    .'|new(*:301)'
                                    .'|([^/]++)(?'
                                        .'|(*:320)'
                                        .'|/edit(*:333)'
                                        .'|(*:341)'
                                    .')'
                                .')'
                                .'|personnages(*:362)'
                                .'|edit(*:374)'
                            .')'
                            .'|(*:383)'
                        .')'
                        .'|/(?'
                            .'|([^/]++)/personnages/(?'
                                .'|new(*:423)'
                                .'|([^/]++)(?'
                                    .'|(*:442)'
                                    .'|/edit(*:455)'
                                .')'
                            .')'
                            .'|(\\d+)/personnages/([^/]++)(*:491)'
                        .')'
                    .')'
                    .'|fil/([^/]++)(?'
                        .'|(*:516)'
                        .'|/edit(*:529)'
                        .'|(*:537)'
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
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        217 => [[['_route' => 'chapitre_index', '_controller' => 'App\\Controller\\Admin\\ChapitreController::index'], ['idProjet'], ['GET' => 0], null, true, false, null]],
        232 => [[['_route' => 'chapitre_new', '_controller' => 'App\\Controller\\Admin\\ChapitreController::new'], ['idProjet'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        251 => [[['_route' => 'chapitre_show', '_controller' => 'App\\Controller\\Admin\\ChapitreController::show'], ['idProjet', 'id'], ['GET' => 0], null, false, true, null]],
        264 => [[['_route' => 'chapitre_edit', '_controller' => 'App\\Controller\\Admin\\ChapitreController::edit'], ['idProjet', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        272 => [[['_route' => 'chapitre_delete', '_controller' => 'App\\Controller\\Admin\\ChapitreController::delete'], ['idProjet', 'id'], ['DELETE' => 0], null, false, true, null]],
        301 => [[['_route' => 'highconcept_new', '_controller' => 'App\\Controller\\Admin\\HighconceptController::new'], ['idProjet'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        320 => [[['_route' => 'highconcept_show', '_controller' => 'App\\Controller\\Admin\\HighconceptController::show'], ['idProjet', 'id'], ['GET' => 0], null, false, true, null]],
        333 => [[['_route' => 'highconcept_edit', '_controller' => 'App\\Controller\\Admin\\HighconceptController::edit'], ['idProjet', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        341 => [[['_route' => 'highconcept_delete', '_controller' => 'App\\Controller\\Admin\\HighconceptController::delete'], ['idProjet', 'id'], ['DELETE' => 0], null, false, true, null]],
        362 => [[['_route' => 'personnages_index', '_controller' => 'App\\Controller\\Admin\\PersonnagesController::index'], ['idProjet'], ['GET' => 0], null, true, false, null]],
        374 => [[['_route' => 'projets_edit', '_controller' => 'App\\Controller\\Admin\\ProjetsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        383 => [
            [['_route' => 'projets_show', '_controller' => 'App\\Controller\\Admin\\ProjetsController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'projets_delete', '_controller' => 'App\\Controller\\Admin\\ProjetsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        423 => [[['_route' => 'personnages_new', '_controller' => 'App\\Controller\\Admin\\PersonnagesController::new'], ['idProjet'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        442 => [[['_route' => 'personnages_show', '_controller' => 'App\\Controller\\Admin\\PersonnagesController::show'], ['idProjet', 'id'], ['GET' => 0], null, false, true, null]],
        455 => [[['_route' => 'personnages_edit', '_controller' => 'App\\Controller\\Admin\\PersonnagesController::edit'], ['idProjet', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        491 => [[['_route' => 'personnages_delete', '_controller' => 'App\\Controller\\Admin\\PersonnagesController::delete'], ['idProjet', 'id'], ['DELETE' => 0], null, false, true, null]],
        516 => [[['_route' => 'profil_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        529 => [[['_route' => 'profil_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        537 => [
            [['_route' => 'profil_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
