<?php

require_once __DIR__ . '/assets/sessions.php';
require_once __DIR__ . '/assets/models/users.php';
require_authenticated();

//POSTメソッド時の処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $params = array(
        "name" => filter_input(INPUT_POST, 'name'),
        "company" => filter_input(INPUT_POST, 'company')
    );

    $result = Users::create($params);
    if ($result) {
        header('Location: index.php');
        exit;
    }
}

header('Location: new.php');
exit;
