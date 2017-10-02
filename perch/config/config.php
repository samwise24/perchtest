<?php
    define('PERCH_LICENSE_KEY', 'P3-LOCAL-XKC170-BNC929-FRA018');

    define("PERCH_DB_USERNAME", 'root');
    define("PERCH_DB_PASSWORD", '81iqZG4MO682wCQD');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "perchtest");
    define("PERCH_DB_PREFIX", "perch3_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'swise335@gmail.com');
    define('PERCH_EMAIL_FROM_NAME', 'admin admino');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
