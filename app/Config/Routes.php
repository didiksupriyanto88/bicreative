<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Page::home');
$routes->get('/home', 'Page::home');
$routes->get('/design-graphics', 'Page::designGraphics');
$routes->get('/social-media-marketing', 'Page::socialMediaMarketing');
$routes->get('/web-developer', 'Page::webdev');
$routes->get('/mobile-apps', 'Page::mobileApps');
$routes->get('/video-production', 'Page::video');
