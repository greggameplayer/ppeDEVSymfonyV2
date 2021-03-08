<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/admin/(?'
                    .'|modifier(?'
                        .'|S(?'
                            .'|erviceHotpial/([^/]++)(*:54)'
                            .'|taffMember/([^/]++)(*:80)'
                        .')'
                        .'|Chambre/([^/]++)/([^/]++)/([^/]++)(*:122)'
                    .')'
                    .'|supprimer(?'
                        .'|Service/([^/]++)(*:159)'
                        .'|Chambre/([^/]++)/([^/]++)/([^/]++)(*:201)'
                    .')'
                    .'|gestionService/([^/]++)/([^/]++)(*:242)'
                    .'|ajouter(?'
                        .'|Lit/([^/]++)/([^/]++)/([^/]++)(*:290)'
                        .'|Chambre/([^/]++)/([^/]++)(*:323)'
                    .')'
                    .'|retirerLit/([^/]++)/([^/]++)/([^/]++)(*:369)'
                .')'
                .'|/user/(?'
                    .'|modifier(?'
                        .'|Patient/([^/]++)(*:414)'
                        .'|Séjour/([^/]++)/([^/]++)(*:447)'
                    .')'
                    .'|s(?'
                        .'|upprimer(?'
                            .'|Patient/([^/]++)(*:487)'
                            .'|S(?'
                                .'|taffMember/([^/]++)(*:518)'
                                .'|éjour/([^/]++)(*:541)'
                            .')'
                        .')'
                        .'|éjoursPatient/([^/]++)/([^/]++)/([^/]++)(*:592)'
                    .')'
                    .'|nouveauSéjour/([^/]++)/([^/]++)/([^/]++)(*:642)'
                    .'|a(?'
                        .'|ddStay/([^/]++)/([^/]++)/([^/]++)(*:687)'
                        .'|pplicationModifierSéjour/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:765)'
                    .')'
                    .'|erreurModifierSéjour/([^/]++)/([^/]++)/([^/]++)(*:822)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        54 => [[['_route' => 'updateService', '_controller' => 'App\\Controller\\HospitalController::updateService'], ['id'], null, null, false, true, null]],
        80 => [[['_route' => 'updateStaff', '_controller' => 'App\\Controller\\StaffController::updateStaff'], ['id'], null, null, false, true, null]],
        122 => [[['_route' => 'updateRoom', '_controller' => 'App\\Controller\\HospitalController::updateRoom'], ['id', 'name', 'room'], null, null, false, true, null]],
        159 => [[['_route' => 'delService', '_controller' => 'App\\Controller\\HospitalController::delService'], ['id'], null, null, false, true, null]],
        201 => [[['_route' => 'delRoom', '_controller' => 'App\\Controller\\HospitalController::delRoom'], ['id', 'name', 'room'], null, null, false, true, null]],
        242 => [[['_route' => 'manageService', '_controller' => 'App\\Controller\\HospitalController::manageService'], ['id', 'name'], null, null, false, true, null]],
        290 => [[['_route' => 'addBed', '_controller' => 'App\\Controller\\HospitalController::addBed'], ['id', 'name', 'room'], null, null, false, true, null]],
        323 => [[['_route' => 'addRoom', '_controller' => 'App\\Controller\\HospitalController::addRoom'], ['id', 'name'], null, null, false, true, null]],
        369 => [[['_route' => 'removeBed', '_controller' => 'App\\Controller\\HospitalController::removeBed'], ['id', 'name', 'room'], null, null, false, true, null]],
        414 => [[['_route' => 'updatePatient', '_controller' => 'App\\Controller\\PatientController::updatePatient'], ['id'], null, null, false, true, null]],
        447 => [[['_route' => 'updateStay', '_controller' => 'App\\Controller\\StayController::updateStay'], ['id', 'serviceId'], null, null, false, true, null]],
        487 => [[['_route' => 'delPatient', '_controller' => 'App\\Controller\\PatientController::delPatient'], ['id'], null, null, false, true, null]],
        518 => [[['_route' => 'delStaff', '_controller' => 'App\\Controller\\StaffController::delStaff'], ['id'], null, null, false, true, null]],
        541 => [[['_route' => 'delStay', '_controller' => 'App\\Controller\\StayController::delStay'], ['id'], null, null, false, true, null]],
        592 => [[['_route' => 'staysPatient', '_controller' => 'App\\Controller\\PatientController::staysPatient'], ['id', 'lastname', 'firstname'], null, null, false, true, null]],
        642 => [[['_route' => 'newStay', '_controller' => 'App\\Controller\\PatientController::newStay'], ['id', 'lastname', 'firstname'], null, null, false, true, null]],
        687 => [[['_route' => 'addStayPatient', '_controller' => 'App\\Controller\\PatientController::addStayPatient'], ['id', 'lastname', 'firstname'], null, null, false, true, null]],
        765 => [[['_route' => 'applyUpdateStay', '_controller' => 'App\\Controller\\StayController::applyUpdateStay'], ['id', 'lastname', 'firstname', 'serviceId', 'idStay'], null, null, false, true, null]],
        822 => [
            [['_route' => 'failUpdateStay', '_controller' => 'App\\Controller\\StayController::failUpdateStay'], ['id', 'serviceId', 'erreur'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
