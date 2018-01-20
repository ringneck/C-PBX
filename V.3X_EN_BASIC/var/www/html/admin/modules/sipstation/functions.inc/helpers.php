<?php
/* PHP < 5.3.0 */

if (!defined("JSON_ERROR_NONE")) {
   define("JSON_ERROR_NONE", 0);
   define("JSON_ERROR_DEPTH", 1);
   define("JSON_ERROR_STATE_MISMATCH", 2);
   define("JSON_ERROR_CTRL_CHAR", 3);
   define("JSON_ERROR_SYNTAX", 4);
   define("JSON_ERROR_UTF8", 5);
}

if (!function_exists("json_last_error")) {
   function json_last_error() {
       return JSON_ERROR_NONE;
   }
}