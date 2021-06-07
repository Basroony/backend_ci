<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2021-05-24 16:41:56 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:41:56 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:41:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:41:56 --> Config file loaded: C:\xampp\htdocs\instagram_clone\application\config/app.php
ERROR - 2021-05-24 16:41:56 --> Severity: Warning --> mysqli::real_connect(): (HY000/1049): Unknown database 'pro_retail' C:\xampp\htdocs\instagram_clone\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2021-05-24 16:41:56 --> Unable to connect to the database
DEBUG - 2021-05-24 16:42:32 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:42:32 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:42:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:42:32 --> Config file loaded: C:\xampp\htdocs\instagram_clone\application\config/app.php
ERROR - 2021-05-24 16:42:32 --> Query error: Table 'insta_clone.tk_tb_error_m' doesn't exist - Invalid query: SELECT `data`
FROM `tk_tb_sessions`
WHERE `id` = '9jf0j6vb2lg1f03sdg62t23die9401b3'
ERROR - 2021-05-24 16:42:32 --> Severity: Warning --> session_write_close(): Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2021-05-24 16:42:32 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: C:\xampp\tmp) Unknown 0
DEBUG - 2021-05-24 16:44:51 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:44:51 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:44:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:44:51 --> Config file loaded: C:\xampp\htdocs\instagram_clone\application\config/app.php
ERROR - 2021-05-24 16:44:51 --> Query error: Table 'insta_clone.tk_tb_sessions' doesn't exist - Invalid query: SELECT `data`
FROM `tk_tb_sessions`
WHERE `id` = '9jf0j6vb2lg1f03sdg62t23die9401b3'
ERROR - 2021-05-24 16:44:51 --> Severity: Warning --> session_write_close(): Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2021-05-24 16:44:51 --> Severity: Warning --> session_write_close(): Failed to write session data using user defined save handler. (session.save_path: C:\xampp\tmp) Unknown 0
DEBUG - 2021-05-24 16:45:31 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:45:31 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:45:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:45:31 --> Config file loaded: C:\xampp\htdocs\instagram_clone\application\config/app.php
DEBUG - 2021-05-24 16:45:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
ERROR - 2021-05-24 16:45:31 --> Unable to load the requested class: App
DEBUG - 2021-05-24 16:47:38 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:47:38 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:47:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-05-24 16:47:38 --> Systems MX_Controller Initialized
DEBUG - 2021-05-24 16:47:38 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/models/Systems_model.php
ERROR - 2021-05-24 16:47:38 --> Query error: Table 'insta_clone.tk_tb_toko_m' doesn't exist - Invalid query: SELECT a.ID_TOKO_M AS ID, CONCAT(a.NAMA_TOKO_M, ' - ', b.NAMA_KOTA) AS TOKO, a.NAMA_TOKO_M, a.ID_PROVINSI, a.ID_KOTA
FROM `tk_tb_toko_m` `a`
INNER JOIN `tk_tb_kota` `b` ON `b`.`ID_KOTA` = `a`.`ID_KOTA`
INNER JOIN `tk_tb_provinsi` `c` ON `c`.`ID_PROVINSI` = `a`.`ID_PROVINSI`
WHERE `a`.`STATUS_TOKO_M` = '1'
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:01 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-05-24 16:49:01 --> Systems MX_Controller Initialized
DEBUG - 2021-05-24 16:49:01 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/models/Systems_model.php
ERROR - 2021-05-24 16:49:01 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\instagram_clone\application\modules\systems\controllers\Systems.php 40
DEBUG - 2021-05-24 16:49:01 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/views/html.php
ERROR - 2021-05-24 16:49:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\instagram_clone\system\libraries\Parser.php 144
DEBUG - 2021-05-24 16:49:01 --> Total execution time: 0.0818
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:01 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:08 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:08 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:49:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-05-24 16:49:08 --> Systems MX_Controller Initialized
DEBUG - 2021-05-24 16:49:08 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/models/Systems_model.php
ERROR - 2021-05-24 16:49:08 --> Severity: error --> Exception: Too few arguments to function CI_Parser::parse(), 1 passed in C:\xampp\htdocs\instagram_clone\application\modules\systems\controllers\Systems.php on line 40 and at least 2 expected C:\xampp\htdocs\instagram_clone\system\libraries\Parser.php 98
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:20 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-05-24 16:49:20 --> Systems MX_Controller Initialized
DEBUG - 2021-05-24 16:49:20 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/models/Systems_model.php
DEBUG - 2021-05-24 16:49:20 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/views/html.php
DEBUG - 2021-05-24 16:49:20 --> Total execution time: 0.0553
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:20 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:20 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:20 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-05-24 16:49:47 --> Systems MX_Controller Initialized
DEBUG - 2021-05-24 16:49:47 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/models/Systems_model.php
DEBUG - 2021-05-24 16:49:47 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/views/index.php
DEBUG - 2021-05-24 16:49:47 --> Total execution time: 0.0714
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:49:47 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:49:47 --> Global POST, GET and COOKIE data sanitized
ERROR - 2021-05-24 16:49:47 --> 404 Page Not Found: /index
DEBUG - 2021-05-24 16:51:21 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:51:21 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:51:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:51:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-05-24 16:51:21 --> Systems MX_Controller Initialized
DEBUG - 2021-05-24 16:51:21 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/models/Systems_model.php
DEBUG - 2021-05-24 16:51:21 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/views/index.php
DEBUG - 2021-05-24 16:51:21 --> Total execution time: 0.0798
DEBUG - 2021-05-24 16:51:39 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:51:39 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:51:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:51:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-05-24 16:51:39 --> Systems MX_Controller Initialized
DEBUG - 2021-05-24 16:51:39 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/models/Systems_model.php
DEBUG - 2021-05-24 16:51:39 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/views/index.php
DEBUG - 2021-05-24 16:51:39 --> Total execution time: 0.0558
DEBUG - 2021-05-24 16:57:39 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:57:39 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:57:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:57:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-05-24 16:57:39 --> Systems MX_Controller Initialized
DEBUG - 2021-05-24 16:57:39 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/models/Systems_model.php
DEBUG - 2021-05-24 16:57:39 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/views/index.php
DEBUG - 2021-05-24 16:57:39 --> Total execution time: 0.0534
DEBUG - 2021-05-24 16:57:59 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:57:59 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:57:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:57:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-05-24 16:57:59 --> Systems MX_Controller Initialized
DEBUG - 2021-05-24 16:57:59 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/models/Systems_model.php
DEBUG - 2021-05-24 16:57:59 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/views/index.php
DEBUG - 2021-05-24 16:57:59 --> Total execution time: 0.0484
DEBUG - 2021-05-24 16:58:57 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:58:57 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:58:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-05-24 16:58:57 --> Systems MX_Controller Initialized
DEBUG - 2021-05-24 16:58:57 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/models/Systems_model.php
DEBUG - 2021-05-24 16:58:57 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/views/index.php
DEBUG - 2021-05-24 16:58:57 --> Total execution time: 0.0640
DEBUG - 2021-05-24 16:59:06 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:59:06 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:59:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:59:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-05-24 16:59:06 --> Systems MX_Controller Initialized
DEBUG - 2021-05-24 16:59:06 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/models/Systems_model.php
DEBUG - 2021-05-24 16:59:06 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/views/index.php
DEBUG - 2021-05-24 16:59:06 --> Total execution time: 0.0509
DEBUG - 2021-05-24 16:59:16 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:59:16 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-05-24 16:59:16 --> Systems MX_Controller Initialized
DEBUG - 2021-05-24 16:59:16 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/models/Systems_model.php
DEBUG - 2021-05-24 16:59:16 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/views/index.php
DEBUG - 2021-05-24 16:59:16 --> Total execution time: 0.0460
DEBUG - 2021-05-24 16:59:35 --> UTF-8 Support Enabled
DEBUG - 2021-05-24 16:59:35 --> No URI present. Default controller set.
DEBUG - 2021-05-24 16:59:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-05-24 16:59:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-05-24 16:59:35 --> Systems MX_Controller Initialized
DEBUG - 2021-05-24 16:59:35 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/models/Systems_model.php
DEBUG - 2021-05-24 16:59:35 --> File loaded: C:\xampp\htdocs\instagram_clone\application\modules/Systems/views/index.php
DEBUG - 2021-05-24 16:59:35 --> Total execution time: 0.0608
