<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/voyages' => [[['_route' => 'voyages', '_controller' => 'App\\Controller\\VoyagesController::index'], null, null, null, false, false, null]],
        '/admin/environnements' => [[['_route' => 'admin.environnements', '_controller' => 'App\\Controller\\admin\\AdminEnvironnementController::index'], null, null, null, false, false, null]],
        '/admin/environnement/ajout' => [[['_route' => 'admin.environnement.ajout', '_controller' => 'App\\Controller\\admin\\AdminEnvironnementController::ajout'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin.voyages', '_controller' => 'App\\Controller\\admin\\AdminVoyagesController::index'], null, null, null, false, false, null]],
        '/admin/ajout' => [[['_route' => 'admin.voyage.ajout', '_controller' => 'App\\Controller\\admin\\AdminVoyagesController::ajout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/voyages/(?'
                    .'|tri/([^/]++)/([^/]++)(*:40)'
                    .'|recherche/([^/]++)(*:65)'
                    .'|voyage/([^/]++)(*:87)'
                .')'
                .'|/admin/(?'
                    .'|e(?'
                        .'|nvironnement/suppr/([^/]++)(*:136)'
                        .'|dit/([^/]++)(*:156)'
                    .')'
                    .'|suppr/([^/]++)(*:179)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        40 => [[['_route' => 'voyages.sort', '_controller' => 'App\\Controller\\VoyagesController::sort'], ['champ', 'ordre'], null, null, false, true, null]],
        65 => [[['_route' => 'voyages.findallequal', '_controller' => 'App\\Controller\\VoyagesController::findAllEqual'], ['champ'], null, null, false, true, null]],
        87 => [[['_route' => 'voyages.showone', '_controller' => 'App\\Controller\\VoyagesController::showOne'], ['id'], null, null, false, true, null]],
        136 => [[['_route' => 'admin.environnement.suppr', '_controller' => 'App\\Controller\\admin\\AdminEnvironnementController::suppr'], ['id'], null, null, false, true, null]],
        156 => [[['_route' => 'admin.voyage.edit', '_controller' => 'App\\Controller\\admin\\AdminVoyagesController::edit'], ['id'], null, null, false, true, null]],
        179 => [
            [['_route' => 'admin.voyage.suppr', '_controller' => 'App\\Controller\\admin\\AdminVoyagesController::suppr'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
