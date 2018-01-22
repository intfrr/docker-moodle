<?php // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '172.18.0.3';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'moodle';
$CFG->dbpass    = 'moodle';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array(
	'dbpersist'   => 0,
	'dbport'      => 3306,
	'dbsocket'    => '',
	'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot  = 'http://localhost:8181/moodle2';
$CFG->dataroot = '/application/moodledata';
$CFG->admin    = 'admin';

$CFG->directorypermissions = 0777;

$CFG->dbsessions            = 1;
$CFG->session_handler_class = '\core\session\memcached';
//$CFG->session_memcached_save_path = 'test.fgmvhw.0001.usw1.cache.amazonaws.com:11211';
$CFG->session_memcached_save_path            = '172.18.0.4:11211';
$CFG->session_memcached_prefix               = 'memc.sess.key.';
$CFG->session_memcached_acquire_lock_timeout = 10;
$CFG->session_memcached_lock_expire          = 7200;

require_once (__DIR__ .'/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
