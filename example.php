<?php
/**
 *
 *
 */

require_once 'Services/Prowl.php';
require_once 'config.php';


$prowl = new Services_Prowl($api_key);
$result = $prowl->push('Test message from Services_Prowl at ' . date('Y-m-d H:i:s'));

var_dump($result);
