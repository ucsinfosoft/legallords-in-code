<?php

namespace Config;

$routes = Services::routes();
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

$routes->get('/', 'Home::index');
$routes->get('about', 'Page::about');
$routes->get('practice-areas', 'Page::practiceAreas');
$routes->get('practice-areas/(:segment)', 'Page::practiceArea/$1');
$routes->get('lead-counsel', 'LeadCounsel::index');
$routes->get('contact', 'Page::contact');
$routes->get('disclaimer', 'Page::disclaimer');
$routes->get('privacy-policy', 'Page::privacy');
$routes->get('terms-of-use', 'Page::terms');
$routes->get('careers', 'Page::careers');
$routes->get('notable-matters', 'NotableMatters::index');
$routes->get('notable-matters/(:num)', 'NotableMatters::view/$1');

// Admin Routes
$routes->group('admin', function($routes) {
    $routes->get('login', 'Admin\Auth::login');
    $routes->post('login', 'Admin\Auth::attemptLogin');
    $routes->get('logout', 'Admin\Auth::logout');

        // Protected Routes
        $routes->group('', ['filter' => 'adminauth'], function($routes) {
        $routes->get('/', 'Admin\Dashboard::index');
        
        // Notable Matters CRUD
        $routes->get('notable-matters', 'Admin\NotableMatters::index');
        $routes->get('notable-matters/create', 'Admin\NotableMatters::create');
        $routes->post('notable-matters/store', 'Admin\NotableMatters::store');
        $routes->get('notable-matters/edit/(:num)', 'Admin\NotableMatters::edit/$1');
        $routes->post('notable-matters/update/(:num)', 'Admin\NotableMatters::update/$1');
        $routes->get('notable-matters/delete/(:num)', 'Admin\NotableMatters::delete/$1');
        
        // Practice Areas CRUD
        $routes->get('practice-areas', 'Admin\PracticeAreas::index');
        $routes->get('practice-areas/create', 'Admin\PracticeAreas::create');
        $routes->post('practice-areas/store', 'Admin\PracticeAreas::store');
        $routes->get('practice-areas/edit/(:num)', 'Admin\PracticeAreas::edit/$1');
        $routes->post('practice-areas/update/(:num)', 'Admin\PracticeAreas::update/$1');
        $routes->get('practice-areas/delete/(:num)', 'Admin\PracticeAreas::delete/$1');

        // Careers CRUD
        $routes->get('careers', 'Admin\Careers::index');
        $routes->get('careers/create', 'Admin\Careers::create');
        $routes->post('careers/store', 'Admin\Careers::store');
        $routes->get('careers/edit/(:num)', 'Admin\Careers::edit/$1');
        $routes->post('careers/update/(:num)', 'Admin\Careers::update/$1');
        $routes->get('careers/delete/(:num)', 'Admin\Careers::delete/$1');
        
        $routes->get('settings', 'Admin\Settings::index');
        $routes->post('settings/update', 'Admin\Settings::update');
        
        // Lead Counsel
        $routes->get('lead-counsel', 'Admin\LeadCounsel::index');
        $routes->post('lead-counsel/update', 'Admin\LeadCounsel::update');

        // Static Pages
        $routes->get('pages', 'Admin\Pages::index');
        $routes->get('pages/edit/(:segment)', 'Admin\Pages::edit/$1');
        $routes->post('pages/update/(:segment)', 'Admin\Pages::update/$1');
    });
});