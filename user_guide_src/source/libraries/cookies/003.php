<?php

use CodeIgniter\Cookie\Cookie;
use Config\Cookie as CookieConfig;

$oldDefaults = Cookie::setDefaults(config(CookieConfig::class));
$cookie      = new Cookie('my_token', 'muffins');

// return the old defaults
Cookie::setDefaults($oldDefaults);
