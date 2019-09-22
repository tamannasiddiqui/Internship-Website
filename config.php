 
<?php
 

# DATABASE Details
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'contact_poly');


define('BASE_PATH', '/polyvalent-website/');
define('APP_URL', 'http://localhost/polyvalent-website');


# PATH 
define('ASSETS_PATH', BASE_PATH.'assets');
define('IMAGE_PATH', BASE_PATH.'assets/images');
define('UPLOAD_PATH', BASE_PATH.'uploads');
define('ACTION_PATH', BASE_PATH.'app/action');

# URL
define('SITE_URL', APP_URL);
define('UPLOAD_URL', APP_URL.'/uploads');

# DIR
define('BASE_DIR', dirname(__FILE__) );
define('CLASS_DIR', BASE_DIR.'/app/classes');
define('UPLOAD_DIR', BASE_DIR.'/uploads');


date_default_timezone_set('Asia/Calcutta');

?>