--TEST--
Test setting/getting attributes
--SKIPIF--
<?php require_once(dirname(__FILE__) . '/skipif.inc'); ?>
--FILE--
<?php
require_once(dirname(__FILE__) . '/config.inc');
$db = new PDO($dsn, $username, $password);

var_dump ($db->setAttribute (PDO::CASSANDRA_ATTR_NUM_RETRIES, 10));
var_dump ($db->setAttribute (PDO::CASSANDRA_ATTR_NO_DELAY, true));

echo "OK";
--EXPECTF--
bool(true)
bool(true)
OK