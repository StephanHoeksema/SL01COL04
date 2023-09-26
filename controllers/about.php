<?php
/**
 * Routing
 * Waar in de applicatie ben je?
 *
 * Voor het gebruik gaan we er gebruik van maken van de volgende opbouw
 * - index(home)
 * - contact
 * - details
 *      - profiel
 *      - cijfers
 *      - ervaringen
 *      - hobby
 * - about
 */

$app = require 'private.php';
$database = $app['database'];

require 'views/about.view.php';

/**
 * PDO - connect to database
 *
 */