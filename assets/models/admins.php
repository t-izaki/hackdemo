<?php

require_once __DIR__.'/appModel.php';

class Admins extends AppModel
{
    public static function checkAuth($username, $password)
    {
        $encrypted_password = crypt($password, '$2y$07$q2TkOUHq5HpCXxU2eXN88m$');
        $sql = "SELECT * FROM admin WHERE name = '$username' AND encrypted_password = '$encrypted_password'";
        $_SESSION['latest_sql'] = $sql;
        return self::db()->query($sql);
    }
}
