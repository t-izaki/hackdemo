<?php

require_once __DIR__ . '/assets/sessions.php';
require_once __DIR__ . '/assets/models/admins.php';
require_unauthenticated();

//POSTメソッド時の処理
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    
    if (authenticate($username, $password)) {
        header('Location: index.php');
        exit;
    }
    http_response_code(403);
}

include __DIR__ . '/assets/templates/header.php';
?>

<div class="container">
    <div class="row">

        <?php if (http_response_code() === 403) : ?>
        <div class="col-lg-12 alert alert-danger">
            <span>ユーザ名またはパスワードが違います</span>
        </div>
        <?php endif; ?>

        <div class="col-lg-12">
            <h2>ログイン画面</h2>
            <form method="post" action="">
                <div class="form-group">
                    <label for="InputUsername">ユーザー名</label>
                    <input type="text" class="form-control" id="InputUsername" name="username" placeholder="ユーザー名">
                </div>
                <div class="form-group">
                    <label for="InputPassword">パスワード</label>
                    <input type="password" class="form-control" id="InputPassword" name="password" placeholder="パスワード">
                </div>
            <button type="submit" class="btn btn-default">ログイン</button>
            </form>
        </div>

    </div>
</div>

