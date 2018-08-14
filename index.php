<?php

require_once __DIR__ . '/assets/sessions.php';
require_once __DIR__ . '/assets/models/users.php';
require_authenticated();

$name = filter_input(INPUT_POST, 'name');
$users = Users::search($_SESSION['company'], $name);

include __DIR__ . '/assets/templates/header.php';
?>

<div class="container">
    <div class="row">

        <div class="col-lg-12">
            <h2><?= $_SESSION['company'] ?>のページ</h2>
        </div>

        <div class="col-lg-12 mb-30">
            <h3>検索</h3>
            <form method="post" action="">
                <div class="form-group">
                    <label for="InputUsername">社員名</label>
                    <input type="text" class="form-control" id="InputUsername" name="name" placeholder="社員名" value="<?= $name ?>">
                </div>
                <button type="submit" class="btn btn-default">検索</button>
                <a href="index.php">全員を表示する</a>
            </form>
         </div>

        <div class="col-lg-12">
            <h3>社員名簿</h3>
        </div>

        <div class="col-lg-12 text-right">
            <a href="new.php">新規ユーザーを追加する</a>
        </div>

        <div class="col-lg-12">
            <table class="table table-striped">
                <thead>
                    <tr><th>名前</th><th>よみかた</th><th>所属</th><th></th><th></th>
                </thead>
                <tbody>
                    <?php while ($user = $users->fetch_array()) : ?>
                    <tr>
                        <td><?= $user["name"] ?></td>
                        <td><?= $user["hiragana"] ?></td>
                        <td><?= $user["company"] ?></td>
                        <td><a href="show.php?userid=<?= $user['ID'] ?>">詳細</a></td>
                        <td><a href="delete.php?userid=<?= $user['ID'] ?>" onClick='alert("削除します。よろしいですか？")'>削除</a></td>
                    </tr>
                    <?php endwhile ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
