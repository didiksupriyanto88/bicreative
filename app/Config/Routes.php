<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Page::home');
$routes->get('/web-developer', 'Page::webdev');
$routes->get('/mobile-apps', 'Page::mobileApps');
$routes->get('/video-production', 'Page::video');
