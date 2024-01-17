<?php

require('./database/mysql.php');

$config = require('./config/dev.config.php');
$db = new Database($config['database']);

require('./routes/web.php');