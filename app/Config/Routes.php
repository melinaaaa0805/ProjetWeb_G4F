<?php

namespace Config;


// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('c_accueil');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'c_accueil::index');
/*
 * --------------------------------------------------------------------
 * Espace Nintendo
 * --------------------------------------------------------------------
 */
$routes->get('espaceNintendo/', 'c_accueil::espaceNintendo');
$routes->get('espaceNintendo/SuperSmach', 'c_jeux::superSmach');
$routes->get('espaceNintendo/MarioStrikersBattleLeague', 'c_jeux::mario');
$routes->get('espaceNintendo/NintendoSwitchSports', 'c_jeux::switchSports');
$routes->get('espaceNintendo/JustDance', 'c_jeux::justDance');
$routes->get('espaceNintendo/StreetFighter', 'c_jeux::streetFighter');

/*
 * --------------------------------------------------------------------
 * Espace NextGen
 * Playstation
 * --------------------------------------------------------------------
 */

$routes->get('espaceNextGen/', 'c_accueil::espaceNextGen');
$routes->get('espaceNextGen/CallOfDuty', 'c_jeux::callOf');
$routes->get('espaceNextGen/LeagueOfLegend', 'c_jeux::leagueOflegend');
$routes->get('espaceNextGen/GranTurismo7', 'c_jeux::granTurismo');
$routes->get('espaceNextGen/F122', 'c_jeux::f122');
$routes->get('espaceNextGen/Arkanoid', 'c_jeux::arkanoid');

/*
 * --------------------------------------------------------------------
 * Espace NextGen
 * Xbox
 * --------------------------------------------------------------------
 */
$routes->get('espaceNextGen/RocketLeague', 'c_jeux::rocketLeague');
$routes->get('espaceNextGen/Fifa22', 'c_jeux::fifa');
$routes->get('espaceNextGen/NBA2K23', 'c_jeux::nba');
$routes->get('espaceNextGen/Overwatch', 'c_jeux::overwatch');
$routes->get('espaceNextGen/HaloInfinite', 'c_jeux::haloInfinite');


$routes->match(['get', 'post'], 'login/', 'c_connexion::index');
$routes->match(['get', 'post'], 'espace/', 'c_connexion::info');
$routes->match(['get', 'post'], 'inscription/', 'c_connexion::ajoutUser');
$routes->match(['get', 'post'], 'connexion/', 'c_connexion::index');
$routes->get('/deconnexion', 'c_connexion::deconnexion');
$routes->match(['get', 'post'], 'ajoutUtilisateur/', 'c_connexion::ajoutUser');
$routes->match(['get', 'post'], '/', 'c_accueil::index');
$routes->match(['get', 'post'], 'modification/', 'c_connexion::modifInfo');
$routes->match(['get', 'post'], 'modificationInfo/', 'c_user::modificationInfo');
$routes->match(['get', 'post'], 'suppression/', 'c_user::suppression');
$routes->match(['get', 'post'], 'monvote/', 'c_user::votePage');
$routes->match(['get', 'post'], 'mesvotes/playstation', 'c_user::mesvotesPlaystation');
$routes->match(['get', 'post'], 'mesvotes/switch', 'c_user::mesvotesSwitch');
$routes->match(['get', 'post'], 'mesvotes/xbox', 'c_user::mesvotesXbox');
$routes->match(['get', 'post'], 'monvote/voter', 'c_user::ajoutVote');








/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
