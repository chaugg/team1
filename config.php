<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Asia/Ho_Chi_Minh" );
define( "DB_DSN", "mysql:host=localhost;dbname=testDB" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "chaugiang26" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "root" );
define( "ADMIN_PASSWORD", "chaugiang26" );
require( CLASS_PATH . "/Article.php" );


?>
