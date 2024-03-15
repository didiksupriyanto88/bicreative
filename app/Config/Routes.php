<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home::index');
$routes->get('/layanan', 'Layanan::index');
$routes->get('/design-graphics', 'DesignGraphic::index');
$routes->get('/social-media-management', 'SocialMediaManagement::index');
$routes->get('/web-development', 'WebDevelopment::index');
$routes->get('/mobile-apps', 'MobileApps::index');
$routes->get('/video-production', 'VideoProduction::index');
