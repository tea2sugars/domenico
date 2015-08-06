<?php
    define('PERCH_LICENSE_KEY', 'P21508-ZTB426-JKX581-MCN520-AQC005');

    define("PERCH_DB_USERNAME", 'domenico');
    define("PERCH_DB_PASSWORD", 'pizzadude');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "domenico");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'rik@creativitea.co.uk');
    define('PERCH_EMAIL_FROM_NAME', 'Rik Barwick');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
