<?php 
session_start();

require_once("vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

require_once("functions.php");
require_once("dashboard.php");
require_once("dashboard-wedding.php");
require_once("dashboard-bestfriends.php");
require_once("dashboard-events.php");
require_once("dashboard-stakeholders.php");
require_once("dashboard-rsvp.php");
require_once("dashboard-messages.php");
require_once("dashboard-videos.php");
require_once("dashboard-images.php");
require_once("dashboard-products.php");


require_once("site.php");
require_once("site-cart.php");
require_once("site-checkout.php");
require_once("site-login.php");
require_once("site-pagseguro.php");


require_once("domain.php");
require_once("domain-store.php");
require_once("domain-cart.php");
require_once("domain-checkout.php");
require_once("domain-order.php");


require_once("admin.php");
require_once("admin-users.php");
require_once("admin-categories.php");
require_once("admin-products.php");
require_once("admin-orders.php");


# APP RUN
$app->run();

 ?>