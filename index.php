<?php
// Define routes and their corresponding handlers
$routes = [
    '/' => 'home.php',
    '/about' => 'about.php',
    '/contact' => 'contact.php',
    '/jobs' => 'jobs.php',
    '/crewing-services' => 'crewing-services.php',
    '/information' => 'information.php',
    '/credits' => 'credits.php',

];

// Get the current path from the URL
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Check if the path matches a route
if (array_key_exists($path, $routes)) {
    include $routes[$path];
} else {
    // Show 404 page if route is not found
    http_response_code(404);
    echo "404 - Page Not Found";
}
?>