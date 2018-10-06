<?php

#=====================CONSTANTS==============================

define("HOST", "localhost");
define("USER","root");
define("PASS", "");
define("DB", "testing");

#============================================================

$db = @mysqli_connect(HOST, USER, PASS, DB) or die('No database connection');
mysqli_set_charset($db, 'utf8') or die('Connection encoding is not installed');

