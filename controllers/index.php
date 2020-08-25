<?php

$tasks = $database->selectAll('admin');
require 'views/index.view.php';