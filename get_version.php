<?php

define('ABSPATH', '');

function plugins_url() {}
function plugin_basename() {}
function add_action() {}
function add_filter() {}

include_once('source/facetwp/index.php');

echo FACETWP_VERSION;