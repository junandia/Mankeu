ERROR - 2021-07-26 14:48:12 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:48:51 --> 404 Page Not Found: Group/index
ERROR - 2021-07-26 14:56:21 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:56:31 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:56:31 --> 404 Page Not Found: Assets/bootstrap
ERROR - 2021-07-26 14:56:33 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:56:35 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:56:37 --> 404 Page Not Found: Angkatan/index
ERROR - 2021-07-26 14:57:17 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:57:20 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:57:37 --> Query error: Table 'mankeu_dev.master_unit' doesn't exist - Invalid query: SELECT `santri`.*, `master_unit`.`nama_unit`, `tahun_angkatan`.`tahun_angkatan`
FROM `santri`
JOIN `master_unit` ON `master_unit`.`id` = `santri`.`id_unit`
JOIN `tahun_angkatan` ON `tahun_angkatan`.`id` = `santri`.`id_angkatan`
ERROR - 2021-07-26 14:57:37 --> Severity: error --> Exception: Call to a member function result() on bool /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/models/Santri_model.php 54
ERROR - 2021-07-26 14:58:33 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:58:36 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:58:38 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:58:44 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:58:45 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:58:47 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:58:50 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:58:54 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:58:55 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:58:59 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:59:03 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:59:04 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 14:59:05 --> Query error: Table 'mankeu_dev.master_unit' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `sub_kategori`
JOIN `kategori_pembayaran` ON `kategori_pembayaran`.`id` = `sub_kategori`.`id_kategori`
JOIN `master_unit` ON `master_unit`.`id` = `sub_kategori`.`id_unit`
JOIN `tahun_angkatan` ON `tahun_angkatan`.`id` = `sub_kategori`.`id_tahun_angkatan`
JOIN `tahun_ajaran` ON `tahun_ajaran`.`id` = `sub_kategori`.`id_tahun_ajaran`
ERROR - 2021-07-26 14:59:05 --> Severity: error --> Exception: Call to a member function num_rows() on bool /opt/applications/apache2/htdocs/Projects/azzay/mankeu/system/database/DB_query_builder.php 1429
ERROR - 2021-07-26 15:00:13 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:00:24 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:00:27 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:00:30 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:00:32 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:00:34 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:00:51 --> Severity: error --> Exception: Call to undefined method Tahun_ajaran_model::getActiveThAjar() /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 65
ERROR - 2021-07-26 15:01:07 --> Severity: error --> Exception: Call to undefined method Tahun_ajaran_model::getActiveThAjar() /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 65
ERROR - 2021-07-26 15:01:09 --> Severity: error --> Exception: Call to undefined method Tahun_ajaran_model::getActiveThAjar() /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 65
ERROR - 2021-07-26 15:01:10 --> Severity: error --> Exception: Call to undefined method Tahun_ajaran_model::getActiveThAjar() /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 65
ERROR - 2021-07-26 15:02:04 --> Severity: error --> Exception: Call to undefined method Tahun_ajaran_model::getActiveThAjar() /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 65
ERROR - 2021-07-26 15:02:13 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:02:30 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:02:35 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:03:02 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:03:04 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:03:23 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:03:24 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:03:34 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:03:51 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:05:20 --> Severity: Warning --> Undefined variable $id_santri /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/outvoice.php 225
ERROR - 2021-07-26 15:05:20 --> Severity: Warning --> Undefined variable $tahun_angkatan /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/outvoice.php 226
ERROR - 2021-07-26 15:05:25 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:08:08 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:10:58 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:11:00 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:12:39 --> Severity: Warning --> Undefined variable $disabled /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 27
ERROR - 2021-07-26 15:12:39 --> Query error: Table 'mankeu_dev.master_unit' doesn't exist - Invalid query: SELECT `santri`.*, `master_unit`.`nama_unit`, `tahun_angkatan`.`tahun_angkatan`
FROM `santri`
JOIN `master_unit` ON `master_unit`.`id` = `santri`.`id_unit`
JOIN `tahun_angkatan` ON `tahun_angkatan`.`id` = `santri`.`id_angkatan`
ERROR - 2021-07-26 15:12:39 --> Severity: error --> Exception: Call to a member function result() on bool /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 35
ERROR - 2021-07-26 15:13:04 --> Query error: Table 'mankeu_dev.master_unit' doesn't exist - Invalid query: SELECT `santri`.*, `master_unit`.`nama_unit`, `tahun_angkatan`.`tahun_angkatan`
FROM `santri`
JOIN `master_unit` ON `master_unit`.`id` = `santri`.`id_unit`
JOIN `tahun_angkatan` ON `tahun_angkatan`.`id` = `santri`.`id_angkatan`
ERROR - 2021-07-26 15:13:04 --> Severity: error --> Exception: Call to a member function result() on bool /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 35
ERROR - 2021-07-26 15:14:06 --> Query error: Unknown column 'master_unit.nama_unit' in 'field list' - Invalid query: SELECT `santri`.*, `master_unit`.`nama_unit`, `tahun_angkatan`.`tahun_angkatan`
FROM `santri`
JOIN `tahun_angkatan` ON `tahun_angkatan`.`id` = `santri`.`id_angkatan`
ERROR - 2021-07-26 15:14:06 --> Severity: error --> Exception: Call to a member function result() on bool /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 34
ERROR - 2021-07-26 15:14:11 --> Query error: Unknown column 'master_unit.nama_unit' in 'field list' - Invalid query: SELECT `santri`.*, `master_unit`.`nama_unit`, `tahun_angkatan`.`tahun_angkatan`
FROM `santri`
JOIN `tahun_angkatan` ON `tahun_angkatan`.`id` = `santri`.`id_angkatan`
ERROR - 2021-07-26 15:14:11 --> Severity: error --> Exception: Call to a member function result() on bool /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 32
ERROR - 2021-07-26 15:14:19 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:14:47 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:17:29 --> Severity: error --> Exception: syntax error, unexpected token "return" /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/models/Unit_model.php 49
ERROR - 2021-07-26 15:17:36 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::whereNotIn() /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/models/Unit_model.php 48
ERROR - 2021-07-26 15:18:02 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:18:04 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:18:50 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:19:09 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:19:24 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:19:38 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:20:01 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:20:34 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:20:35 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:21:22 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:21:27 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:21:31 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:21:38 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:22:27 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:22:30 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:22:36 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:26:33 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:26:49 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:27:14 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:27:20 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:27:23 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:27:29 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:27:31 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:27:34 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:28:40 --> Severity: error --> Exception: Using $this when not in object context /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 28
ERROR - 2021-07-26 15:28:57 --> Severity: Warning --> Undefined variable $user /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 28
ERROR - 2021-07-26 15:28:57 --> Severity: Warning --> Attempt to read property "id" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 28
ERROR - 2021-07-26 15:28:57 --> Severity: Warning --> Array to string conversion /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/index.php 33
ERROR - 2021-07-26 15:28:57 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:30:40 --> Severity: Warning --> Array to string conversion /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/views/transaksi/index.php 33
ERROR - 2021-07-26 15:30:40 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:31:33 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:31:45 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:32:06 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:33:03 --> Severity: error --> Exception: syntax error, unexpected variable "$data" /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 38
ERROR - 2021-07-26 15:33:20 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:33:35 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:33:53 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:34:34 --> Severity: error --> Exception: Too few arguments to function Transaksi::in(), 0 passed in /opt/applications/apache2/htdocs/Projects/azzay/mankeu/system/core/CodeIgniter.php on line 532 and exactly 2 expected /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 15
ERROR - 2021-07-26 15:34:45 --> Severity: error --> Exception: Too few arguments to function Transaksi::in(), 0 passed in /opt/applications/apache2/htdocs/Projects/azzay/mankeu/system/core/CodeIgniter.php on line 532 and exactly 2 expected /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 15
ERROR - 2021-07-26 15:34:56 --> Severity: Warning --> Undefined variable $ci /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 24
ERROR - 2021-07-26 15:34:56 --> Severity: Warning --> Attempt to read property "ion_auth" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 24
ERROR - 2021-07-26 15:34:56 --> Severity: error --> Exception: Call to a member function get_users_groups() on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 24
ERROR - 2021-07-26 15:35:02 --> Severity: Warning --> Undefined variable $ci /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 24
ERROR - 2021-07-26 15:35:02 --> Severity: Warning --> Attempt to read property "ion_auth" on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 24
ERROR - 2021-07-26 15:35:02 --> Severity: error --> Exception: Call to a member function user() on null /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 24
ERROR - 2021-07-26 15:35:44 --> Severity: Warning --> Attempt to read property "id" on array /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 24
ERROR - 2021-07-26 15:36:38 --> Severity: error --> Exception: syntax error, unexpected token "foreach", expecting ")" /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 26
ERROR - 2021-07-26 15:37:36 --> Severity: error --> Exception: syntax error, unexpected token "foreach", expecting ")" /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 26
ERROR - 2021-07-26 15:37:36 --> Severity: error --> Exception: syntax error, unexpected token "foreach", expecting ")" /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 26
ERROR - 2021-07-26 15:39:11 --> Severity: error --> Exception: Too few arguments to function Transaksi::in(), 0 passed in /opt/applications/apache2/htdocs/Projects/azzay/mankeu/system/core/CodeIgniter.php on line 532 and exactly 2 expected /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 15
ERROR - 2021-07-26 15:39:14 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:39:20 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:40:11 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:40:20 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:40:26 --> Severity: error --> Exception: Too few arguments to function Transaksi::in(), 0 passed in /opt/applications/apache2/htdocs/Projects/azzay/mankeu/system/core/CodeIgniter.php on line 532 and exactly 2 expected /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 15
ERROR - 2021-07-26 15:41:20 --> Severity: error --> Exception: Too few arguments to function Transaksi::in(), 0 passed in /opt/applications/apache2/htdocs/Projects/azzay/mankeu/system/core/CodeIgniter.php on line 532 and exactly 2 expected /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 15
ERROR - 2021-07-26 15:41:21 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:42:12 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:42:16 --> Severity: error --> Exception: Too few arguments to function Transaksi::in(), 0 passed in /opt/applications/apache2/htdocs/Projects/azzay/mankeu/system/core/CodeIgniter.php on line 532 and exactly 2 expected /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 15
ERROR - 2021-07-26 15:42:28 --> Severity: error --> Exception: json_decode(): Argument #1 ($json) must be of type string, array given /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/controllers/v2/Transaksi.php 30
ERROR - 2021-07-26 15:42:49 --> Severity: error --> Exception: syntax error, unexpected identifier "json_encode", expecting ":" /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 37
ERROR - 2021-07-26 15:42:50 --> Severity: error --> Exception: syntax error, unexpected identifier "json_encode", expecting ":" /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 37
ERROR - 2021-07-26 15:42:51 --> Severity: error --> Exception: syntax error, unexpected identifier "json_encode", expecting ":" /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 37
ERROR - 2021-07-26 15:42:52 --> Severity: error --> Exception: syntax error, unexpected identifier "json_encode", expecting ":" /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 37
ERROR - 2021-07-26 15:42:59 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:43:26 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:43:37 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:43:47 --> Severity: Warning --> Array to string conversion /opt/applications/apache2/htdocs/Projects/azzay/mankeu/system/database/DB_query_builder.php 837
ERROR - 2021-07-26 15:43:47 --> Query error: Unknown column 'Array' in 'where clause' - Invalid query: SELECT `santri`.*, `tahun_angkatan`.`tahun_angkatan`
FROM `santri`
JOIN `tahun_angkatan` ON `tahun_angkatan`.`id` = `santri`.`id_angkatan`
JOIN `groups` ON `groups`.`id` = `tahun_angkatan`.`id_grup`
WHERE `groups`.`id` IN(Array)
ERROR - 2021-07-26 15:43:47 --> Severity: error --> Exception: Call to a member function result() on bool /opt/applications/apache2/htdocs/Projects/azzay/mankeu/application/helpers/general_helper.php 39
ERROR - 2021-07-26 15:43:58 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:44:42 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:45:03 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:45:15 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:45:30 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:46:04 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:46:14 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:46:31 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:46:34 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:46:36 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:46:38 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:46:42 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:46:43 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:46:46 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:46:54 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:47:15 --> 404 Page Not Found: Assets/theme
ERROR - 2021-07-26 15:47:18 --> 404 Page Not Found: Assets/theme
