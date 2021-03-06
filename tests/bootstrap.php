<?php

include_once dirname(__FILE__) . "/../vendor/autoload.php";
include_once dirname(__FILE__) . "/Car.php";
include_once dirname(__FILE__) . "/NoModel.php";
include_once dirname(__FILE__) . "/Person.php";

define('CONNECTION', 'mongodb://localhost:27017');
define('DB', 'mongo_driver_test');
define('TEST_COLLECTION', 'test_collection');
define('CARS_COLLECTION', 'cars');
define('PEOPLE_COLLECTION', 'people');