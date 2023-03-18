<?php

use InfinyHost\InfinyMini\App;

// Paths to the different components of the app
const FCPATH = __DIR__ . DIRECTORY_SEPARATOR; // Front controller
const ROOTPATH = FCPATH . ".." . DIRECTORY_SEPARATOR; // Root path
const CFGPATH = ROOTPATH . "config" . DIRECTORY_SEPARATOR; // Config path
const APPPATH = ROOTPATH . "app" . DIRECTORY_SEPARATOR; // Config path
const ROUTESPATH = ROOTPATH . "routes" . DIRECTORY_SEPARATOR; // Routes path
const VIEWSPATH = ROOTPATH . "views" . DIRECTORY_SEPARATOR; // Views path

// Ensure the current directory is pointing to the root directory
chdir(ROOTPATH);

require_once("vendor/autoload.php");

// Error reporting. Disable for production.
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Boot and run the app
$app = App::getInstance();
$app->run();