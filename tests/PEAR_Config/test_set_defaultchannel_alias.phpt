--TEST--
PEAR_Config->set(), default_channel, using alias
--SKIPIF--
<?php
if (!getenv('PHP_PEAR_RUNTESTS')) {
    echo 'skip';
}
?>
--FILE--
<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'setup.php.inc';
$config = &new PEAR_Config($temp_path . DIRECTORY_SEPARATOR . 'pear.ini', $temp_path .
    DIRECTORY_SEPARATOR . 'nofile');
$config->set('default_channel', 'pecl');
$phpunit->assertEquals('pecl.php.net', $config->get('default_channel'), 'test');
echo 'tests done';
?>
--EXPECT--
tests done