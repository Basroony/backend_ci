<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* $hook['post_controller_constructor'][] = array(
    'class' => 'appHook',
    'function' => 'getmodules',
    'filename' => 'appHook.php',
    'filepath' => 'hooks'
);
 */
/* $hook['post_controller_constructor'][] = array(
    'class' => 'appHook',
    'function' => 'getConfig',
    'filename' => 'appHook.php',
    'filepath' => 'hooks'
);
 */
$hook['post_controller_constructor'][] = array(
    'class' => 'appHook',
    'function' => 'authority',
    'filename' => 'appHook.php',
    'filepath' => 'hooks'
);
$hook['post_system'][] = array(
    'class' => 'appHook',
    'function' => 'logQueries',
    'filename' => 'appHook.php',
    'filepath' => 'hooks'
);

?>