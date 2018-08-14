<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="assets/styles/style.css">
<title>社員管理システム｜はっくでも(hackdemo)</title>

<?php
if (isset($_SESSION['latest_sql'])) {
    echo "最後に実行されたクエリ: " . htmlspecialchars($_SESSION['latest_sql']);
}?>

<div class="container-fluid mb-30">
    <div class="row bg-primary">

        <div class="col-lg-6">
            <h1><a href="index.php" style="color: white;">社員管理システム｜HACKDEMO</a></h1>
        </div>

    </div>

    <?php if (isset($_SESSION['username'])) : ?>
    <div class="row">
        <div class="col-lg-12 text-right">
            <p>
                ようこそ、<?= $_SESSION['username'] ?>さん！  
                <a href="logout.php">ログアウトする</a>
            </p>
         </div>
    </div>
    <?php endif; ?>
    
</div>
