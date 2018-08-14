<?php

require_once __DIR__ . '/assets/sessions.php';
require_once __DIR__ . '/assets/models/users.php';
require_authenticated();

$userid = filter_input(INPUT_GET, 'userid');
$user = Users::get($userid)->fetch_assoc();

include __DIR__ . '/assets/templates/header.php';
?>

<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <h2><?= $user['name'] ?>の詳細</h2>
        </div>

        <div class="col-lg-12 mb-30">
            <h3>名前</h3>
            <p><?= $user['name'] . "（" . $user['hiragana'] . "）"; ?></p>

            <h3>所属</h3>
            <?= $user['company']; ?>

            <h3>出身地</h3>
            <?= $user['birthplace']; ?>

            <h3>入社期</h3>
            <?= $user['grade']; ?>

            <h3>誕生日</h3>
            <?= $user['birthday']; ?>
        </div>

        <div class="col-lg-12">
            <hr>
            <a href="index.php">社員一覧に戻る</a>
        </div>

    </div>
</div>
