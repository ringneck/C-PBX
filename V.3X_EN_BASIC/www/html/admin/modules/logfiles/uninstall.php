<?php
if (!defined('FREEPBX_IS_AUTH')) { die('No direct script access allowed');}
sql('DROP TABLE logfile_settings');
sql('DROP TABLE logfile_logfiles');
?>