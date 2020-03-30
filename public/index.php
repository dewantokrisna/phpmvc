<?php

if (!session_id()) session_start();

// bootstraping
require_once '../app/init.php';

$app = new App;
