<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2021-07-17 14:44:20 --> Session: Class initialized using 'files' driver.
INFO - 2021-07-17 14:44:20 --> Session: Class initialized using 'files' driver.
INFO - 2021-07-17 14:44:20 --> Model "Ion_auth_model" initialized
INFO - 2021-07-17 14:44:20 --> Model "Ion_auth_model" initialized
INFO - 2021-07-17 14:44:20 --> Helper loaded: form_helper
INFO - 2021-07-17 14:44:20 --> Form Validation Class Initialized
INFO - 2021-07-17 14:44:20 --> Helper loaded: form_helper
INFO - 2021-07-17 14:44:20 --> Controller Class Initialized
INFO - 2021-07-17 14:44:20 --> Form Validation Class Initialized
INFO - 2021-07-17 14:44:20 --> Controller Class Initialized
INFO - 2021-07-17 14:44:20 --> Model "Transaksi_model" initialized
INFO - 2021-07-17 14:44:20 --> Model "Tahun_ajaran_model" initialized
DEBUG - 2021-07-17 14:44:20 --> Form_validation class already loaded. Second attempt ignored.
INFO - 2021-07-17 14:44:20 --> Model "Transaksi_model" initialized
INFO - 2021-07-17 14:44:20 --> Model "Tahun_ajaran_model" initialized
DEBUG - 2021-07-17 14:44:20 --> Form_validation class already loaded. Second attempt ignored.
ERROR - 2021-07-17 14:44:20 --> Query error: MySQL server has gone away - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `transaksi`
WHERE `id` LIKE '%%' ESCAPE '!'
OR  `jenis_trx` LIKE '%%' ESCAPE '!'
OR  `tanggal_trx` LIKE '%%' ESCAPE '!'
OR  `kode_invoice` LIKE '%%' ESCAPE '!'
OR  `status_trx` LIKE '%%' ESCAPE '!'
OR  `id_santri` LIKE '%%' ESCAPE '!'
ERROR - 2021-07-17 14:44:20 --> Query error: MySQL server has gone away - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `transaksi`
WHERE `id` LIKE '%%' ESCAPE '!'
OR  `jenis_trx` LIKE '%%' ESCAPE '!'
OR  `tanggal_trx` LIKE '%%' ESCAPE '!'
OR  `kode_invoice` LIKE '%%' ESCAPE '!'
OR  `status_trx` LIKE '%%' ESCAPE '!'
OR  `id_santri` LIKE '%%' ESCAPE '!'
INFO - 2021-07-17 14:44:20 --> Language file loaded: language/indonesian/db_lang.php
INFO - 2021-07-17 14:44:20 --> Language file loaded: language/indonesian/db_lang.php
INFO - 2021-07-17 14:44:20 --> Session: Class initialized using 'files' driver.
INFO - 2021-07-17 14:44:20 --> Model "Ion_auth_model" initialized
INFO - 2021-07-17 14:44:20 --> Helper loaded: form_helper
INFO - 2021-07-17 14:44:20 --> Form Validation Class Initialized
INFO - 2021-07-17 14:44:20 --> Controller Class Initialized
INFO - 2021-07-17 14:44:20 --> File loaded: /var/www/html/Projects/azzay/mankeu/application/views/welcome_message.php
ERROR - 2021-07-17 14:44:20 --> Query error: MySQL server has gone away - Invalid query: SELECT `users_groups`.`group_id` as `id`, `groups`.`name`, `groups`.`description`
FROM `users_groups`
JOIN `groups` ON `users_groups`.`group_id`=`groups`.`id`
WHERE `users_groups`.`user_id` = '1'
INFO - 2021-07-17 14:44:20 --> Language file loaded: language/indonesian/db_lang.php
INFO - 2021-07-17 14:44:20 --> Session: Class initialized using 'files' driver.
INFO - 2021-07-17 14:44:20 --> Model "Ion_auth_model" initialized
INFO - 2021-07-17 14:44:20 --> Helper loaded: form_helper
INFO - 2021-07-17 14:44:20 --> Form Validation Class Initialized
INFO - 2021-07-17 14:44:20 --> Controller Class Initialized
INFO - 2021-07-17 14:44:20 --> File loaded: /var/www/html/Projects/azzay/mankeu/application/views/welcome_message.php
ERROR - 2021-07-17 14:44:20 --> Query error: MySQL server has gone away - Invalid query: SELECT `users_groups`.`group_id` as `id`, `groups`.`name`, `groups`.`description`
FROM `users_groups`
JOIN `groups` ON `users_groups`.`group_id`=`groups`.`id`
WHERE `users_groups`.`user_id` = '1'
INFO - 2021-07-17 14:44:20 --> Language file loaded: language/indonesian/db_lang.php
ERROR - 2021-07-17 14:44:20 --> Query error: MySQL server has gone away - Invalid query: SELECT `users_groups`.`group_id` as `id`, `groups`.`name`, `groups`.`description`
FROM `users_groups`
JOIN `groups` ON `users_groups`.`group_id`=`groups`.`id`
WHERE `users_groups`.`user_id` = '1'
ERROR - 2021-07-17 14:44:37 --> Severity: Notice --> Undefined variable: thi /var/www/html/Projects/azzay/mankeu/application/models/Transaksi_model.php 50
ERROR - 2021-07-17 14:44:37 --> Severity: Notice --> Trying to get property 'db' of non-object /var/www/html/Projects/azzay/mankeu/application/models/Transaksi_model.php 50
ERROR - 2021-07-17 14:44:37 --> Severity: error --> Exception: Call to a member function select() on null /var/www/html/Projects/azzay/mankeu/application/models/Transaksi_model.php 50
ERROR - 2021-07-17 14:45:01 --> Query error: Unknown table 'junandia_mankeudev.tranaksi' - Invalid query: SELECT `santri`.`nama_santri`, `tranaksi`.*
FROM `transaksi`
JOIN `santri` ON `santri`.`id` = `tranaksi`.`id_santri`
ORDER BY `id` DESC
 LIMIT 10
ERROR - 2021-07-17 14:49:58 --> Severity: error --> Exception: Too few arguments to function Tahun_ajaran_model::getActiveThAjar(), 0 passed in /var/www/html/Projects/azzay/mankeu/application/controllers/Transaksi.php on line 33 and exactly 1 expected /var/www/html/Projects/azzay/mankeu/application/models/Tahun_ajaran_model.php 77
ERROR - 2021-07-17 14:50:28 --> Severity: error --> Exception: Too few arguments to function Tahun_ajaran_model::getActiveThAjar(), 0 passed in /var/www/html/Projects/azzay/mankeu/application/controllers/Transaksi.php on line 33 and exactly 1 expected /var/www/html/Projects/azzay/mankeu/application/models/Tahun_ajaran_model.php 77
ERROR - 2021-07-17 14:53:42 --> 404 Page Not Found: Assets/bootstrap
ERROR - 2021-07-17 15:58:53 --> 404 Page Not Found: Transaksi/proses
ERROR - 2021-07-17 15:59:23 --> 404 Page Not Found: Transaksi/proses
ERROR - 2021-07-17 12:28:45 --> Severity: Warning --> mysqli::real_connect(): Error while reading greeting packet. PID=9454 /opt/applications/apache2/htdocs/Projects/azzay/mankeu/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2021-07-17 12:28:45 --> Severity: Warning --> mysqli::real_connect(): (HY000/2006): MySQL server has gone away /opt/applications/apache2/htdocs/Projects/azzay/mankeu/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2021-07-17 12:28:45 --> Unable to connect to the database
ERROR - 2021-07-17 12:29:11 --> Severity: Warning --> mysqli::real_connect(): Error while reading greeting packet. PID=9456 /opt/applications/apache2/htdocs/Projects/azzay/mankeu/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2021-07-17 12:29:11 --> Severity: Warning --> mysqli::real_connect(): (HY000/2006): MySQL server has gone away /opt/applications/apache2/htdocs/Projects/azzay/mankeu/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2021-07-17 12:29:11 --> Unable to connect to the database
ERROR - 2021-07-17 12:30:33 --> Severity: Warning --> mysqli::real_connect(): Error while reading greeting packet. PID=9756 /opt/applications/apache2/htdocs/Projects/azzay/mankeu/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2021-07-17 12:30:33 --> Severity: Warning --> mysqli::real_connect(): (HY000/2006): MySQL server has gone away /opt/applications/apache2/htdocs/Projects/azzay/mankeu/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2021-07-17 12:30:33 --> Unable to connect to the database
ERROR - 2021-07-17 12:31:59 --> Severity: Warning --> mysqli::real_connect(): Error while reading greeting packet. PID=9423 /opt/applications/apache2/htdocs/Projects/azzay/mankeu/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2021-07-17 12:31:59 --> Severity: Warning --> mysqli::real_connect(): (HY000/2006): MySQL server has gone away /opt/applications/apache2/htdocs/Projects/azzay/mankeu/system/database/drivers/mysqli/mysqli_driver.php 203
ERROR - 2021-07-17 12:31:59 --> Unable to connect to the database
ERROR - 2021-07-17 12:45:51 --> Query error: The user specified as a definer ('junandia_secapa'@'%') does not exist - Invalid query: CALL TAGIHAN_BULANAN(5,"1")
ERROR - 2021-07-17 12:53:50 --> Query error: The user specified as a definer ('root'@'%') does not exist - Invalid query: CALL TAGIHAN_BULANAN(5,"1")
ERROR - 2021-07-17 12:58:53 --> Severity: Warning --> Undefined property: stdClass::$sub_kategori /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 103
ERROR - 2021-07-17 13:11:01 --> Severity: Warning --> Undefined property: stdClass::$jumlah_bayar /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 100
ERROR - 2021-07-17 13:16:36 --> Severity: Warning --> Undefined property: stdClass::$sisa_angsuran /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 106
ERROR - 2021-07-17 13:16:54 --> Severity: Warning --> Undefined property: stdClass::$sisa_angsuran /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 106
ERROR - 2021-07-17 13:16:55 --> Severity: Warning --> Undefined property: stdClass::$sisa_angsuran /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 106
ERROR - 2021-07-17 13:17:04 --> Severity: Warning --> Undefined property: stdClass::$sisa_angsuran /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 106
ERROR - 2021-07-17 13:17:16 --> Severity: Warning --> Undefined property: stdClass::$sisa_angsuran /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 106
ERROR - 2021-07-17 13:17:26 --> Severity: Warning --> Undefined property: stdClass::$sisa_angsuran /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 106
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Undefined variable $data_tunggakan_sekali /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 108
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 108
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 109
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 109
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 146
ERROR - 2021-07-17 13:27:30 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 146
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Undefined variable $data_tunggakan_sekali /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 108
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 108
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 109
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 109
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 146
ERROR - 2021-07-17 13:27:49 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 146
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 87
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Undefined variable $data_tunggakan_sekali /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 108
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 108
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 109
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 109
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Undefined variable $tranaksi /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 146
ERROR - 2021-07-17 13:28:28 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 146
ERROR - 2021-07-17 13:28:43 --> Severity: Warning --> Undefined variable $data_tunggakan_sekali /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 108
ERROR - 2021-07-17 13:28:43 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 108
ERROR - 2021-07-17 13:29:30 --> Severity: Warning --> Undefined variable $data_tunggakan_sekali /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 108
ERROR - 2021-07-17 13:29:30 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 108
ERROR - 2021-07-17 13:29:31 --> Severity: Warning --> Undefined variable $data_tunggakan_sekali /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 108
ERROR - 2021-07-17 13:29:31 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 108
ERROR - 2021-07-17 13:29:39 --> Severity: Warning --> Undefined variable $data_tunggakan_sekali /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 108
ERROR - 2021-07-17 13:29:39 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/step2.php 108
ERROR - 2021-07-17 13:31:02 --> 404 Page Not Found: Transaksi/proses
ERROR - 2021-07-17 13:31:28 --> 404 Page Not Found: Transaksi/proses
ERROR - 2021-07-17 13:31:36 --> 404 Page Not Found: Transaksi/proses
ERROR - 2021-07-17 13:31:43 --> 404 Page Not Found: Transaksi/proses
ERROR - 2021-07-17 13:31:45 --> 404 Page Not Found: Transaksi/proses
ERROR - 2021-07-17 13:31:53 --> 404 Page Not Found: Transaksi/proses
ERROR - 2021-07-17 13:38:33 --> Severity: Warning --> Array to string conversion /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/Transaksi.php 58
ERROR - 2021-07-17 13:38:35 --> Severity: Warning --> Array to string conversion /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/Transaksi.php 58
ERROR - 2021-07-17 13:38:43 --> Severity: Warning --> Array to string conversion /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/Transaksi.php 58
ERROR - 2021-07-17 13:38:48 --> Severity: Warning --> Array to string conversion /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/Transaksi.php 58
ERROR - 2021-07-17 13:38:52 --> Severity: Warning --> Array to string conversion /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/Transaksi.php 58
