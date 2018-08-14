<?php

require_once __DIR__ . '/assets/sessions.php';
require_once __DIR__ . '/assets/models/users.php';
require_authenticated();

include __DIR__ . '/assets/templates/header.php';
?>


<div class="container">
    <div class="row">

        <?php if (http_response_code() === 403) : ?>
        <div class="col-lg-12 alert alert-danger">
            <span>エラーです！</span>
        </div>
        <?php endif; ?>

        <div class="col-lg-12">
            <h2>新しい社員を登録する</h2>
        </div>

        <div class="col-lg-12">
            <form method="post" action="create.php">
                <div class="form-group">
                    <label for="InputUsername">社員名</label>
                    <input type="text" class="form-control" id="InputUsername" name="name" placeholder="社員名">
                </div>
                <input type="hidden" name="company" value="<?= $_SESSION['company'] ?>">
                <button type="submit" class="btn btn-default">作成する</button>
            </form>
         </div>

        <div class="col-lg-12">
            <hr>
            <a href="index.php">社員一覧に戻る</a>
        </div>

    </div>
</div>
