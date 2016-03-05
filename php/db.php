<?php
/**
 * Created by PhpStorm.
 * User: Frank
 * Date: 27.02.2016
 * Time: 22:05
 */

require_once __DIR__."/medoo.php";
$database = new medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'login',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
]);?>
