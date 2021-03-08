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
        '/admin/GestionHopital' => [[['_route' => 'homepageHospital', '_controller' => 'App\\Controller\\HospitalController::homepageHospital'], null, null, null, false, false, null]],
        '/admin/creerServiceHotpial' => [[['_route' => 'addService', '_controller' => 'App\\Controller\\HospitalController::addService'], null, null, null, false, false, null]],
        '/user/homepagePatient' => [[['_route' => 'homepagePatient', '_controller' => 'App\\Controller\\PatientController::index'], null, null, null, false, false, null]],
        '/user/ajouterPatient' => [[['_route' => 'createPatient', '_controller' => 'App\\Controller\\PatientController::addPatient'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/GestionPersonnel' => [[['_route' => 'homepageStaff', '_controller' => 'App\\Controller\\StaffController::homepageStaff'], null, null, null, false, false, null]],
        '/admin/createStaffMember' => [[['_route' => 'createNewStaffMember', '_controller' => 'App\\Controller\\StaffController::createNewStaffMember'], null, null, null, false, false, null]],
        '/user/séjour' => [[['_route' => 'homepageStay', '_controller' => 'App\\Controller\\StayController::homepageStay'], null, null, null, false, false, null]],
        '/user/creationPatientEtSejour' => [[['_route' => 'addStayAndPatient', '_controller' => 'App\\Controller\\StayController::addStayandPatient'], null, null, null, false, false, null]],
        '/admin/historiqueConnexion' => [[['_route' => 'logConnection', '_controller' => 'App\\Controller\\logController::logConnection'], null, null, null, false, false, null]],
        '/admin/historiqueGestionPatient' => [[['_route' => 'logManagePatient', '_controller' => 'App\\Controller\\logController::logManagePatient'], null, null, null, false, false, null]],
        '/admin/historiqueGestionSéjour' => [[['_route' => 'logManageStay', '_controller' => 'App\\Controller\\logController::logManageStay'], null, null, null, false, false, null]],
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
                .'|/admin/(?'
                    .'|modifier(?'
                        .'|S(?'
                            .'|erviceHotpial/([^/]++)(*:216)'
                            .'|taffMember/([^/]++)(*:243)'
                        .')'
                        .'|Chambre/([^/]++)/([^/]++)/([^/]++)(*:286)'
                    .')'
                    .'|supprimer(?'
                        .'|Service/([^/]++)(*:323)'
                        .'|Chambre/([^/]++)/([^/]++)/([^/]++)(*:365)'
                    .')'
                    .'|gestionService/([^/]++)/([^/]++)(*:406)'
                    .'|ajouter(?'
                        .'|Lit/([^/]++)/([^/]++)/([^/]++)(*:454)'
                        .'|Chambre/([^/]++)/([^/]++)(*:487)'
                    .')'
                    .'|retirerLit/([^/]++)/([^/]++)/([^/]++)(*:533)'
                .')'
                .'|/user/(?'
                    .'|modifier(?'
                        .'|Patient/([^/]++)(*:578)'
                        .'|Séjour/([^/]++)/([^/]++)(*:611)'
                    .')'
                    .'|s(?'
                        .'|upprimer(?'
                            .'|Patient/([^/]++)(*:651)'
                            .'|S(?'
                                .'|taffMember/([^/]++)(*:682)'
                                .'|éjour/([^/]++)(*:705)'
                            .')'
                        .')'
                        .'|éjoursPatient/([^/]++)/([^/]++)/([^/]++)(*:756)'
                    .')'
                    .'|nouveauSéjour/([^/]++)/([^/]++)/([^/]++)(*:806)'
                    .'|a(?'
                        .'|ddStay/([^/]++)/([^/]++)/([^/]++)(*:851)'
                        .'|pplicationModifierSéjour/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:929)'
                    .')'
                    .'|erreurModifierSéjour/([^/]++)/([^/]++)/([^/]++)(*:986)'
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
        216 => [[['_route' => 'updateService', '_controller' => 'App\\Controller\\HospitalController::updateService'], ['id'], null, null, false, true, null]],
        243 => [[['_route' => 'updateStaff', '_controller' => 'App\\Controller\\StaffController::updateStaff'], ['id'], null, null, false, true, null]],
        286 => [[['_route' => 'updateRoom', '_controller' => 'App\\Controller\\HospitalController::updateRoom'], ['id', 'name', 'room'], null, null, false, true, null]],
        323 => [[['_route' => 'delService', '_controller' => 'App\\Controller\\HospitalController::delService'], ['id'], null, null, false, true, null]],
        365 => [[['_route' => 'delRoom', '_controller' => 'App\\Controller\\HospitalController::delRoom'], ['id', 'name', 'room'], null, null, false, true, null]],
        406 => [[['_route' => 'manageService', '_controller' => 'App\\Controller\\HospitalController::manageService'], ['id', 'name'], null, null, false, true, null]],
        454 => [[['_route' => 'addBed', '_controller' => 'App\\Controller\\HospitalController::addBed'], ['id', 'name', 'room'], null, null, false, true, null]],
        487 => [[['_route' => 'addRoom', '_controller' => 'App\\Controller\\HospitalController::addRoom'], ['id', 'name'], null, null, false, true, null]],
        533 => [[['_route' => 'removeBed', '_controller' => 'App\\Controller\\HospitalController::removeBed'], ['id', 'name', 'room'], null, null, false, true, null]],
        578 => [[['_route' => 'updatePatient', '_controller' => 'App\\Controller\\PatientController::updatePatient'], ['id'], null, null, false, true, null]],
        611 => [[['_route' => 'updateStay', '_controller' => 'App\\Controller\\StayController::updateStay'], ['id', 'serviceId'], null, null, false, true, null]],
        651 => [[['_route' => 'delPatient', '_controller' => 'App\\Controller\\PatientController::delPatient'], ['id'], null, null, false, true, null]],
        682 => [[['_route' => 'delStaff', '_controller' => 'App\\Controller\\StaffController::delStaff'], ['id'], null, null, false, true, null]],
        705 => [[['_route' => 'delStay', '_controller' => 'App\\Controller\\StayController::delStay'], ['id'], null, null, false, true, null]],
        756 => [[['_route' => 'staysPatient', '_controller' => 'App\\Controller\\PatientController::staysPatient'], ['id', 'lastname', 'firstname'], null, null, false, true, null]],
        806 => [[['_route' => 'newStay', '_controller' => 'App\\Controller\\PatientController::newStay'], ['id', 'lastname', 'firstname'], null, null, false, true, null]],
        851 => [[['_route' => 'addStayPatient', '_controller' => 'App\\Controller\\PatientController::addStayPatient'], ['id', 'lastname', 'firstname'], null, null, false, true, null]],
        929 => [[['_route' => 'applyUpdateStay', '_controller' => 'App\\Controller\\StayController::applyUpdateStay'], ['id', 'lastname', 'firstname', 'serviceId', 'idStay'], null, null, false, true, null]],
        986 => [
            [['_route' => 'failUpdateStay', '_controller' => 'App\\Controller\\StayController::failUpdateStay'], ['id', 'serviceId', 'erreur'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
