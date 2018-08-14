<?php

require_once __DIR__ . '/assets/sessions.php';
require_once __DIR__ . '/assets/models/users.php';
require_authenticated();

$userid = filter_input(INPUT_GET, 'userid');
$result = Users::delete($userid);

header('Location: index.php');
exit;
