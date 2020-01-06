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
        '/appendice' => [[['_route' => 'appendice_index', '_controller' => 'App\\Controller\\AppendiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/appendice/new' => [[['_route' => 'appendice_new', '_controller' => 'App\\Controller\\AppendiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/crud' => [[['_route' => 'Crud', '_controller' => 'App\\Controller\\CRUDController::index'], null, null, null, false, false, null]],
        '/client/active' => [[['_route' => 'client_active_index', '_controller' => 'App\\Controller\\ClientActiveController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/active/new' => [[['_route' => 'client_active_new', '_controller' => 'App\\Controller\\ClientActiveController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client/passive' => [[['_route' => 'client_passive_index', '_controller' => 'App\\Controller\\ClientPassiveController::index'], null, ['GET' => 0], null, true, false, null]],
        '/client/passive/new' => [[['_route' => 'client_passive_new', '_controller' => 'App\\Controller\\ClientPassiveController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande' => [[['_route' => 'commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/new' => [[['_route' => 'commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/composants' => [[['_route' => 'composants_index', '_controller' => 'App\\Controller\\ComposantsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/composants/new' => [[['_route' => 'composants_new', '_controller' => 'App\\Controller\\ComposantsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/plat' => [[['_route' => 'plat_index', '_controller' => 'App\\Controller\\PlatController::index'], null, ['GET' => 0], null, true, false, null]],
        '/plat/new' => [[['_route' => 'plat_new', '_controller' => 'App\\Controller\\PlatController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reaps' => [[['_route' => 'reaps_index', '_controller' => 'App\\Controller\\ReapsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reaps/new' => [[['_route' => 'reaps_new', '_controller' => 'App\\Controller\\ReapsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/appendice/([^/]++)(?'
                    .'|(*:191)'
                    .'|/edit(*:204)'
                    .'|(*:212)'
                .')'
                .'|/c(?'
                    .'|lient/(?'
                        .'|active/([^/]++)(?'
                            .'|(*:253)'
                            .'|/edit(*:266)'
                            .'|(*:274)'
                        .')'
                        .'|passive/([^/]++)(?'
                            .'|(*:302)'
                            .'|/edit(*:315)'
                            .'|(*:323)'
                        .')'
                    .')'
                    .'|om(?'
                        .'|mande/([^/]++)(?'
                            .'|(*:355)'
                            .'|/edit(*:368)'
                            .'|(*:376)'
                        .')'
                        .'|posants/([^/]++)(?'
                            .'|(*:404)'
                            .'|/edit(*:417)'
                            .'|(*:425)'
                        .')'
                    .')'
                .')'
                .'|/plat/([^/]++)(?'
                    .'|(*:453)'
                    .'|/edit(*:466)'
                    .'|(*:474)'
                .')'
                .'|/reaps/([^/]++)(?'
                    .'|(*:501)'
                    .'|/edit(*:514)'
                    .'|(*:522)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        191 => [[['_route' => 'appendice_show', '_controller' => 'App\\Controller\\AppendiceController::show'], ['idAppendice'], ['GET' => 0], null, false, true, null]],
        204 => [[['_route' => 'appendice_edit', '_controller' => 'App\\Controller\\AppendiceController::edit'], ['idAppendice'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        212 => [[['_route' => 'appendice_delete', '_controller' => 'App\\Controller\\AppendiceController::delete'], ['idAppendice'], ['DELETE' => 0], null, false, true, null]],
        253 => [[['_route' => 'client_active_show', '_controller' => 'App\\Controller\\ClientActiveController::show'], ['idClient'], ['GET' => 0], null, false, true, null]],
        266 => [[['_route' => 'client_active_edit', '_controller' => 'App\\Controller\\ClientActiveController::edit'], ['idClient'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        274 => [[['_route' => 'client_active_delete', '_controller' => 'App\\Controller\\ClientActiveController::delete'], ['idClient'], ['DELETE' => 0], null, false, true, null]],
        302 => [[['_route' => 'client_passive_show', '_controller' => 'App\\Controller\\ClientPassiveController::show'], ['idClientPassive'], ['GET' => 0], null, false, true, null]],
        315 => [[['_route' => 'client_passive_edit', '_controller' => 'App\\Controller\\ClientPassiveController::edit'], ['idClientPassive'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        323 => [[['_route' => 'client_passive_delete', '_controller' => 'App\\Controller\\ClientPassiveController::delete'], ['idClientPassive'], ['DELETE' => 0], null, false, true, null]],
        355 => [[['_route' => 'commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['idCommande'], ['GET' => 0], null, false, true, null]],
        368 => [[['_route' => 'commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['idCommande'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        376 => [[['_route' => 'commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['idCommande'], ['DELETE' => 0], null, false, true, null]],
        404 => [[['_route' => 'composants_show', '_controller' => 'App\\Controller\\ComposantsController::show'], ['idComposants'], ['GET' => 0], null, false, true, null]],
        417 => [[['_route' => 'composants_edit', '_controller' => 'App\\Controller\\ComposantsController::edit'], ['idComposants'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        425 => [[['_route' => 'composants_delete', '_controller' => 'App\\Controller\\ComposantsController::delete'], ['idComposants'], ['DELETE' => 0], null, false, true, null]],
        453 => [[['_route' => 'plat_show', '_controller' => 'App\\Controller\\PlatController::show'], ['idPlat'], ['GET' => 0], null, false, true, null]],
        466 => [[['_route' => 'plat_edit', '_controller' => 'App\\Controller\\PlatController::edit'], ['idPlat'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        474 => [[['_route' => 'plat_delete', '_controller' => 'App\\Controller\\PlatController::delete'], ['idPlat'], ['DELETE' => 0], null, false, true, null]],
        501 => [[['_route' => 'reaps_show', '_controller' => 'App\\Controller\\ReapsController::show'], ['idRepas'], ['GET' => 0], null, false, true, null]],
        514 => [[['_route' => 'reaps_edit', '_controller' => 'App\\Controller\\ReapsController::edit'], ['idRepas'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        522 => [
            [['_route' => 'reaps_delete', '_controller' => 'App\\Controller\\ReapsController::delete'], ['idRepas'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
