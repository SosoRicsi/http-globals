<?php

use BasicPHP\Superglobals\Session;

if (!function_exists("session")) {
	function session(string $key, $default = '') {
		return Session::get($key, $default);
	} 
}

if (!function_exists("flashed")) {
	function flashed(string $key, $default = '') {
		return Session::flashed($key, $default);
	}
}