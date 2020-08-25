<?php

$config = require 'config.php';
require 'database/Connection.php';
require 'core/Router.php';
require 'core/Request.php';
require 'core/database/QueryBuilder.php';

return new QueryBuilder(
    Connection::make($config['database'])
);