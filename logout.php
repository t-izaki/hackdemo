<?php

require_once __DIR__ . '/assets/sessions.php';
require_authenticated();

session_destroy();

header('Location: login.php');
exit;
